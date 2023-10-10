<?php
session_start();
include("php/config.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $profileDetails = mysqli_real_escape_string($con, $_POST['profileDetails']); // New field
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Verify the unique email
    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

    if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
                  <p>This email is already in use. Please try another one.</p>
              </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
    } else {
        // Don't hash the password here
        $insert_query = "INSERT INTO users(Username, Email, Age, ProfileDetails, Password) VALUES ('$username', '$email', '$age', '$profileDetails', '$password')"; // Include the new field
        $result = mysqli_query($con, $insert_query);

        // ... your existing code ...

if ($result) {
    // Set the user's profile details in the session
    $_SESSION['profileDetails'] = $profileDetails;


    
    echo "<div class='message'>
              <p>Registration successful!</p>
          </div> <br>";
    echo "<a href='indexloginsignup.php'><button class='btn'>Login Now</button>";
} else {
    echo "Error: " . mysqli_error($con);
}

    }
} else {
?>
<!-- Rest of your HTML form remains the same -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <!-- New field for Profile Details -->
                <div class="field input">
                    <label for="profileDetails">Profile Details</label>
                    <textarea name="profileDetails" id="profileDetails" rows="4" cols="50" required></textarea>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>

                <div class="links">
                    Already a member? <a href="indexloginsignup.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php } ?>

