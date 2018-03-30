<?php if( isset($_POST['do_login'])){$data->login();} ?>
<h2 class="display-4">Авторизация</h2>
<form method="post" action="" style="width: 400px" class=" mx-auto">
    <div  class="form-group ">
        <input name="login" type="text" class="form-control "  placeholder="Login" value="<?php echo @$_POST['login'] ?>">
    </div>
    <div  class="form-group ">
        <input name="password"  type="password" class="form-control " id="exampleImputPass"  placeholder="Password" value="<?php echo @$_POST['password'] ?>">
    </div>
    <button name="do_login" class="btn-bd-primary" type="submit">Авторизоваться</button>
</form>
