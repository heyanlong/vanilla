<?php


namespace Tests;


class IndexTest extends TestCase
{
    public function testIndex() {
        $response = $this->get('/', []);
        $this->assertJson($response->getBody());
    }
}