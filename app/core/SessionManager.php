<?php

namespace App\Core;

class SessionManager
{
    public static function sessionStart() {
        if(session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function sessionCheck() : bool {
        if  (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    public static function sessionDestroy() {
        if(session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
        }
    }
}