<?php
namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class HomeworkCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    /**
     * @dataProvider pageProvider
     *
     */
    public function testPages(FunctionalTester $I, \Codeception\Example $page)
    {
        $I->amOnPage($page['url']);
        $I->see($page['title'], 'h1');
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return [
            ['url' => "/", 'title' => "Congratulations!"],
            ['url' => "/site/about", 'title' => "About"],
            ['url' => "/site/contact", 'title' => "Contact"],
            ['url' => "/site/signup", 'title' => "Signup"],
            ['url' => "/site/login", 'title' => "Login"]
        ];
    }
}
