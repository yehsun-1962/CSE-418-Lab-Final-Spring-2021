<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>User list</title>
</head>
<body>
<br>
<br>
<h1 class="text-center">All User</h1>
<br>
<br>
<table class="table">
<?php 

$connection = mysqli_connect('localhost','root','','exam') or die("not connected". mysqli_error());

    $query = "SELECT * FROM ques_1_user ORDER BY id ASC";
        $result = mysqli_query($connection,$query) or die("Failed");
        $count = mysqli_num_rows($result);
        if($count > 0){
?>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Id</th>
      <th scope="col">Age</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php 

while($row = mysqli_fetch_assoc($result)){
    


?>
    <tr>
      <th scope="row"><?php echo $row['Names'] ?></th>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['passwordd'] ?></td>
    </tr> 
    <?php } ?>
  </tbody>
  <?php } ?>
</table>
</body>
</html>