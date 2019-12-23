<?php require_once 'db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="index.php" method="post">
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
      <td><input type="text" name="name" value="<?php echo ($name)?>"/></td>
      
    </tr>
    <tr>
      <th scope="row">email</th>
      <td><input type="text" name="email" value="<?php echo ($email)?>"/></td>
    </tr>
    
    <tr>
      <th scope="row">comment</th>
      <td><input type="text" name="comment" value="<?php echo ($comment)?>"/></td>
      
    </tr>
    
    <tr>
      <th scope="row">file</th>
      <td><input type="file" name="file" value="<?php echo ($filename)?>"/></td>
      <td></td>
      
    </tr>
    </form>
  </tbody>
    </table>
    <a href="index.php" class="btn btn-success">Back</a>
    <input type="submit" value="OK" class="btn btn-success">
</body>
</html>