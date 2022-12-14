<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fruits App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   td{
    color: red;
   } 
  </style>
  
  
  <!-- Material Kit CSS -->
</head>
<body class="justify-content-center">

<div class=" container-fluid" style="margin:50px auto;">
  <div style="text-align: left">
    <h1 style="color:white" class='container-fluid text-center'>Available fruits</h1>
    <div class="container-fluid ">
    <form>
    <table class='table table-hover tablesorter ' id='' style='border: 1px solid white;'>      
     <thead class=' text-primary'>
       <tr>
        <th>Fruit Name</th><th>Price(USD)</th><th>Available quantities</th><th>Preferred Quantity</th>
       </tr>
    </thead>
      <?php
      $con = mysqli_connect('localhost', 'root', '');
      mysqli_select_db($con, 'fruits');
     $product_query = "SELECT * FROM fruitstable";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $name = $row['name'];
                        $quantity = $row['quantity'];
                        $price = $row['price'];


   echo "
         <form
          <tbody>
           <tr>
             <td>$name</td><td><input name='num1' value='$price' hidden>$price.00</td><td><input value='$quantity' hidden>$quantity</td><td><input type='number' name='num2' style='width: 40px;'/></td>
            <td>
             <form>
               <input type='submit' value='Total'/>
             </form>
            </td>
           </tr>
          </tbody>
         </form>     
     ";
       };
   }
   ?>
   </div>
   </table>
   </form>
  </div>
  <div class='container-fluid' style='color: white;'>Total price goes here</div>
  <?php
  if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $result = $num1 * $num2;
    echo "<div class='container-fluid' style='color: white;'>"." Total price: " . "$" . $result . "." . "00"."</div>";
  }
  ?>
</div>
</body>
</html>
