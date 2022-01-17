<?php

use CodeIgniter\I18n\Time;

if(!function_exists("getCurrentDate")){
    function getCurrentDate(){
        return new time();
    }
}