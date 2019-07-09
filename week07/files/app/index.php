<?php

    namespace App\Main;

    require('./Models/user.php');
    use \App\Models\User;

    $user = new User();
    
    $user->setFirstname('Jeff');

    echo $user->getFirstName();