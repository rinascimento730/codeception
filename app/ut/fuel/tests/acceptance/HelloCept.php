<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/hello/fujinaga/');
$I->see('Hello, fujinaga');
$I->see('Congratulations, you just used a Presenter!');
#$I->see('Hoge! fujinaga.');