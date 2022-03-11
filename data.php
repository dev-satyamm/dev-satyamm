<?php

use function PHPSTORM_META\type;

require_once __DIR__.'/query-builder/Query.php';
$query = new Query();

$data = $query->select('*')->table('product')->allRecords();
$row = $query->toArray($data);
//print_r($row);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        *{
            text-transform: capitalize;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <table class="table table-stiped">
  <thead>
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">category </th>
      <th scope="col">product name</th>
      <th scope="col">price </th>
      <th scope="col">discount </th>
      <th scope="col">product id</th>
      <th scope="col">buy</th>
    </tr>
  </thead>
  <tbody>
      <?php

       foreach($row as $val):
       ?>

       <tr>
           <td id="id"><?php echo $val['id'];?></td>
           <td id="p_cate"><?php echo $val['cate'];?></td>
           <td id="p_name"><?php echo $val['name'];?></td>
           <td id="p_price"><?php echo $val['price'];?></td>
           <td id="p_discount"><?php echo $val['discount'];?></td>
           <td id="product_id"><?php echo $val['product_id'];?></td>
           <td><a proid="<?php echo $val['product_id'];?>" href="javascript:" class="add">add to cart</a></td>
       </tr>

       <?php

       endforeach;
       ?>



?>
  
    
    
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script>
     $(Document).ready(function()
     {
         $(".add").click(function()
         {
              alert($(this).attr('proid'));
         })
     })

     function add(product_id)
     {
         alert(product_id);
     }

 </script>
</body>
</html>


