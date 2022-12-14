<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/Material+Icons.css" />
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="./assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="./assets/css/black-dashboard.css" rel="stylesheet" />
</head>
<body>

<div class="container">
  <h1 style="color: white; text-align:center;">Add fruit</h1>
  <form action="display.php" method="POST">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="" placeholder="Enter Name" name="name" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Quantity:</label>
      <input type="text" class="form-control" id="" placeholder="Enter quantity" name="quantity" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control" id="" placeholder="Enter price" name="price" required="">
    </div>
    <input type="submit" class="btn btn-default" />
  </form>
</div>

</body>
</html>