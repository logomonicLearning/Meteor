<?php
include_once "header.php";
include_once "data_model.php";	
?>
<style type="text/css">
	.grid img {
	    border-style: none;
	    height: 170px;
	}
	.grid h3 {
	    font-size: 1.05rem;
	}
</style>
<link rel="stylesheet" type="text/css" href="css/myStyle/productsStyle.css">
	
<main class="products">
  <div class="container">
    <div class="wrapper">
      <div class="grid">	
		<?php 
			$product_arr = get_all_products();
		   	if(!empty($product_arr)){
			   	foreach($product_arr as $product){?>

		<div class="card cart_product">
			<a href="product.php?pid=<?php echo $product['product_id']?>" class="image cart_product_image">
				<img width="200px" src="<?=$product['product_image']?>"/>
			<div href="" class="content">
				<h3><?=$product['product_name']?></h3>
			</div>
			</a>
			<div class="buy-it">
				<span class="price"><?=$product['product_price']?></span>
				<button class="pure-button button-primary" ><i class="ui icon cart"></i>Add to cart</button>	
			</div>
		</div>
	
		<?php }
			} 
			else {
				echo "<div class='error'>No products available, please come back later!<a href='product.php'> Shop Now! </a></div>";
			} # End of if else 	
		?>

			</div>
		</div>
	</div>
</main>




<?php
# Update button submit section.
if(isset($_POST['update'])){
	$product_id = $_POST['cart_product_id'];
	$quantity = $_POST['quantity'];
	
	if(update_cart($product_id,$quantity)){
		header("Location:cart.php");
	}
}
# Delete button submit section.
if(isset($_POST['delete'])){
	$product_id = $_POST['delete_product_id'];
	if(delete_item_from_cart($product_id)){
		header("Location:cart.php");
	}
}
include_once('footer.php');
 ?>