
<?php
function signup(){
  $sql = "insert into user values('".$_POST['signup_username']."','".$_POST['signup_fname']."','".$_POST['signup_lname']."','".$_POST['age']."','".hashed($_POST['new_password'])."')";
  if(set_data($sql)){
      echo "<script>window.location='index.php'</script>";
  }
}
function login(){
    $sql= "select password from user where username='".$_POST['login_username']."'";
    $result=get_data($sql);
    $user = mysqli_fetch_assoc($result);
    if($user['password']==hashed($_POST['login_password'])){
        $_SESSION['username']=$_POST['login_username'];
       
        echo "<script>window.location='index.php'</script>";
    }else{
        echo "<div class='alert alert-danger'>Invalid Credentials.</div>";
    }
}
function signout(){
    unset($_SESSION['username']);
    echo "<script>window.location='index.php'</script>";
}
function hashed($password){
    $hashedpass=sha1(md5($password));
    return $hashedpass;
}
function all_movies(){
    $sql  = "select Movie_id,name,coverimage from moviedetails";
    $movies=get_data($sql);
    $count=0;
    echo "<tr><td colspan='3'><h1>All Movies</h1><hr></td></tr><tr>";
    while($movie=mysqli_fetch_assoc($movies)){
        if($count%5==0){
            echo "</tr><tr>";
        }
        echo "<td><a href='index.php?movieid=".$movie['Movie_id']."'><img src='coverimage/".$movie['coverimage']."'></a><br><b>".$movie['name']."</b><td>";
        $count++;
    }
}

function show_movie(){
    $sql  = "select  * from moviedetails where Movie_id='".$_GET['movieid']."'";
    
    $movies=get_data($sql);
    $movie=mysqli_fetch_assoc($movies);
    echo "<tr><td valign='top' colspan='3'><h1>".$movie['name']."</h1><hr></td></tr><tr>
    <td valign='top' rowspan='8'><img src='coverimage/".$movie['coverimage']."'></td>";
    foreach($movie as $key=>$value){
        if($key=='coverimage'||$key=='Movie_id'){

        }else{
            echo "<td><Strong>".$key."</Strong><br>".$value."</td></tr><tr>";
        }
    }
    echo "<td><a href='index.php'>Go back to Home</a></td><td><a href='index.php?page=addcomment&movie=".$movie['Movie_id']."' class='btn btn-primary'>Add Comment</a></td></tr>";
}

function addcomment(){
echo"<h2>Comments</h2>";
}
?>
