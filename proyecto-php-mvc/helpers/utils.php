<?php
class utils
{
    public static function deleteSession($name)
    {
        if ($_SESSION[$name]) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }
}
