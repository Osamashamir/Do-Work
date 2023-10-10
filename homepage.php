<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: indexloginsignup.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Home</title>
</head>
<body>
    <div class="nav" >
        <div class="logo" >
            <p><a href="homepage.php">Logo</a> </p>
        </div>

        <div class="right-links">
            <?php 
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM users WHERE Id='$id'";
            $query = mysqli_query($con, $sql);

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<p>Hello <b>".$res_Uname."</b>, Welcome</p>";
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <main>
       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div>
       </div>
    </main>
</body>
</html>
