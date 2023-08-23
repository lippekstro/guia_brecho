<?php

class Utilidades{
    
    public static function validaEmail($email){
        $email = trim($email);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function sanitizaEmail($email){
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public static function validaFloat($valor){
        return filter_var($valor, FILTER_VALIDATE_FLOAT);
    }

    public static function validaInt($valor){
        return filter_var($valor, FILTER_VALIDATE_INT);
    }

    public static function sanitizaString($s) {
        $s = htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
        $s = trim($s);
        return $s;
    }

}