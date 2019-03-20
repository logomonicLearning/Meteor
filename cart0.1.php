<?php

include_once "header.php";
include_once "data_model.php";


		
?>



	<link rel="stylesheet" type="text/css" href="css/myStyle/productsStyle.css">
	
<main class="products">
  <div class="container">
    <div class="wrapper">
      <div class="grid">	
	<?php 
		$cart_arr =get_cart_details();
		$grand_total = null;


		if(!empty($cart_arr)){
			foreach($cart_arr as $cart_product){
				$grand_total += $cart_product['Total'];
	?>

	<div class="card cart_product">
		<figure class="image cart_product_image">
			<!-- <img width="200px" src="images/T90B_14.1_inch.jpg" alt=""> -->
			<img width="200px" src="images/<?=$cart_product['product_image']?>"/>
		</figure>
		<div class="content">
			<h3><?=$cart_product['product_name']?></h3>
			<div class="description">
				<?=$cart_product['product_specifications']?>
			</div>
		</div>
		<div class="buy-it">
			<span class="price"><?=$cart_product['product_price']?></span><button class="pure-button button-primary" ><i class="ui icon cart"></i>Add to cart</button>	
		</div>
	</div>

   <!--  <div class="cart_product">

					<div class="cart_product_image">
						<img src="images/<?=$cart_product['product_image']?>"/>
					</div>  -->
					<!-- End of cart_product_image div -->

				<!-- <div class="cart_product_details">

					<p><br>Product : <?=$cart_product['product_name']?></p>
					<p>Price Per Item : &pound; <?=$cart_product['product_price']?></p>
					<form method='post'>
					<p>Quantity : <input type="number" style="height:25px;" name="quantity" min="1" max="10" value="<?=$cart_product['quantity']?>">
								<input type="hidden" name="cart_product_id" value="<?=$cart_product['product_id']?>">
								&nbsp; &nbsp;<input type="submit"  class="btn_update" name="update" value="Update Quantity"></p>
					</form><br><hr><br>
					
					<b>Subtotal : &pound; <?= $cart_product['Total']?></b><br><br>
					
					<form method="post">
					<input type="hidden" name="delete_product_id" value="<?=$cart_product['product_id']?>">
					<input type="submit"  class="btn_delete" name="delete" value="Delete Item">
					</form><br>
				
				</div>  -->
				<!-- End of cart_product_details div -->

  <!-- </div> -->
  <!-- End of cart_product div -->

<?php
	  }	# End of foreach loop
	} else {
		echo "<div class='error'>You do not have any item in the basket!<a href='product.php'> Shop Now! </a></div>";
	} # End of if else 
	

	# Grand Total Section 

	if(!empty($grand_total)){?>

			

		<div class="grand_total">
			<b> Grand Total: &pound <?=$grand_total?><br><br>
			<a href="checkout.php">
				<button  class="btn_checkout">Go to Checkout </button>
			</a>	
		</div> <!-- End of grand_total div -->

<?php } ?>

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
