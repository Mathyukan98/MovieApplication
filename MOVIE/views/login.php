<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>LOGIN</title>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
    <form action="" method="post" >
	<h1 class="align-items-center">Welcome to ABC Movies</h1>
   <h3 class = "align-items-center">Please login to continue</h3>
    <form action="" method="post">
    <table>
<tr>
    <td>
        Username
    </td>
    <td>
        <input type="text" name="login_username">
    </td>
    <?php 
    if(isset($_POST['login_btn'])){
        if($_POST['login_username']==''){
            echo "<td><span style=\"color:red\">Please enter an username</span></td>";
        }
    }
    ?>
</tr>
<tr>
    <td>
        Password
    </td>
    <td>
        <input type="password" name="login_password">
    </td>
    <?php
    if(isset($_POST['login_btn'])){ 
        if($_POST['login_password']==''){
            echo "<td><span style=\"color:red\">Please enter the passowrd</span></td>";
        }
    }
    ?>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" value="true" name="remember-me">Remember Me</td>
</tr>
<tr>
    <td>
        <input type="submit" value="Login" name="login_btn" class="btn btn-primary">
    </td>
    <td>
        <input type="button" onclick="signup()" value="Signup" name="signup_btn" class="btn btn-secondary">
    </td>
</tr>
    </table>

    </form>
	</div></div></div>
    <?php
    if(isset($_POST['login_btn'])){
        if($_POST['login_username']!='' && $_POST['login_password']!=''){
            login();
        }
    }

    ?>
<script>
function signup(){
    location.href="index.php?page=signup"
}
</script>
</body>
</html>