<?php
$conn = mysqli_connect("localhost:3308","root","","WAD_PROJECT3");
$result = mysqli_query($conn,"SELECT*FROM student");
//$data = mysqli_fetch_object($result);
//var_dump($data->name);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
</head>
<body>
    <h1>Ini adalah halaman index data</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NIM</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>

        <?php while($data = mysqli_fetch_object($result))
            {?>
            <tr>
                <td><?php echo $data->id ?></td>
                <td><?php echo $data->name ?></td>
                <td><?php echo $data->nim ?></td>
                <td><?php echo $data->address ?></td>
            </tr>
            <?php }  ?>
        </tbody>
    </table>
</body>
</html>
