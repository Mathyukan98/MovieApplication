<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    
   

<div class="container">
Hi! <?php echo $_SESSION['username']?>
    <span style='float:right'>
    <button class='btn btn-primary' onclick='signout()'>Signout</button>
</span>
    
    <td>

    <table style="font-size:80%">
        <?php
        if(isset($_GET['movieid']))
			{
                show_movie();
            }
		else{
                all_movies();
            }
            
        ?>
       
    </table>
    </td>
    </tr>
   </table>
</div>
   

<script>
function signout(){
    location.href='index.php?page=signout';
}
function goto(){
    location.href='index.php?page=mycomments';
}
</script>
</body>
</html>