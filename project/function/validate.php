<?php

function checkEmpty($value){

    if(empty($value))
    {
        return false;// لو فيه قيم رجع ليس فارغ
    
    }
    return true ; 

}
function ValidEmail($email){

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){// if email not same the basck eamil return  not email
        return false ; 
    }
    return true ;
}



