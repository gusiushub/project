<?php
$users = $data->get_users();
$sms = $data->sms();
//$get = $data->get_sms();
//$read = $data->read_sms();
$read = $data->ger_user_sms();
if(!empty($_POST['to'])){
    var_dump($_POST['to']);
}
//$data->new_sms();
?>
<div class="container-fluid">

    <div class="align-middle" style="float: right;"><?php echo 'собеседник:'.$read[0]['from_user']?></div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row " >
            <div class="col-3" >
                Адресат: <br />
                <select class="custom-select" name="to">
                    <?php $k=0 ?>
                    <?php foreach ($users as $user){ ?>
                    <?php $k++;  ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo $user['login']; ?>
                        <?php } ?>
                </select>

                <?php $get = $data->get_sms(); ?>
            </div>


            <div class="fixed-bottom" style=" margin: 10px;  ">
                Текст сообщения: <br /><textarea  rows="5" cols="100" name="message"></textarea><br />
                <input class="custom-file-control" name="sms_img"  type="file"  />
                <input type="submit"  value="Отправить" />
            </div>
        </div>

    </form>
</div>
