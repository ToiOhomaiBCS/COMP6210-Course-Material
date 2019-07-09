<?php

    class UserTest extends \PHPUnit\Framework\TestCase
    {
        public function testToSeeIfWeCangetFirstName()
        {
            $user = new \App\Models\User;

            $user->setFirstname('Billy');

            $this->assertEquals($user->getFirstname(), 'Billy');
        }
    }