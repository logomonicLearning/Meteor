<?php
include_once "data_model.php";	
if(isset($_POST['btn_cart'])){

$product_id = $_POST['product_id'];

		if(add_to_cart($product_id)){
		$msg = "success";
		} else {
			$msg = "error_db";	
		}

		header("Location:products.php?action=$msg&product_id=$product_id");

}

 ?>
<?php
include_once "header.php";

?>

<style type="text/css">
	.grid img {
	    border-style: none;
	    height: 170px;
	}
	.grid h3 {
	    font-size: 1.05rem;
	}
	a.image.cart_product_image {
    	text-align: center;
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
			<a href="product.php?product_id=<?php echo $product['product_id']?>" class="image cart_product_image">
				<img width="200px" src="<?=$product['product_image']?>"/>
			<div href="" class="content">
				<h3><?=$product['product_name']?></h3>
			</div>
			</a> 


			<form class="buy-it" method="post">
				<input type="hidden" name = "product_id" value="<?=$product['product_id']?>">
				<div class="confirm">
						<?php 
						if(isset($_GET['action']) && isset($_GET['product_id']) ){
							$action = $_GET['action'];
							$product_id = $_GET['product_id'];
							if($action =="success" && $product_id == $product['product_id']){
								echo "<div class='confirm-add'>Item added to the cart!</div>";
							} else if($action =="error_db" && $product_id == $product['product_id']){
								echo "<div class='confirm-error'>There is a problem adding to the cart!</div>";
							}
						}
						?>
				</div> <!-- End of confirm div -->	


				<span class="price">&pound;<?=$product['product_price']?></span>
				<button type='submit' name='btn_cart' class="pure-button button-primary" ><i class="ui icon cart"></i>Add to cart</button>	
			</form>
		</div>

		<!-- products sample -->
		
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
include_once('footer.php');
?>