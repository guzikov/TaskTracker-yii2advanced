<?php
namespace frontend\tests;

use common\models\User;
use frontend\models\ContactForm;

class HomeworkTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testTrue()
{
    $testedValue1 = 10;
    $this->assertTrue($testedValue1 == 10);
}

    public function testEqual()
    {
        $testedValue2 = 1024;
        $this->assertEquals(1024, $testedValue2);
    }

    public function testLessThan()
    {
        $testedValue3 = 256;
        $this->assertLessThan(1024, $testedValue3);
    }

    public function testArrayHasKey()
    {

        $testedArr = [
            'id' => 1,
            'name' => 'testName'
        ];
        $this->assertArrayHasKey('name', $testedArr);
    }

    public function testAttributeEqual()
    {
        $testObj = new ContactForm();
        $testObj->name = 'sergei';

        $var = 'sergei';

        $this->assertAttributeEquals($var, 'name', $testObj);
    }





}