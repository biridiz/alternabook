<?php

class AuthHelper {

    static function get(){
        session_start();
            
        if(!isset($_SESSION["loggedUserId"]))
            return null;
        
        $user = DB::table('usuario')->where('id', $_SESSION["loggedUserId"])->first();
        
        if($user == null) {
            unset($_SESSION["loggedUserId"]);
            return null;
        }

        return $user;
    }

    static function has(){
        session_start();
            
        if(!isset($_SESSION["loggedUserId"]))
            return false;
        
        $user = DB::table('usuario')->where('id', $_SESSION["loggedUserId"])->first();
        
        if($user == null) {
            unset($_SESSION["loggedUserId"]);
            return false;
        }

        return true;
    }
}