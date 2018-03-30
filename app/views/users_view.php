<?php

$login = $data->get_users();

?>

<h2>Список пользователей</h2>

<ul>
    <?php $k=1; ?>
<?php foreach ($login as $user) {?>
    <li>
<?php $k++; ?>
        <form action="" method="post">
        <h3><?php echo $user['login'] ?></h3>
        <input src="/user/" type="submit" value="написать" class="btn-primary">
        <a hrefc="/user/<?php echo $user['id'] ?>"><input src="/user/<?php echo $user['id'] ?>" type="button" value="В профиль" class="btn-primary"></a>
        <input href="/user" type="submit" value="Добавить в друзья" name="add" >
        <a class="btn-primary" href="/user/<?php echo $user['id']  ?>">в профиль</a>
        </form>
    </li>
<?php } ?>
</ul>