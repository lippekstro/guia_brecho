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

    public static function sanitizaString($input) {
        $input = trim($input);
        $input = filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
        return $input;
    }

}