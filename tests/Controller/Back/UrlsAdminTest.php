<?php

namespace App\Tests\Controller\Back;


use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UrlsAdminTest extends WebTestCase
{
    /**
     * we can pass all the urls to be tested as a function parameter
     * @dataProvider adminUrlsListToCheck
     */
    public function testUrlAdminAccess($url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);
        $this->assertResponseRedirects();

        $userRepository = static::getContainer()->get(UserRepository::class);

        // ROLE_USER
        $testUser = $userRepository->findOneBy(['email' => 'damien@oclock.io']);
        $client->loginUser($testUser);
        $client->request('GET', $url);
        $this->assertResponseStatusCodeSame(403);

        // ROLE_ADMIN
        $testUser = $userRepository->findOneBy(['email' => 'jbmoisy@hotmail.fr']);
        $client->loginUser($testUser);
        $client->request('GET', $url);
        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('h1');
    }

    /**
     * initialization of a function returning in an array all 
     * the urls that we want to test
     */
    public function adminUrlsListToCheck()
    {
        return [
            ['/admin'],
            ['/admin/media/liste/1'],
            ['/admin/media/new'],
            ['/admin/media/1'],
            ['/admin/media/1/edit'],
            ['/admin/media/category/'],
            ['/admin/media/category/new'],
            ['/admin/media/category/1'],
            ['/admin/media/category/1/edit'],
            ['/admin/item/liste/1'],
            ['/admin/item/new'],
            ['/admin/item/1'],
            ['/admin/item/1/edit'],
            ['/admin/item/category/'],
            ['/admin/item/category/new'],
            ['/admin/item/category/1'],
            ['/admin/item/category/1/edit'],
            ['/admin/person/'],
            ['/admin/person/new'],
            ['/admin/person/1'],
            ['/admin/person/1/edit'],
            ['/admin/type/'],
            ['/admin/type/new'],
            ['/admin/type/1'],
            ['/admin/type/1/edit'],
            ['/admin/user/'],
            ['/admin/user/new'],
            ['/admin/user/3'],
            ['/admin/user/3/edit'],
            ['/admin/comment/media'],
            ['/admin/comment/item'],
            ['/admin/comment/media/5'],
            ['/admin/comment/item/1'],
        ];
    }

}
