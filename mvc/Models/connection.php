<?php

class Connection{

    static public function connect(){

        $link = new PDO("mysql:host=localhost;dbname=mvc", "root", "");

        $link -> exec("set names utf8");

        return $link;
    }

}