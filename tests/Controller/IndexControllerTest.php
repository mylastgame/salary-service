<?php


namespace App\Tests\Controller;


use Liip\FunctionalTestBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    /**
     * @test
     */
    public function TestIndex()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
        $this->isSuccessful($client->getResponse(), true);

        $content = $this->fetchContent('/');
        $this->assertContains('Hello world', $content);
    }
}