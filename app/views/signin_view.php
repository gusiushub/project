
<h2 class="display-4">Регистрация</h2>

<?php if(isset($_POST['do_signup'])) { $data->signin('users'); } ?>

<form action="" method="post" style="width: 400px" class=" mx-auto">
    <div  class="form-group ">
        <input name="name" type="text" class="form-control "  aria-describedby="emailHelp" placeholder="Имя" value="<?php echo @$_POST['name'] ?>">
    </div>
    <div  class="form-group ">
        <input name="surname" type="text" class="form-control "  aria-describedby="emailHelp" placeholder="Фамилия" value="<?php echo @$_POST['surname'] ?>">
    </div>
    <div  class="form-group ">
        <input name="email" type="email" class="form-control " aria-describedby="emailHelp" placeholder="Email" value="<?php echo @$_POST['email'] ?>">
    </div>
    <div  class="form-group ">
        <input name="login" type="text" class="form-control "  placeholder="Login" value="<?php echo @$_POST['login'] ?>">
    </div>
    <div  class="form-group ">
        <input name="password" type="password" class="form-control " id="exampleImputPass"  placeholder="Password" value="<?php echo @$_POST['password'] ?>">
    </div>
    <div  class="form-group ">
        <input name="password2" type="password" class="form-control " id="exampleImputPass"  placeholder="Password" value="<?php echo @$_POST['password2'] ?>">
    </div>
    <input name="do_signup" class="btn-outline-dark"  type="submit" value="Регистрация">
</form>


