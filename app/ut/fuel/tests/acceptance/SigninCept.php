<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/user/login/');
$I->fillField('username','davert');
$I->fillField('password','qwerty');
$I->click('#login');
$I->see('Hello, davert');
