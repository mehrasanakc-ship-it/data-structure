<html>
<head>
    <title>Registration Form</title>
</head>
<body bgcolor="lightblue">
<center>
<h2>Registration Form</h2>
<form method="POST" action="">
Name:
<input type="text" name="name"><br><br>
Email:
<input type="text" name="email"><br><br>
Password:
<input type="password" name="password"><br><br>
Phone:
<input type="text" name="phone"><br><br>
Date of Birth:
<input type="date" name="dob"><br><br>
Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>
<input type="submit" name="submit" value="Register">
</form>
<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'] ?? "";
if(empty($name) || empty($email) || empty($password) ||
       empty($phone) || empty($dob) || empty($gender))
    {
        echo "All fields are required";
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid Email";
    }
elseif(strlen($password) < 8 ||
           !preg_match("/[A-Z]/", $password) ||
           !preg_match("/[a-z]/", $password) ||
           !preg_match("/[0-9]/", $password) ||
           !preg_match("/[@#$%&*!]/", $password))
    {
        echo "Invalid Password";
    }
 elseif(!preg_match("/^[6-9][0-9]{9}$/", $phone))
    {
        echo "Invalid Phone Number";
    }

    elseif(strtotime($dob) === false || $dob > date("Y-m-d"))
    {
        echo "Invalid Date of Birth";
    }
else
    {
echo "<h3>Registration Successful!</h3>";
echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Phone: " . htmlspecialchars($phone) . "<br>";
        echo "Date of Birth: " . htmlspecialchars($dob) . "<br>";
        echo "Gender: " . htmlspecialchars($gender);
    }
}
?>
</center>
</body>
</html>

