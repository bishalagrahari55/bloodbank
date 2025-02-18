<?php
require_once("topconnect.php");
if (!empty($_POST["username"])) {
    $result = mysqli_query($connection, "SELECT * FROM users WHERE UserName = '" . $_POST["username"] . "'");
    //$row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
        echo "<span class='text-success'> Already Exist.</span>";
    } else {
        echo "<span class='grey'> You Can Proceed.</span>";
    }
}
?>