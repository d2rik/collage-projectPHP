<?php include './header.php' ?>
<?php
include './config.php';

if (isset($_GET['readid'])) {
    $id = $_GET['readid'];
    $result3 = mysqli_query($conn, "SELECT * FROM contact WHERE ID = $id");
    if ($result3->num_rows > 0) {
        $row = $result3->fetch_assoc();
    }

    if (!$result3) {
        die("Delete failed");
    }
}
?>
    <a href="./index.php">Home</a>
    <div style="width:700px; margin:auto; padding: 20px; border: 1px solid; border-radius: 15px;" >
        <h5> <?php echo "$row[Name]";?> Send You Message</h5>
        <span> <b>Email:</b> <?php echo "$row[Email]";?></span> <br>
        <span> <b>Subject:</b> <?php echo "$row[Subject]";?></span><br>
        <p> <b>Message: </b> <?php echo "$row[Message]";?> </p>
    </div>
</body>
</html>
         