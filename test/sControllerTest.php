<?php
/**
 * Created by PhpStorm.
 * User: etema
 * Date: 7/17/16
 * Time: 1:16 PM
 */
require_once dirname(dirname(__FILE__)) . '/phpunit/phpunit/ForwardCompatibility/TestCase.php';
use phpunit\Framework\TestCase;

//$path = dirname(dirname(__FILE__)) . '/index.php';
//include_once $path;

$path = dirname(dirname(__FILE__)) . '/protected/components/CController.php';
include_once $path;

$path = dirname(dirname(__FILE__)) . '/protected/components/Controller.php';
include_once $path;

$path = dirname(dirname(__FILE__)) . '/protected/extentions/nusoap-load.php';
include_once $path;

$path = dirname(dirname(__FILE__)) . '/protected/controllers/sController.php';
include_once $path;



class sControllerTest extends TestCase{

    private $c;

    protected function setUp()
    {
        $this->c = new sController();
    }

    protected function tearDown()
    {
        $this->c = null;
    }

    public function testAdd()
    {
        $_POST['n1'] = '2';
        $_POST['n2'] = '3';
        $_POST['c'] = 'c';

        $this->c->actionCalculate();
    }
}