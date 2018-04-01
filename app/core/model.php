<?php

require_once '/../config/file_config.php';

class model
{
    public $db;
    public $file;

    public function __construct()
    {
        $this->db = new data_base;
    }

    public function insert_article()
    {
        $this->db->execute("INSERT INTO articles (title, content,login_id, login, img) VALUES ('".$_POST['title_text']."','".$_POST['content']."','".$_SESSION['id']."','".$_SESSION['user']."','".$this->file."')");
    }

    /**
     * Загрузка файла
     * @return string
     */
    public function insert_img($do=null,$db_name=null,$file=null, $directoria=null)
    {
        if (!empty($_FILES["".$file.""]["name"]))
        {
            ini_set('memory_limit', '32M');

            $maxsize = "100000000";

            $extentions = file_config::format();

            $size = filesize($_FILES["".$file.""]["tmp_name"]);

            $type = strtolower(substr($_FILES[$file]["name"], 1 + strrpos($_FILES[$file]["name"], ".")));

            $new_name= file_config::name($file);

            if ($size > $maxsize)
            {
                echo "Файл превышает 100 мб. <br><a href='' onClick=window.close();>Закрыть окно</a>";
            }
            elseif (!in_array($type, $extentions))
            {
                echo ' <b>Недопустимое расширение</b>.';
            }
            else
                {
                    if (copy($_FILES["".$file.""]["tmp_name"],  $directoria ."/" . $new_name))
                    {
                       $this->file = $new_name;

                    echo "Файл загружен!<br>Скопируйте адрес файла<br> <a href=\"uploads/$new_name\"><b>/mvc/files/upload/$new_name</b></a><br> и нажмите<br><a href='' onClick=history.back();>Вернуться назад</a>";

                    $time = date('Y-m-d',time());

                    $this->operation_check($do,$db_name,$new_name);

                    model::redirect('/user');

                } else echo 'Файл НЕ загружен.';
            }
        }
    }

    /**
     * узнаем, какая операция
     * выполняется с бд
     * */
    public function operation_check($do=null,$db_name=null,$new_name)
    {
        if($do=='insert')
        {
            $this->insert_photo($db_name,$_POST['title_text'],$_POST['content'],$_SESSION['user'],$new_name);
        }

        if ($do=='update')
        {
            $this->update_photo($new_name);
        }
    }

    //info о пользователе
    public function get_user_info()
    {
        return $this->db->query("SELECT * FROM users WHERE id=".$_GET['id']);
    }

    //info о статье
    public function get_user_articles()
    {
        $sql = "SELECT * FROM articles WHERE login_id=".$_GET['id'];
        $sth = $this->db->query($sql);
        return $sth;
    }

    public function update_photo($image)
    {
        $this->db->execute("UPDATE users SET image='".$image."' WHERE id='".$_SESSION['id']."'");
    }

    public function insert_photo($table,$title,$content,$user=null,$img=null)
    {
        $this->db->query("INSERT INTO ".$table." ( title, content, users, img) VALUES (title, content, users , img)");
    }

    // Регистрация
    public function signin()
    {
        if(isset($_POST['do_signup']))
        {
            $errors = $this->check();

            if(empty($errors))
            {
                $this->db->execute("INSERT INTO users (name, surname, login, email, password) VALUES ('".$_POST['surname']."','".$_POST['name']."','".$_POST['login']."','".$_POST['email']."','".md5($_POST['password'])."')");

                echo "<div style='color: green;'>Вы успешно зарегистрированы</div>";
            }
            else
            {
                echo "<div style='color: red;'>".array_shift($errors)."</div>";
            }
        }
    }

    // Авторизация
    public function login()
    {
        if (isset($_POST['do_login']))
        {
            $errors = array();

            $sql = "SELECT * FROM users WHERE login='".$_POST['login']."'";
            $user = $this->db->query($sql);
            if ($user)
            {
                if (md5($_POST['password']) == $user[0]['password'])
                {
                    $_SESSION['id'] = $user[0]['id'];

                    $_SESSION['user'] = $_POST['login'];

                    $_SESSION['status'] = 'online';

                    $_SESSION['new_sms']= $this->new_sms();
                }
                else
                {
                    $errors[] = 'Неверно введен пароль';
                }
            }
            else
            {
                $errors[]='Пользователь с таким логином не найден.';
            }
            if(!empty($errors))
            {
                echo '<div style="color: red;">'.array_shift($errors).'</div>';
            }
        }
    }

    // Проверка при регистрации
    public function check()
    {
        $errors = array();

        if(trim($_POST['email']==''))
        {
            $errors[]='Введите email';
        }

        if(trim($_POST['login']==''))
        {
            $errors[]='Введите login';
        }

        if(trim($_POST['password']=='') )
        {
            $errors[]='Введите password';
        }

        if($_POST['password2'] != $_POST['password'])
        {
            $errors[]='Повтормый пароль введен не верно';
        }

        if(count($this->db->query("SELECT login FROM users WHERE login='".$_POST['login']."'"))>0)
        {
            $errors[]='Пользователь уже существует';
        }
        return $errors;
    }

    // Выход с аккаунта
    public function logout()
    {
        unset($_SESSION['user']);

        unset($_SESSION['status']);

        header('Location: /');
    }

    public function check_article()
    {
        $errors = array();
        if($_POST["title_text"]==""){
            echo  $errors[]="Введите заголовок";
        }
        if($_POST["content"]==""){
            echo $errors[]="Введите контент";
        }
        return $errors;
    }

    public function get_users_login()
    {
       $this->db->query("SELECT * FROM users ");
    }

    public function friends_id()
    {
        return $this->db->query("SELECT friend_id FROM friends WHERE user_id='".$_SESSION['id']."'");
    }
    public function get_friends()
    {
        $friends = $this->friends_id();
        foreach ($friends as $friend)
        {
           $user_login[] =  $this->db->query("SELECT login FROM users WHERE id='".$friend['friend_id']."'");
            foreach ($user_login as $login){

                $arr[] = $login[0]['login'];

            }
        }
     return $arr;
    }

    public static function redirect($url)
    {
        echo " <script type=\"text/javascript\"> window.location.href='".$url."/".$_GET['id']."'; </script> ";
    }

    public function count_sms()
    {
        return count($this->db->query("SELECT message FROM messages WHERE to_user=".$_SESSION['id']));
    }

    public function new_sms()
    {
        return count($this->db->query("SELECT flag FROM messages WHERE to_user='".$_SESSION['id']."' AND flag=0"));
    }

    public function add_friend($friend_id)
    {
        return $this->db->query("INSERT INTO friends (user_id, friend_id) VALUES ('" .$_SESSION['id']. "','".$friend_id."')" );
    }

    public function friend_user_id($friend_id)
    {
        return $this->db->query("SELECT img FROM users WHERE id=".$friend_id);
    }

    public function select_avatar()
    {
        $this->db->query("SELECT img FROM users ");
    }
}
