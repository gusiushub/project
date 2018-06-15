<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            [class*="col-"] {
                background-color: #eee;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }
        </style>
<!--        <link rel="stylesheet" href="../../main.css" type='text/css'>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
            <!--nav-bar-->
        <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand"><img src="../../files/image/logo.png" width="40" | alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active"><a href="/" class="nav-link">Главная</a> </li>
                    <li class="nav-item "><a href="/adminpenal/article" class="nav-link">Статьи</a> </li>
                   <li class="nav-item "> <a href="/main/about" class="nav-link">О проекте</a></li>
                    <li class="nav-item "><a href="#" class="nav-link">Контакты</a> </li>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <li class="nav-item "><a href="../../index.php" class="nav-link">Профиль</a></li>
                        <li class="nav-item "><a href="/user/logout" class="nav-link">Выйти</a></li>
                    <?php } else { ?>
                    <li class="nav-item "><a href="/user/signin" class="nav-link">Регистрация</a></li>
                    <li class="nav-item "><a href="/user/login" class="nav-link">Авторизация</a></li>
                    <?php } ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input style="width:170px;" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success my-2 my-sm-0">Поиск</button>
                </form>
            </div>
        </nav>
            </div>
            <div class="container-fluid">
                <div class="row" >
                    <div  class="col-xs-12 col-sm-12 col-md-12" style="background-color: #FFFFFF">
<!--                        breadcrumb-->
                        <nav style=" margin-top: 15px;" aria-label="breadcrumb">
                            <ol style="width: 100%" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Лента</a></li>
                                <li class="breadcrumb-item"><a href="#">Профиль</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                                <div style="float: right; margin: 0; padding: 0; margin-left: 77%;"><h4>Админ панель</h4></div>
                            </ol>
                        </nav>
                        <?php include 'app/views/'.$content; ?>
                    </div>
                </div>
            </div>
    </body>
</html>