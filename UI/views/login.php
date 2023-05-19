<?php 
require_once "UI/header.php";
require_once "include/router.php";
?>
<div class="container">
<h2>Projects Manager</h2>
    <form action="/login" name="login" method="post">
        <h3>Login</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="Email" type="email" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="Password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-info"><i class="material-icons">keyboard_tab</i></button>
    </form>
<h3>Register as new User</h3>
    <form action="/register" method="post" name="register">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="Password" type="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input name="confirm_Password" type="password" class="form-control" id="confirm" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info"><i class="material-icons">create</i></button>
        </div>
    </form>
</div>

<?php require_once "UI/footer.php";?>