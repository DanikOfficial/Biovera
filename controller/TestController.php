<?php
// importanto a classe GenericController
require_once(__DIR__.'/../model/TestModel.php');
require_once(__DIR__.'/../core/GenericController.php');

    class TestController extends GenericController {

        function __construct() {
            echo 'Test Controller Created '. "<br />";
            $this->test_model = new TestModel();
        }

        //GET para todos requests com verbo HTTP GET
        function hello_get(...$args) {
            $this->test_model->sayHello('Generic Model');
        }

        // GET
        function test_get() {
            $this->load_view('home', array('content' => '<h1>This content is sent from the controller</h1>'));
        }

        //POST para todos requests com verbo HTTP POST
        function hello_post(...$args) {

        }
    }


 ?>