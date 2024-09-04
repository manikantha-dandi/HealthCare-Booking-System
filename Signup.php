<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>HealthCare Booking System</title>
</head>
<body style="background-image: url(Pictures/Pic2.jpg);">
    <div class="header">
        <ul>
            <li style="float: left; border-right: none;">
                <a href="Home.php" class="logo">
                    HealthCare Booking System
                </a>
            </li>
            <li> <a href="Home.php"><strong> HOME </strong></a></li>
        </ul>
    </div>

    <form action="InsertSignup.php" method="POST">
        <div class="sucontainer">
            <!-- Your form inputs go here -->
            <label style="color: black"><b>Enter Name:</b> </label>
        <input type="text" placeholder="Enter your full name" name="fname" required><br>

        <label style="color: black"><b>Enter Date of birth:</b></label><br>
        <input type="date" name="DOB" required><br>
        <br>

        <label style="color: black"><b>Gender:</b></label><br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
        <br>

        <label style="color: black"><b>Contact number:</b></label>
        <input type="number" placeholder="Enter your number" name="contact" required><br>

        <label style="color: black"><b>Enter Username:</b></label>
        <input type="text" placeholder="Enter your username" name="username" required><br>

        <label style="color: black"><b>Enter email:</b></label>
        <input type="email" placeholder="Enter email-id" name="email" required><br>

        <label style="color: black"><b>Enter Password:</b></label>
        <input type="password" placeholder="Enter the password" name="pwd" id="p1" required><br>

        <label style="color: black"><b>Confirm Password:</b></label>
        <input type="password" placeholder="Enter password again" name="pwdr" id="p2" required><br>
        <p style="color: black">By Signup you accept to our terms and conditions</p>

            <div class="container" style="background-color:white">
                <button type="button" style="float: right;" onclick="window.location.href='Home.php'" class="cancelbtn">Cancel</button>
                <button type="submit" name="signup" style="float:left">Sign Up</button>
            </div>
        </div>
    </form>
</body>
</html>
