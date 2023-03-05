
<?php
include './config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($name)) {
        mysqli_query($conn, "INSERT INTO contact (Name,Email,Subject,Message) VALUES('$name','$email','$subject', '$message')");
    }
}
?>