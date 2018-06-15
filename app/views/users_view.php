<?php

$login = $data->get_users();
if (!empty($_POST['add'])){
    $data->add_friend($_POST['friend_id']);
    var_dump($_POST['friend_id']);

    unset($_POST['friend_id']);
    var_dump($_POST['friend_id']);
}

?>

<nav class="navbar navbar-light bg-light">
    <h2>Найти пользователя</h2>
    <form class="form-inline">
        <input style="width: 600px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<h2>Список пользователей</h2>

<ul>

    <?php foreach ($login as $user) {?>
    <form action="<?php $_POST['friend_id'] = $user['id']; ?>" method="post">

    <li>

        <h5><?php echo 'Login: '. $user['login'].'Name: '.$user['name'] ;?></h5>
        <input src="/user/" type="submit" value="написать" class="btn-primary">
        <a href="/user/<?php echo $user['id'] ?>"><input src="/user/<?php echo $user['id']; ?>" type="button" value="В профиль" class="btn-primary"></a>
        <input type="submit" value="Добавить в друзья" name="add" >
        <a class="btn-primary" href="/user/<?php echo $user['id']  ?>">в профиль</a>

    </li>
    </form>
<?php } ?>

</ul>