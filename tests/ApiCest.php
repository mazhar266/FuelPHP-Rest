<?php

use \Codeception\Util\HttpCode;
// use League\FactoryMuffin\Faker\Facade as Faker;

class ApiCest 
{
    /**
     * test the API version info
     */
    public function tryApi(ApiTester $I)
    {
        // $I->startFollowingRedirects();
        $I->haveHttpHeader('Accept', 'application/json');
        $I->sendGET('/');
        // $I->seeResponseCodeIs(200);
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array('name' => 'Sample'));
        $I->seeResponseContainsJson(array('version' => '1.0.2'));
    }

    /**
     * test the error info
     */
    public function tryError(ApiTester $I)
    {
        $I->haveHttpHeader('Accept', 'application/json');
        $I->sendGET('/404');
        $I->seeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    /**
     * test the demo endpoint
     */
    public function tryDemo(ApiTester $I)
    {
        $I->haveHttpHeader('Accept', 'application/json');
        $I->sendGET('/api/v1/demo');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
    }
}
