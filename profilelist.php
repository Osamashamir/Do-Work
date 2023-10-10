<?php 
   session_start();
   include("php/config.php");
   
   if(!isset($_SESSION['valid'])){
    header("Location: indexloginsignup.php");
   }

   // Retrieve user details from the session
   $username = $_SESSION['username'];

   // Fetch all user profiles from the database
   $sql = "SELECT * FROM users";
   $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>All User Profiles</title>
</head>
<body>
    <div class="nav" style="background-color: #6495ED; color:white;" >
        <div class="logo">
            <p><a href="index.html"><img src="image/D Workkk.png" alt="" width="200px" height="70px" id="logoimg" ></a></p>
        </div>

        <div class="right-links">
            <p>Hello <b><?php echo $username; ?></b>, Welcome</p>
            <a href="edit.php?Id=<?php echo $_SESSION['id']; ?>" class="change">Change Profile</a>
            <a href="index.html"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <main>
        <div class="main-box top">
          <div class="top">
            <div class="box">
                <h1>All User Profiles</h1>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Profile Details</th> <!-- Add this column -->
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Username'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Age'] . "</td>";
                        echo "<td>" . $row['ProfileDetails'] . "</td>"; // Display ProfileDetails
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
          </div>
        </div>
    </main>
</body>
</html>
