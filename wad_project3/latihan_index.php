<?php
$conn = mysqli_connect("localhost","root","","wad_project3");

$result = mysqli_query($conn,"SELECT * FROM students");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi PHP</title>
</head>
<body>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>nim</th>
    <th>address</th>
  </tr>

  <?php while(
    $data = mysqli_fetch_object($result)) {
    ?>
  <tr>
    <td><?php echo $data->id?></td>
    <td><?php echo $data->name?></td>
    <td><?php echo $data->nim?></td>
    <td><?php echo $data->Address?></td>
  </tr>
  <?php
  }
  ?>


  
</table>   
</body>
<style>
    table, th, td {
  border: 1px solid black;
}
</style>
</html>