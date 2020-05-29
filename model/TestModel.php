<?php

require_once(__DIR__.'/../core/GenericModel.php');

class TestModel extends GenericModel {

    function __construct() {
        parent::__construct();
        echo 'Test Model Created'. "<br />";
    }

    // Test se o model está a funcionar

    function sayHello($name) {
        echo "Welcome to " . $name;
    }

}


?>