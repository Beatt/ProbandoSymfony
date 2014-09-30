<?php

namespace Prueba\pruebaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VendedorControllerTest extends WebTestCase
{
    public function test()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
