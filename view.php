<?php 
   session_start();
   include("php/config.php");
   
   if(!isset($_SESSION['valid'])){
    header("Location: indexloginsignup.php");
   }

   // Retrieve user details from the session
   $username = $_SESSION['username'];
   $userEmail = $_SESSION['valid'];
   $userAge = $_SESSION['age'];
   $userProfileDetails = $_SESSION['profileDetails'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>View Profile</title>
    <style>
        
    </style>
</head>
<body>
    <div  class="nav" style="background-color: #6495ED; color:white;"  >
        <div class="logo" >
            <p><a href="index.html"><img src="image/D Workkk.png" alt="" width="200px" height="70px" id="logoimg" ></a> </p>
        </div>


        <div class="right-links" >
    <p>Hello <b><?php echo $username; ?></b>, Welcome</p>
    <a href="edit.php?Id=<?php echo $_SESSION['id']; ?>"class="change">Change Profile</a>
    <a href="profilelist.php" class="alluser">View All User Profiles</a> <!-- Add this line -->
    <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
</div>
        
    </div>

    <main>
        <!-- Display user details in the body -->
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <div class="user-details">
                        <p>Your email is <b><?php echo $userEmail; ?></b>.</p>
                        <p>You are <b><?php echo $userAge; ?> years old</b>.</p>
                        <p>Your Profile Details: <b><?php echo $userProfileDetails; ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
