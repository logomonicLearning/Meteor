<?php
include_once "data_model.php";	
if(isset($_POST['btn_cart'])){

$product_id = $_POST['product_id'];

		if(add_to_cart($product_id)){
		$msg = "success";
		} else {
			$msg = "error_db";	
		}

		header("Location:product.php?action=$msg&product_id=$product_id");

}
 ?>
<?php
include_once "header.php";

?>

<style type="text/css">
	a.image.cart_product_image {
    	display: flex;
    	justify-content: center;
    	text-align:center;

	}

	.cart_product_image {
	    text-align: center;
	}
	/*a.image.cart_product_image*/
	
	.cart_product_image img {
	    width: auto;
	    height: 45vh;
	}

	.buy-it{
		display:flex;
		justify-content:space-around;
	}
	.button-primary {
    	background: #f0c14b;
    	border-color: #a88734 #9c7e31 #846a29;
    	color: #111;
	}

	.product-container{
		width:60%;
	}
	.product-wrapper{
		/*width:60;*/
		height:792px;
		max-height: 792px;
		/*min-height: 500px*/
	}	
	.grid img {
	    
	    border-style: none;
	    height: 100%;
	}

	.grid h3 {
	    font-size: 1.05rem;
	}

</style>
<!-- <link rel="stylesheet" type="text/css" href="css/myStyle/productsStyle.css"> -->
	
<main class="products">
  <div class="container product-container">
    <div class="product-wrapper">
      
		<?php 
			$product = get_product($_GET['product_id']);
		?>	   
		<form method="post">
		<div class="card cart_product">
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
			<a href="" class="image cart_product_image">
				<!-- <img width="200px" src="images/T90B_14.1_inch.jpg" alt=""> -->
				<img width="200px" src="<?=$product['product_image']?>"/>
			</a>
			<a href="" class="content">
				<h3><a href="product.php?pid=<?php echo $product['product_id']?>"><?=$product['product_name']?> </a></h3>
				<p class="description">
					<?=$product['product_specifications']?>
				</p>
			</a>
			<div class="buy-it">
				<span class="price"><?=$product['product_price']?></span>
				<button type="submit" class="pure-button button-primary" name="btn_cart"><i class="ui icon cart"></i>Add to cart</button>	
			</div>
		</div>	
  </form>
		</div>
	</div>
</main>


<?php
include_once('footer.php');
?>

