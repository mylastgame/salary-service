<?php


namespace App\Tests;


use Liip\FunctionalTestBundle\Test\WebTestCase;

class IAmAliveControllerTest extends WebTestCase
{
    /** @test */
    public function returns200StatusCode()
    {
        $client = $this->createClient();
        $client->request(200,'/adapter/comments/i-am-alive');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}