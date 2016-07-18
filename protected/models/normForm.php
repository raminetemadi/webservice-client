<?php
/**
 * Created by PhpStorm.
 * User: etema
 * Date: 7/16/16
 * Time: 7:19 PM
 */
class normForm{

    public function normalize(&$input)
    {
        if( empty($input) ) return false;

        $stop = false;
        $n1 = '';
        $n2 = '';
        $c = '';

        for($i=0; $i<=strlen($input)-1; $i++){
            $s = substr($input, $i, 1);

            if( $s != '+' && $s != '*' && $s != '-' ) {
                if ($stop == false)
                    $n1 .= $s;
                else
                    $n2 .= $s;
            }else{
                if( $stop == false ){
                    $stop = true;
                    $c = $s;
                }else{
                    $input = substr($input, $i, count($input));
                    return array('n1'=>$n1, 'n2'=>$n2, 'c'=>$c);
                }
            }

        }

        if( $stop == false) return false;
        $input = '';
        return array('n1'=>$n1, 'n2'=>$n2, 'c'=>$c);
    }
}