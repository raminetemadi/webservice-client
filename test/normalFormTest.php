<?php
/**
 * Created by PhpStorm.
 * User: etema
 * Date: 7/17/16
 * Time: 11:08 AM
 */


require_once dirname(dirname(__FILE__)) . '/phpunit/phpunit/ForwardCompatibility/TestCase.php';
use phpunit\Framework\TestCase;


$path = dirname(dirname(__FILE__)) . '/protected/models/normForm.php';
include_once $path;

class normFormTest extends TestCase{

    private $nForm;

    protected function setUp(){
        $this->nForm = new normForm();
    }

    protected function tearDown()
    {
        $this->nForm = null;
    }

    public function testAdd()
    {
        $input = '2*4';

        $r = $this->nForm->normalize($input);

        $this->assertEquals(array('n1'=>2, 'n2'=>4, 'c'=>'*'), $r);
    }

}