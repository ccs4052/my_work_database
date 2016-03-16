<?php   /*
class DataBase {
    public $DB = 'localhost';
    public $DBLOGIN = 'user';
    public $DBPASS = '11111';
    public $DBNAME = 'bogdan';
    public function db_connect(){      //функция поключения к ДБ
        $connect = mysqli_connect($this->DB,$this->DBLOGIN,$this->DBPASS,$this->DBNAME) or die (mysqli_error());
        return $connect;
    }
}
class Guestbook extends DataBase{                   // GuestBookDb наследует все методы и переменные класса DataBase
    public function Select(){
       // $connect=$this->db_connect();   //МЕТОД из НАСЛЕДУЕМОЙ ФУНКЦИИ DataBase (несет в себе пожключение в ДБ)
        $sql = mysqli_query($this->db_connect(),"SELECT name, email, msg FROM guestbook ORDER BY id DESC");
        while($rows = mysqli_fetch_assoc($sql)) {
            $gbook[]= $rows;
        }
        return $gbook; //возвращаем массив с запросом в БД
    }
    public function Insert($name,$email,$msg){
       $query = mysqli_query($this->db_connect(),"INSERT INTO guestbook (name, email, msg) VALUES('$name', '$email', '$msg')");
            if($query === TRUE){
                echo 'ok';
                return TRUE;
            }else{
                echo 'ошибка';
                return FALSE;
            }
    }
}
*/
?>