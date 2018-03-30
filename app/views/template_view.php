
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
                <a href="#" class="navbar-brand"><img src="../../files/image/logo.png" width="40"  | alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active"><a href="/" class="nav-link">Главная</a> </li>
                        <li class="nav-item "><a href="/user/all" class="nav-link">Пользователи</a> </li>
                       <li class="nav-item "> <a href="/main/about" class="nav-link">О проекте</a></li>
                        <?php if(isset($_SESSION['user'])){ ?>
                            <li class="nav-item "><a href="/user/<?php echo $_SESSION['id']; ?>" class="nav-link">Профиль [<?php echo $_SESSION['user']?>]</a></li>
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
                <div  class="col-xs-12 col-sm-10 col-md-10" style="background-color: #FFFFFF">
<!--breadcrumb-->

                    <?php include 'app/views/'.$content_view; ?>
                </div>

                <div  class=" col-xs-12 col-sm-2 col-md-2 col-md-offset-2 media " style="background-color: #E9ECEF; opacity: 0.7;margin-top: 25px;  height: 1000px " >
                    <div>
                        <ul class="list-unstyled">
                            <h3  class="mx-auto" ><a href="#">New</a></h3><br>
                            <li>
                                <h3>Заголовок</h3>
                                <a href="#"><img src="../../files/image/git.png" alt="..." class="img-thumbnail"></a>
                                <p>Описание статьи</p>
                                <a href="#" class="btn btn-primary">Читать</a>
                            </li>
                            <li>
                                <h3>Заголовок</h3>
                                <a href="#"><img src="../../files/image/git.png" alt="..." class="img-thumbnail"></a>
                                <p>Описание статьи</p>
                                <a href="#" class="btn btn-primary">Читать</a>
                            </li>
                            <li>
                                <h3>Заголовок</h3>
                                <a href="#"><img src="../../files/image/git.png" alt="..." class="img-thumbnail"></a>
                                <p>Описание статьи</p>
                                <a href="#" class="btn btn-primary">Читать</a>
                            </li>
                        </ul>
                    <div class="fixed-bottom">
                    <footer  class="mx-auto" style="width: 350px">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </footer>
                    </div>
                 </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>