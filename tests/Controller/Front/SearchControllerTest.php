<?php

namespace App\Tests\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SearchControllerTest extends WebTestCase
{
    public function testSearchFormFromHome(): void
    {
        $client = static::createClient();
        // We send the test to the home page from which we run the search form request as an unconnected visitor
        $crawler = $client->request('GET', '/');

        // We filter the DOM of the page to find the node with the form
        $DOMForm = $crawler->filter('form');
        $form = $DOMForm->form();

        // We specify the value in the input text which is called "searchTerm"
        $form['searchTerm'] = 'Goonies';

        $client->submit($form);
        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('.bloc-detail>a');
    }

}