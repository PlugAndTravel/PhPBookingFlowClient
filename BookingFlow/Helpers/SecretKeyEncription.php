<?php

/**
 * SecretKeyEncription short summary.
 *
 * SecretKeyEncription description.
 *
 * @version 1.0
 * @author marius
 */

namespace PlugAndTravel\Encrypt;

class SecretKeyEncription
{
    public static function encrypt($secret_key){
        $minutes = SecretKeyEncription::getTotalMinutes();
        $salted_secret_key = $secret_key.$minutes;
        $encriptedKey = sha1($salted_secret_key);
        return $encriptedKey;
    }

    private static function getTotalMinutes()
    {
        $minutes = round( time() / 60);
        return $minutes;
    }
}