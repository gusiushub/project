<?php

if(!empty($_GET['id'])) {
    $user = $data->get_user_info();
}
$articles = $data->get_user_articles();

if(!empty($_POST["do_article"]))
{
    if(!empty($_FILES["img"]["name"]))
    {
        $data->insert_img('insert','articles','img','files/upload');

        $data->insert_article();
    }
    else
    {
        $data->insert_article();
    }
}
if(!empty($_POST["sub"])){
    if(!empty($_FILES["avatar"]["name"])) {
        $data->insert_img('update','users','avatar', 'files/image/avatar');
    }
}


?>
<!-- меню -->
<ul class="profilMenu" style="list-style-type: none; float: left; margin-left: 0; width: 200px; ">

    <a href="#"><img style="padding: 0; margin-left: 0;" width="180px" height="200px" src="../../files/image/avatar/<?php echo $user[0]['image'];?>"></a>
    <li><?php echo $user[0]['surname'].' '. $user[0]['name']?></li>
    <?php if($_SESSION['id']==$_GET['id']){ ?>
    <li><a href="#">Новости</a> </li>
    <li><a href="/user/message">Сообщения</a> </li>
        <li><?php echo '(не прочитанно сообщений:'.$_SESSION['new_sms'].')'; ?></li>
    <li><a href="#">Друзья</a> </li>
    <li><a href="#">Фото</a> </li>
    <li><a href="#">Аудио</a> </li>
    <li><a href="#">Мои статьи</a> </li>
    <li>
        <form action="" method="post" enctype="multipart/form-data">
            <input class="btn-outline-success"  name="sub" type="submit" value="загрузить" >
        </li>
    <li>
        <input    type="file" name="avatar" />
        </form>
    </li>
    <?php }else{ ?>
    <button type="submit" class="btn btn-primary mb-2">Добавить в друзья</button>
    <button type="submit" class="btn btn-primary mb-2">Написать сообщение</button>
    <?php }?>
</ul>
<div class=" col-xs-12 col-sm-9 col-md-9" style=" background-color: #E9ECEF; float: right">
    <h3 style="float: right" class=" col-xs-12 col-sm-3 col-md-3 col-md-offset-1 mx-auto  " > <?php echo 'login: '.$user[0]['login'];?></h3>

</div>

<div class="col-xs-9 col-sm-9 col-md-9" style="margin-top: 1px; float: right; width: 1080px">
    <div>
        <?php if($_SESSION['id']==$_GET['id']){ ?>
        <form action="" method="post" enctype="multipart/form-data" >
            <p >
                <input class="form-control" type="text" name="title_text" style="width: 30%; float: right; margin-right: 40px">
                <h4 style="float: right">Тема: </h4>
                <h3>Описание</h3>
                <textarea class="form-control" name="content"  rows="5" cols="120"></textarea>
                <input class="form-control-file" name="img"  type="file"  />
                <input class="btn btn-primary mb-2" name="do_article" type="submit" value="Отправить">
            </p><br>
        </form>
        <?php }?>
    </div>
    <?php foreach ($articles as $article){ ?>
    <div class="card mb-3">
        <img height="350px" width="400px" class="card-img-top" src="../../files/upload/<?php echo $article['img']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo  $article['title']; ?></h5>
            <p class="card-text"><?php echo $article['content']; ?> </p>
            <p class="card-text">
                <small class="text-muted">Username:<?php echo $article['login']; ?><br></small>
                <small class="text-muted">Last updated <?php echo $article['date']; ?></small>
            </p>
        </div>
    </div>
    <?php  } ?>
</div>

