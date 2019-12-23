<?php require_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">FIeld</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">id</th>
      <td><?php echo "$id"?></td>
      
    </tr>
    <tr>
      <th scope="row">name</th>
      <td><?php echo "$name"?></td>
      
    </tr>
    <tr>
      <th scope="row">email</th>
      <td><?php echo "$email"?></td>
    </tr>
    
    <tr>
      <th scope="row">comment</th>
      <td><?php echo "$comment"?></td>
      
    </tr>
    
    <tr>
      <th scope="row">file</th>
        <td><?php echo "$file"?></td>
      <td></td>
      
    </tr>
  </tbody>
</table>
<a href="index.php" class="btn btn-success">Back</a>
</body>
</html>

