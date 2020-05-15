<?php
function is_unicom( $mobile = '' ){
    $prefix_list = array('130','131','132','145','146','155','156','166','167','185','186','171','175','176','196');
    $prefix = substr( $mobile , 0 , 3 );
    $res = FALSE;
    if( in_array( $prefix , $prefix_list ) ){
        $res = TRUE;
    }

    //虚拟运营商
    if( $prefix == '170' && in_array( substr( $mobile , 0 , 4 ) , array('1704','1707' ,'1708', '1709') ) ){
        $res = TRUE;
    }

    return $res;
}

function is_telecom( $mobile = '' ){

    $prefix_list = array( '133','141','153','162','173','177','180','181','189','190','191','193','199' );
    $prefix = substr( $mobile , 0 , 3 );
    $res = FALSE;
    if( in_array( $prefix , $prefix_list ) ){
        $res = TRUE;
    }
    //虚拟运营商
    if( $prefix == '170' &&  in_array( substr( $mobile , 0 , 4 ) , array('1700' ,'1701','1702') ) ){
        $res = TRUE;
    }

    return $res;
}
