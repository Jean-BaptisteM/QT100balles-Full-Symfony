<?php

namespace App\Tests\Controller\Front;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
    /**
     * just for a new user
     */
    public function testUrl(): void
    {
        $client = static::createClient();
        $client = $client->request('GET', '/user/new');
        $this->assertResponseIsSuccessful();
        
    }

    /**
     * we can pass all the urls to be tested as a function parameter
     * @dataProvider urlsList
     */
    public function testUserPage($urls): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);

        $testUser = $userRepository->findOneBy(['email' => 'jbmoisy@hotmail.fr']);
        $client->loginUser($testUser);
        $client->request('GET', $urls);
        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('h1');
    }

    /**
     * initialization of a function returning in an array all 
     * the urls that we want to test ()
     */
    public function urlsList()
    {
        return [
            ['/user/new'],
            ['/user/7'],
            ['/user/7/edit'],
        ];
    }
}
