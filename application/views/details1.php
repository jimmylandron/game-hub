<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
</head>
<body>

<div class="row details">
  <div class="col-md-4">                
    <img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>">
  </div>
  <div class="col-md-8">
    <h3><?php echo $product->title; ?></h3>
    <div class="details-price">
      <?php echo $product->price; ?>
    </div>
    <div class="details-description">
        <p><?php echo $product->description; ?></p>                  
    </div>
    
    <div class="details-buy">
      <form>
        QTY: <input class="qty" type="number" name="qty" value="1">
        <input type="hidden" name="item_number" value="<?php echo $product->id; ?>" >
        <input type="hidden" name="price" value="<?php echo $product->price; ?>">
        <input type="hidden" name="title" value="<?php echo $product->title; ?>">
        <button type="submit" name="buy_submit" class="btn btn-primary">Add To Cart</button>
      </form>
    </div>
  </div>
</div>