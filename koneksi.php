<?php
$conn = mysqli_connect("localhost:3308","root","","WAD_PROJECT3");
$result = mysqli_query($conn,"SELECT*FROM student");
var_dump(mysqli_fetch_object($result));

?>