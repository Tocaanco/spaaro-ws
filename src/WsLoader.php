<?php

use Spaaro\Spaaro;

if (!function_exists('spaaro')) {

    function field()
    {
        $Spaaro = new Spaaro();
        return $Spaaro;
    }

}

if (!function_exists('spaaroConvert2english')) {
    function spaaroConvert2english( $string )
    {
        $newNumbers = range( 0, 9 );
        $arabic     = array( '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩' );
        $string     = str_replace( $arabic, $newNumbers, $string );
        return $string;
    }
}

if (!function_exists('spaaroFixPhone')) {
    function spaaroFixPhone( $string = null )
    {
        if(!$string){
        return null;
        }

        $result = spaaroConvert2english($string);
        $result = ltrim($result, '00');
        $result = ltrim($result, '0');
        $result = ltrim($result, '+');
        return $result;
    }
}