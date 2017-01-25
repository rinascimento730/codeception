<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/login/');
$I->fillField('user_name','davert@hoge.jp');
$I->fillField('password','qwerty');
$I->click('#login');
$I->see('Hello, davert@hoge.jp');
