<?php
require_once('php/db.php');
require_once('php/function.php');

$result=display_data();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <title>MediPoint</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <h1 style="margin-right: 10px; margin-top: 5px"><b>MediPoint</b></h1>
      </div>
      <div class="nav">
        <nav>
          <ul>
            <li>
              <a href="#"
                ><b><i class="fa-solid fa-gauge"></i> Dashboard</b></a
              >
            </li>
            <li>
              <a href="#"
                ><b><i class="fa-solid fa-dollar-sign"></i> Sell</b></a
              >
            </li>
            <li>
              <a href="#productPage"
                ><b><i class="fa-solid fa-cube"></i> Product</b></a
              >
            </li>
            <li>
              <a href="#"
                ><b><i class="fa-brands fa-stack-overflow"></i> Stock</b></a
              >
            </li>
            <li>
              <a href="#"
                ><b><i class="fa-solid fa-user"></i> Coustomer</b></a
              >
            </li>
            <li>
              <a href="#"
                ><b><i class="fa-solid fa-rotate-left"></i> Return</b></a
              >
            </li>
            <li>
              <a href="#"
                ><b><i class="fa-solid fa-users"></i> Supplyer</b></a
              >
            </li>
            <li>
              <a href="#"
                ><b><i class="fa-solid fa-flag"></i> Report</b></a
              >
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="container" style="margin: 10px 0px">
        <div class="button_group">
          <button type="submit" onclick="openPopup()"><b><i class="fa-solid fa-plus"></i> Add Product</b></button>
          <button type="reset"><b><i class="fa-solid fa-arrows-rotate"></i> Refresh</b></button>
        </div>
      </div>
      <div class="container">
        <table class="table">
          <thead>
              <tr>
                  <td><b>No</b></td>
                  <td><b>Name</b></td>
                  <td><b>Gen</b></td>
                  <td><b>Location</b></td>
                  <td><b>Cost</b></td>
                  <td><b>Unit Price</b></td>
                  <td><b>Stock</b></td>
                  <td><b>Action</b></td>
              </tr>
          </thead>
          <tbody>
              <tr id="table_item">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['product_name'];?></td>
                  <td><?php echo $row['product_gen'];?></td>
                  <td><?php echo $row['product_loc'];?></td>
                  <td><?php echo $row['cost'];?></td>
                  <td><?php echo $row['unit_price'];?></td>
                  <td><?php echo $row['stock'];?></td>
                  <td><a href="#" onclick=openPopup()><i class="fa-solid fa-pen-to-square"></i></a><a href="#" onclick=delete_item()><i class="fa-solid fa-trash"></i></a></td>
              </tr>
              <?php
                }
              ?>
          </tbody>
      </table>
      </div>
      <div class="container">
        <div class="popup" id="popup">
          <h1><b>Edit Product</b></h1>
          <form action="add_product.php" method="post">
              <input type="text" placeholder="Product Name..." name="name">
              <input type="text" placeholder="Product Gen..." name="gen">
              <input type="text" placeholder="Product Location..." name="location">
              <input type="number" placeholder="Cost" name="Cost">
              <input type="number" placeholder="Unit Price" name="unit_price">
              <input type="number" placeholder="Stock Quantity..." name="stock">
              <button type="submit" onclick="colsePopup()"><b>Save</b></button>
              <button type="reset"><b>Reset</b></button>
          </form>
        </div>
        <div class="popup" id="popup">
          <h1><b>Add Product</b></h1>
          <form action="add_product.php" method="post">
              <input type="text" placeholder="Product Name..." name="name">
              <input type="text" placeholder="Product Gen..." name="gen">
              <input type="text" placeholder="Product Location..." name="location">
              <input type="number" placeholder="Cost" name="Cost">
              <input type="number" placeholder="Unit Price" name="unit_price">
              <input type="number" placeholder="Stock Quantity..." name="stock">
              <button type="submit" onclick="colsePopup()"><b>Save</b></button>
              <button type="reset"><b>Reset</b></button>
          </form>
      </div>
      </div>
    </main>
    

    <script src="js/dom.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready(function(){
        $('.table').DataTable();
      })
    </script>
  </body>
</html>
