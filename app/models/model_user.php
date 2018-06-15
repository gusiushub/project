<?php

class model_user extends model
{
    public function get_users()
    {
         return $this->db->query("SELECT * FROM users ");
    }

    public function add_friend($friend_id)
    {
        return $this->db->query("INSERT INTO friends (user_id, friend_id) VALUES ('" .$_SESSION['id']. "','".$friend_id."')" );
    }

    public function sms()
    {
        /**
         * Принимаем постовые данные. Очистим сообщение от html тэгов
         * и приведем id получателя к типу integer
         */
        if(!empty($_POST['message']))
        {
            $message = htmlspecialchars($_POST['message']);
        }

        if(!empty($_POST['to']))
        {
            $to = (int)$_POST['to'];

            $sql = "INSERT INTO messages (from_user,to_user,message,flag) VALUES ('" . $_SESSION['id'] . "','" . $to . "','" . $message . "','0')";

            $this->db->query($sql);
        }
    }

    /**
     * Достаем сообщения
     */
    public function get_sms()
    {
        echo 'входящие <br>';
        $sth=$this->db->query("SELECT * FROM messages WHERE to_user='".$_SESSION['id']."' ORDER BY id DESC");
        $l = 0;
        foreach ($sth as $row){
            $l++;
            echo 'Сообщение №'.$row['id'].'  <a href="/user/message/'.$l.$row["id"].'">Открыть</a><br />';
        }
    }

    public function read_sms()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);

        /**
         * Получаем номер сообщения. Приводим его типу Integer
         */
         $this->db->query("SELECT id FROM messages");

        $res = $this->ger_user_sms();
        /**
         * Установим флаг о прочтении сообщения
         */
        $sql="update messages set flag = 1 where  to_user = '".$_SESSION['id']."'";

        $this->db->query($sql);

        /**
         * Выводим сообщение с датой отправки
         */
        if(!empty($uri[3]))
        {
            $int = preg_split('//', $uri[3]);

            array_pop($int);

            array_shift($int);

            $f = $int[0];

            echo '<div>' . $res[$f]['message'] . '</div>Дата отправки: ' . $res[$f]['date'];
        }
    }

    /**
     * Достаем сообщение. Помимо номера сообщения ориентируемся и на id пользователя
     * Это исключит возможность чтения чужого сообщения, методом подбора id сообщения
     */
    public function ger_user_sms()
    {
        $sql="select * from messages where to_user = '".$_SESSION['id']."'";

        return $this->db->query($sql);
    }

}