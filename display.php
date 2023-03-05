<?php include './header.php'?>
<a href="./index.php">Home</a>
<h2 style="text-align: center;">Message</h2>
<div class="table-box">


    <table >
<?php
include './config.php';

$result = $conn->query("SELECT * FROM contact");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (strlen($row['Message']) <= 50) {
            $mme = $row['Message'];
        } else {
            $y = substr($row['Message'], 0, 50) . '...';
            $mme = $y;
        }
        echo "
        <tr>

                    <td width='200px;'>$row[Name]</td>
                    <td>$row[Subject] - <span style='color:rgb(100, 100, 100);'>$mme</span> </td>
                    <td width='124px' style='float: right;'>
                    <a class= 'btn bg-primary' href='read.php?readid=$row[ID]'>Read</a>
                    <a class= 'btn btn-danger' href='delete.php?deleteid=$row[ID]'> <i class='fa fa-trash'></i></a>

                    </td>


        </tr>
        ";
    }
}
?>
<table>
</div>
</body>
</html>