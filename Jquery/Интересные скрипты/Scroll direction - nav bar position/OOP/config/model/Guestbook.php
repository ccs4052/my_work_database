<?php

class Guestbook
{
    public static $result = array();
    /**
     * @return array
     */
    public static function Select(){
        $connect = Database::connect();
        $sql = mysqli_query($connect, "SELECT * FROM guestbook  ORDER BY id DESC");
        return $sql;
    }
    public static function all (){
        $connect = Database::connect();
        $sql = mysqli_query($connect, "SELECT count(*) FROM guestbook");
        return $sql;
    }
    /**
     * @param $name
     * @param $ema
     * @param $msg
     * @return bool
     */
    public function Insert($name,$email,$msg){
        $connect = Database::connect();
        $query = mysqli_query($connect,"INSERT INTO guestbook (name, email, msg) VALUES('$name', '$email', '$msg')");
        if($query === TRUE){
            echo 'ok';
            return TRUE;
        }else{
            echo 'ошибка';
            return FALSE;
        }
    }
    public  function Delete($id){
        $connect = Database::connect();
        $query = mysqli_query($connect,"DELETE FROM guestbook WHERE id='".$id."'");
        if($query === TRUE){
            echo 'ok';
            return TRUE;
        }else{
            echo 'ошибка';
            return FALSE;
        }
    }
}