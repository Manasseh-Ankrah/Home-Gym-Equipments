<?php
require_once('setup.php');
?>

<?php
session_start();
$message = "";
$captcha = true;
if (count($_POST) > 0 && isset($_POST["captcha_code"]) && $_POST["captcha_code"] != $_SESSION["captcha_code"]) {
    $captcha = false;
    $message = "Enter Correct Captcha Code";
}
// $mysqli = new mysqli('localhost', 'root', '', 'blog_examples');
$ip = $_SERVER['REMOTE_ADDR'];
$result = $conn->query("SELECT count(ip_address) AS failed_login_attempt FROM failed_login WHERE ip_address = '$ip'  AND date BETWEEN DATE_SUB( NOW() , INTERVAL 1 DAY ) AND NOW()");
$row  = $result->fetch_assoc();
$failed_login_attempt = $row['failed_login_attempt'];
$result->free();


if (count($_POST) > 0 && $captcha == true) {
    $result = $conn->query("SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and user_password = '" . $_POST["password"] . "'");
    $row  = $result->fetch_assoc();
    $result->free();
    if (is_array($row)) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["user_name"];
        $conn->query("DELETE FROM failed_login WHERE ip_address = '$ip'");
    } else {
        $message = "Invalid Username or Password!";
        if ($failed_login_attempt < 3) {
            $conn->query("INSERT INTO failed_login (ip_address,date) VALUES ('$ip', NOW())");
        } else {
            $message = "You have tried more than 3 invalid attempts. Enter captcha code.";
        }
    }
}
if (isset($_SESSION["user_id"])) {
    header("Location:wanted.php");
}



// Registration


if (isset($_POST['create'])) {
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $username   = $_POST['user_name'];
    $email  = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $display_name = $_POST['user_name'];

    $sql = "Insert into users (firstname, lastname, user_name, email, phonenumber, user_password,display_name) 
    VALUES('$firstname','$lastname','$username','$email',$phonenumber,'$password','$display_name')";

    $result = mysqli_query($conn, $sql);
    // $stmtinsert = $db->prepare($sql);
    print($result);
    // $result = $stmtinsert->execute([$firstname, $lastname, $username, $email, $phonenumber, $password, $display_name]);
    if ($result) {
        echo 'Successfully Saved';
        header('location:wanted.php');
    } else {
        echo 'Error While saving data';
    }
}



// RSS FEED






// Count

$fetch_user = "SELECT id, firstname, lastname FROM users";
$result = $conn->query($fetch_user);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
