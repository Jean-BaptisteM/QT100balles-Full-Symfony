<?php

namespace App\Tests\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UrlTest extends WebTestCase
{
    /**
     * we can pass all the urls to be tested as a function parameter
     * @dataProvider urlsList
     */
    public function testUrl($url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);
        
        $this->assertResponseIsSuccessful();
    }

    /**
     * initialization of a function returning in an array all 
     * the urls that we want to test ()
     */
    public function urlsList()
    {
        return [
            ['/contact'],
            ['/legalmention'],
            ['/sitemap'],
            ['/'],
            ['/media/liste/1'],
            ['/media/liste/2'],
            ['/media/liste/3'],
            ['/media/liste/4'],
            ['/media/les-goonies'],
            ['/item/liste/1'],
            ['/item/liste/2'],
            ['/item/liste/3'],
            ['/item/furby'],
            ['/person/1'],
        ];
    }
}
