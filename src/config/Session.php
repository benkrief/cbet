<?php 

namespace App\src\config;

class Session {
    public function set($id,$value){
        $_SESSION[$id]=$value;
    }
    public function get($id)
        {
            if(isset($_SESSION[$id])){
                return $_SESSION[$id];
            }
            return null;
        }
    public function remove($id)
    {
        unset($_SESSION[$id]);
    }

    public function stop()
    {
        session_destroy();
    }
}
?>