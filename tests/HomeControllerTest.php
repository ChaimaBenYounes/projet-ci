<?php
namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/home');
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertSame('Hello World!', \trim($crawler->filter('title')->text()));
        $this->assertSame('Hello World!', \trim($crawler->filter('h1')->text()));
    }
}