<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
</head>
<body>

  <?php foreach($products as $product) : ?>
    <div class="col-md-4 game">
    <div class="game-price"><?php echo $product->price; ?></div>
    <a href="<?php echo base_url(); ?>products/details/<?php echo $product->id; ?>">
        <img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image ?>" />
    </a>
    <div class="game-title">
        <?php echo $product->title; ?>
    </div>
    <div class="game-add">
        <form method="post" action="<?php echo base_url(); ?>cart/add">
            QTY: <input class="qty" type="number" name="qty" value="1"><br/>
            <input type="hidden" name="item_number" value="<?php echo $product->id; ?>" >
            <input type="hidden" name="price" value="<?php echo $product->price; ?>">
            <input type="hidden" name="title" value="<?php echo $product->title; ?>">
            <button class="btn btn-primary" type="submit">Add To Cart</button>
        </form>
    </div>
    </div>
   <?php endforeach; ?>

</body>
</html>