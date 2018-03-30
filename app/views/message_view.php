<?php
$users = $data->get_users();
$sms = $data->sms();
$get = $data->get_sms();
$read = $data->read_sms();
if(!empty($_POST['to'])){
    var_dump($_POST['to']);
}
//$data->new_sms();
?>

<form action="" method="post" enctype="multipart/form-data">
    Адресат: <br />
    <select name="to">
        <?php $k=0 ?>
        <?php foreach ($users as $user){ ?>
        <?php $k++;  ?>
        <option value="<?php echo $user['id']; ?>"><?php echo $user['login']; ?>
            <?php } ?>
    </select>
Текст сообщения: <br /><textarea name="message"></textarea><br />
    <input type="submit"  value="Отправить" />
</form>