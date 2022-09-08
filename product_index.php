<?php 
include("vendor/autoload.php");
 use Libs\Databases\MySQL;
 use Libs\Databases\ProductTable;

 $item_data = new ProductTable(new MySQL());
 $items = $item_data->getItems();

 // echo "<pre>";
 // print_r (count($items));
 // print_r($items);

 // echo "</pre>";
 
include("layouts/head.php")
?>

<?php 
include("layouts/navbar.php")
?>

<body>

 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Create Product Item
      </button>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <th>ID</th>
        <th>ProductName</th>
        <th>Price</th>
        <th>QTY</th>
        <th>Created_At</th>
        <th>Action</th>
       </thead>
       <tbody>
        <?php
        foreach ($items as $item) {
             ?>
        <td><?php echo $item->id; ?></td>
        <td><?php echo $item->product_name; ?></td>
        <td><?php echo $item->price; ?></td>
        <td><?php echo $item->quantity; ?></td>
        <td><?php echo $item->created_at; ?></td>
        <td>
         <a href="_actions/item_delete.php?id=<?php echo $item->id; ?>" class="btn btn-danger">Delete</a>
         <a href="item_edit.php?id=<?php echo $item->id; ?>" class="btn btn-warning">Edit</a>
        </td>
        </tr>
        <?php
         }
         ?>
        </tr>
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h3>Add Product</h3>
     </div>
     <div class="card-body">
      SomeThing
     </div>
    </div>
   </div>
  </div>
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Create Product Item</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <form action="" method="POST">
       <div class="mb-3">
        <label for="product_name" class="form-label">Product NAme</label>
        <input type="text" name="product_name" class="form-control" id="product_name">
       </div>
       <div class="mb-3">
        <label for="ProductPrice" class="form-label">Product Price</label>
        <input type="number" name="price" class="form-control" id="price">
       </div>
       <div class="mb-3">
        <label for="quantity" class="form-label">Product quantity</label>
        <input type="number" name="quantity" class="form-control" id="quantity">
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save Product">
       </div>
      </form>
     </div>

    </div>
   </div>
  </div>
 </div>

 <?php 
include("layouts/footer.php")
?>