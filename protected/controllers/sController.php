<?php
/**
 * Created by PhpStorm.
 * User: etema
 * Date: 7/16/16
 * Time: 11:46 AM
 */
class sController extends Controller{

    private $client;
    protected $myKey;
    private $serverUrl = 'http://webservice-server.dev/';

    function __construct(){

        $this->client = new nusoap_client($this->serverUrl . '/mykey?wsdl', null);
        $this->myKey = $this->client->call('authenticateForm.createKey', array());

        parent::__construct();
    }

    public function actionIndex()
    {
        $this->render('home');
    }

    public function actionCalculate()
    {
        //normalize input
        $nForm = new normForm();

        $input = $_POST['input'];

        $l = $nForm->normalize($input);

        if( is_array($l) ){
            $this->client = new nusoap_client($this->serverUrl . '/?wsdl', null);
            $result = $this->client->call('calculatorForm.calculate', array('n1'=>$l['n1'], 'n2'=>$l['n2'], 'c'=>$l['c'], 'authenticateKey'=>$this->myKey));

            if( !is_array($result) ){
                echo $result;
                exit;
            }else{
                echo $this->getErrorLabel($result['faultcode']);
            }
        }else{
            //Error code
        }
    }
}