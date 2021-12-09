<?php
class Session{
    public static function init(){
        @session_start();
    }
    public static function get($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public static function set($key, $value = null){
        $_SESSION[$key] = $value;
    }
    public static function delete($key){
       if(self::get($key))
           unset($_SESSION[$key]);
    }
    public static function destroy(){
         @session_destroy();
    }
}
?>