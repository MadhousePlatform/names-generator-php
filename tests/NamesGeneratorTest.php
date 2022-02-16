<?php

namespace MadhousePlatform\Tests;

use MadhousePlatform\NamesGenerator;
use PHPUnit\Framework\TestCase;

class NamesGeneratorTest extends TestCase
{

    private array $adjectives = [];
    private array $people = [];

    public function setUp() : void
    {
        parent::setUp();

        $this->adjectives = NamesGenerator::$adjectives;
        $this->people = NamesGenerator::$people;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        NamesGenerator::$adjectives = $this->adjectives;
        NamesGenerator::$people = $this->people;
    }

    public function testRandomNameWithoutOptions()
    {
        NamesGenerator::$adjectives = ['inspiring'];
        NamesGenerator::$people = ['wozniak'];

        $random_name = NamesGenerator::generate();

        $this->assertEquals("inspiring-wozniak", $random_name);
    }

    public function testRandomNameWithDelimiterOption()
    {
        NamesGenerator::$adjectives = ['inspiring'];
        NamesGenerator::$people = ['wozniak'];

        $random_name = NamesGenerator::generate(["delimiter" => "."]);

        $this->assertEquals("inspiring.wozniak", $random_name);
    }

    public function testRandomNameWithTokenOption()
    {
        NamesGenerator::$adjectives = ['inspiring'];
        NamesGenerator::$people = ['wozniak'];

        $random_name = NamesGenerator::generate(["token" => 5]);

        $this->assertMatchesRegularExpression("/(inspiring)(-)(wozniak)(-)(\\d{5})$/i", $random_name);
    }
}
