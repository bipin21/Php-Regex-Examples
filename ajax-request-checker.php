<?php

function is_ajax_request(){
    if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        return TRUE;
    }else{
        return FALSE;
    }
}

// print response
var_dump(is_ajax_request());


?>