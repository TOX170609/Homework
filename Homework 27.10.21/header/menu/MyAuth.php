<?php
class MyAuth{
    public $login;
    public $password;

    public function __construct($login,$password){
        $this->login = $login;
        $this->password = $password;
    }
    public function Db_connect(){
        $hostname = 'localhost';
        $username = 'Anton';
        $password = 'Fact2021';
        $bdname = 'my-site';
        $db_connect = mysqli_connect($hostname, $username, $password, $bdname);
        mysqli_set_charset($db_connect, 'utf8');
        $select = mysqli_query($db_connect, "SELECT * FROM `authorization`");
        $arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
        $login = md5(trim($_POST['login'] ));
        $password = md5(trim($_POST['password']));
        foreach ($arr_select as $value) {
            if ($value['login'] == $login) {
                if ($value['password'] == $password) {
                    header("Location: feedback.php");
                } else {
                    echo "Неправильно, введите логин или пароль, попробуйте еще раз!";
                    break;
                }
            }
        }
    }

}


