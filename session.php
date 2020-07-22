<?php

class Session1{


    public function __construct()
    {
        session_start();

    }


    public function __set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    //retourner valeur d'un attribut
    public function __get($name)
    {
        if(isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
    }

    //supprimer un attribut
    public function remove($name)
    {
        unset($_SESSION[$name]);
    }

    //DECONNEXION
    public function stop()
    {
        session_start();
        session_destroy();
    }

}
