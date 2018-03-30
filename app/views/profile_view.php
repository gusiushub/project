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
if(!empty($_POST['addfriend'])){
    $add = $data->add_friend($_GET['id']);
}
$friends_id=$data->friends_id();

$i=0;
foreach ($friends_id as $friend_id){
    if ($i<5){
        $q[$i] = $friend_id['friend_id'];
        $i++;
        }
    $result = (array_unique($q));
}

$w = array_unique($q);
$friends = array_unique($result);

?>
<!-- хлебные крошки -->
<nav style=" margin-top: 15px;" aria-label="breadcrumb">
    <ol style="width: 100%" class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Лента</a></li>
        <li class="breadcrumb-item"><a href="<?php echo "/user/".$_GET['id'] ; ?> "> Профиль</a></li>
<!--        <li class="breadcrumb-item active" aria-current="page"> Data</li>-->
        <div style="float: right;  margin-left: 50%;"><h4><?php echo $user[0]['name'].' '.$user[0]['surname'].'&nbsp &nbsp &nbsp'.$_SESSION['status']; ?></h4></div>
    </ol>
</nav>
<!-- меню -->
<ul class="profilMenu" style="list-style-type: none; float: left; margin-left: 0; width: 200px; ">

    <a href="#"><img style="padding: 0; margin-left: 0;" width="265px" height="270px" src="../../files/image/avatar/<?php echo $user[0]['image'];?>"></a>
    <li><?php echo "User: ". $user[0]['surname']." ". $user[0]['name']; ?></li>
    <?php if($_SESSION['id']==$_GET['id']){ ?>
    <li><a href="#">Новости</a> </li>
    <li><a href="/user/message">Сообщения</a> ( <?php echo $data->count_sms(); ?> )</li>
        <li><small><?php echo '(новых сообщений:'.$_SESSION['new_sms'].')'; ?></small></li>

    <li><a href="#">Фото</a> </li>
    <li><a href="#">Аудио</a> </li>
    <li><a href="#">Мои статьи</a> </li>
        <li><a href="#">Друзья</a>( <?php echo count($friends); ?> ) </li>
        <ul>
            <?php //foreach ($friends as $friend){ ?>
                <li>
                    <div class="media">
<?php                       //   $img_avatar = $data->friend_user_id($friend[4]);  ?>
                        <img width="64px" class="d-flex mr-3" src="../../files/image/avatar/ava.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Имя пользователя</h5>
                        </div>
                    </div>
                </li>
            <li>
                <div class="media">
                    <?php                       //   $img_avatar = $data->friend_user_id($friend[4]);  ?>
                    <img width="64px" class="d-flex mr-3" src="../../files/image/avatar/ava.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Имя пользователя</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <?php                       //   $img_avatar = $data->friend_user_id($friend[4]);  ?>
                    <img width="64px" class="d-flex mr-3" src="../../files/image/avatar/ava.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0">Имя пользователя</h5>
                    </div>
                </div>
            </li>
            <?php //} ?>
        </ul>
    <li>
        <h3>Редактировать профиль</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input   class="custom-file"  type="file" name="avatar" />
    </li>
    <li>
        <input class="btn btn-primary"  name="sub" type="submit" value="загрузить" >
        </form>
    </li>

    <?php }else{ ?>
    <form action="" method="post" enctype="multipart/form-data">
    <input name="addfriend" type="submit" class="btn btn-primary mb-2" value="Добавить в друзья">
    <button type="submit" class="btn btn-primary mb-2">Написать сообщение</button>
    </form>

    <?php }?>
</ul>
<div class=" col-xs-12 col-sm-9 col-md-9" style=" background-color: #E9ECEF; float: right">
    <h4 style="float: right" class=" col-xs-12 col-sm-3 col-md-8 col-md-offset-1 mx-auto  " > <?php echo  "Пользователь: ". $user[0]['surname']." ". $user[0]['name']." ".$_SESSION['status']."<br>";  echo 'login: '.$user[0]['login'];?></h4>

</div>

<div class="col-xs-9 col-sm-9 col-md-9" style="margin-top: 1px; float: right; width: 1080px">
<!--слайдер-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../files/upload/file-1522041399.jpg" alt="Первый слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../files/upload/file-1522360809.png" alt="Второй слайд">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--слайдер-->

    <div>
        <?php if($_SESSION['id']==$_GET['id']){ ?>
        <form action="" method="post" enctype="multipart/form-data" >
            <p >
                <input class="form-control" type="text" name="title_text" style="width: 30%; float: right; margin-right: 40px">
                <h4 style="float: right">Тема: </h4>
                <h3 class="display-4">Описание</h3>
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

