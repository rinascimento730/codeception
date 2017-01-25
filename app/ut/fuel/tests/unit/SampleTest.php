<?php


class SampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $this->assertEquals('1', 1);
        $this->assertEquals('2', 2);
        $this->assertEquals('3', 3);
    }
}