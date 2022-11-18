<?php

if (! function_exists('IsAdmin')) {
    function IsAdmin() { 
        return (auth()->user()->role == 'admin') ? true : false;
    }
}

if (! function_exists('IsUser')) {
    function IsUser() {
        return (auth()->user()->role == 'user') ? true : false;    }
}

if (! function_exists('IsHasCompane')) {
    function IsHasCompane() {
        dd('IsHasCompane');
    }
}
