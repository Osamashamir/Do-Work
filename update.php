
<?php
session_start();
include("php/config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: indexloginsignup.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_SESSION['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $profileDetails = $_POST['profile_details']; // Added profile details field

    // Update user's profile information in the database
    $update_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Age='$age', ProfileDetails='$profileDetails' WHERE Id=$id");

    if ($update_query) {
        // Update the session variables with the new data
        $_SESSION['username'] = $username;
        $_SESSION['valid'] = $email;
        $_SESSION['age'] = $age;
        $_SESSION['profileDetails'] = $profileDetails; // Update profile details

        header("Location: view.php"); // Redirect back to view.php after updating
        exit;
    } else {
        echo "Error updating profile: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Update Profile</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="homepage.php"> Logo</a></p>
        </div>

        <div class="right-links">
            <a href="view.php">View Profile</a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Update Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $_SESSION['username']; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $_SESSION['valid']; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $_SESSION['age']; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="profile_details">Profile Details</label>
                    <textarea name="profile_details" id="profile_details" rows="4" required><?php echo $_SESSION['profileDetails']; ?></textarea>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
