<?php

class model_user extends model
{
    public function get_users()
    {
         return $this->db->query("SELECT login,id FROM users ");
    }
    public function add_friend($user)
    {
        return$this->db->execute("UPDATE users SET friends='".$user."'");
    }
    public function sms()
    {
        /**
         * Принимаем постовые данные. Очистим сообщение от html тэгов
         * и приведем id получателя к типу integer
         */
        if(!empty($_POST['message'])) {
            $message = htmlspecialchars($_POST['message']);
        }
        if(!empty($_POST['to'])) {
            $to = (int)$_POST['to'];
            $sql = "INSERT INTO messages (from_user,to_user,message,flag) values
    ('" . $_SESSION['id'] . "','" . $to . "','" . $message . "','0')";
            $this->db->query($sql);
        }
    }

    public function get_sms()
    {
        /**
         * Достаем сообщения
         */
        echo 'входящие <br>';
        $sth=$this->db->query("SELECT * FROM messages WHERE to_user='".$_SESSION['id']."' ORDER BY id DESC");
        $l = 0;
        foreach ($sth as $row){
            $l++;
            echo 'Сообщение №'.$row['id'].'  <a href="/user/message/'.$l.$row["id"].'">Открыть</a><br />';
        }

//        echo 'исходящие  <br>';
//        $get_sms = $this->db->query("SELECT * FROM messages WHERE from_user='".$_SESSION['id']."' ORDER BY id DESC");
//        foreach ($get_sms as $row){
//
//            echo 'Сообщение №'.$row['id'].'  <a href="/user/message/'.$row[$l."id"].'">Открыть</a><br />';
//            $l++;
//        }
//        $l=0;
    }

    public function read_sms()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);

        /**
         * Получаем номер сообщения. Приводим его типу Integer
         */
         $this->db->query("SELECT id FROM messages");


        /**
         * Достаем сообщение. Помимо номера сообщения ориентируемся и на id пользователя
         * Это исключит возможность чтения чужого сообщения, методом подбора id сообщения
         */
        $sql="select * from messages where to_user = '".$_SESSION['id']."'";//' AND id='".$_GET['mess_id']."'";
        $res = $this->db->query($sql);


        /**
         * Установим флаг о прочтении сообщения
         */
        $sql="update messages set flag = 1 where  to_user = '".$_SESSION['id']."'";// and id = '". $_GET['mess_id']."'";
        $this->db->query($sql);

        /**
         * Выводим сообщение с датой отправки
         */
        if(!empty($uri[3])) {
            $int = preg_split('//', $uri[3]);
            array_pop($int);
            array_shift($int);
            $f = $int[0];
            echo '<div>' . $res[$f]['message'] . '</div>Дата отправки: ' . $res[$f]['date'];
        }
    }

}