<?php
include_once "header.php";
include_once "data_model.php";

$product_arr = get_all_products();



   if(!empty($product_arr)){
	   foreach($product_arr as $product){

 ?>	   

<div class="product">
	<div class="product_image">
		<img src="images/<?= $product['product_image'] ?>">
	</div> <!-- End of product_image div -->

	<div class="product_details">
	     <p>ID : <?= $product['product_id'] ?> </p>
		 <p>Name : <?= $product['product_name'] ?> </p>
		 <p>Price : £<?= $product['product_price'] ?> </p>
		 <p>Stock : <?= $product['stock']?> </p>

	<form method="post"><input type="hidden" name = "product_id" value="<?=$product['product_id']?>">
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
	<input type='submit'  class='btn_cart' name='btn_cart' value='Add to Cart'>
	</form>
	</div> <!-- End of product_details div -->
</div> <!-- End of product div -->

<?php 
		} // End of foreach loop
	} else {

		echo "<div class='error'> No Product Found in the Database!</div>";
		
	} // End of if else
?>




<?php
# Here we handle form submit (the add to cart button click)

if(isset($_POST['btn_cart'])){

$product_id = $_POST['product_id'];

		if(add_to_cart($product_id)){
		$msg = "success";
		} else {
			$msg = "error_db";	
		}

		header("Location:index.php?action=$msg&product_id=$product_id");

}


include_once "footer.php";
?>
