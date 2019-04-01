<?php
# Update button submit section.
include_once "data_model.php";
if(isset($_POST['update'])){

	$product_id = $_POST['cart_product_id'];
	$quantity = $_POST['quantity'];

	if(update_cart($product_id,$quantity)){
		header("Location:cart0.1.php");
	}

}

# Delete button submit section.

if(isset($_POST['delete'])){

	$product_id = $_POST['delete_product_id'];

	if(delete_item_from_cart($product_id)){
		header("Location:cart0.1.php");
	}

}

include_once "header.php";

		
?>

<style >
	main{
		width:80vw;
	}

	.main-wrapper{
		display:flex;
		justify-content: space-between;	
	}

	aside{
		width:10vw;
	}
	

	table img{
		height:170px;
	}

	table tr{
		text-align:center; 			
	}

	table tr td:nth-child(1){
		width:20vw;
	}

	table tr td:nth-child(2){
			width:40vw;
	}

	table tr td:nth-child(3){
		width:10vw;
	}

	table tr td:nth-child(4){
		width:10vw;
		align-items:center;
		vertical-align:align="center" center;
	}
	.table input[type="number"]{
		width:40px;
	}

</style>
<div class="main-wrapper">	
<main class="products">
  <div class="cart-container">
    <table class="ui table celled">
    	<thead></thead>
    	<tbody>
      <!-- <div class="grid">	 -->
	<?php 
		$cart_arr =get_cart_details();
		$grand_total = null;


		if(!empty($cart_arr)){
			foreach($cart_arr as $cart_product){
				$grand_total += $cart_product['Total'];
	?>

	<tr class="card cart_product">
		<td class="image cart_product_image">
			<a href="product.php?pid=<?php echo $product['product_id']?>" class="image cart_product_image"><img width="200px" src="<?=$cart_product['product_image']?>"/></a>
		</td>
		<td class="content">
			<h3><?=$cart_product['product_name']?></h3>
			<form method="post">
					<input type="hidden" name="delete_product_id" value="<?=$cart_product['product_id']?>">
					<input type="submit"  class="btn_delete" name="delete" value="Delete Item">
			</form><br>
		</td>
		<td class="price">
			<span class="price">&pound;<?=$cart_product['product_price']?></span>
		</td>
		<!-- <td valign="center" > -->
		<td >
			<!-- <div><input type="number" name="quantity"><input type="button" name="update" value="Update"></div> -->
			<form method='post'>
					<p>Quantity : <input type="number" style="height:25px;" name="quantity" min="1" max="10" value="<?=$cart_product['quantity']?>">
								<input type="hidden" name="cart_product_id" value="<?=$cart_product['product_id']?>">
								&nbsp; &nbsp;<input type="submit"  class="btn_update" name="update" value="Update Quantity"><p>
			</form>
					
		</td>
	</tr>

					<!-- tbl end -->

	<?php  }
		# End of foreach loop
			} else {
					echo "<div class='ui error'>You do not have any item in the basket!<a href='products.php'> Shop Now! </a></div>";
			} # End of if else 
	
	?>
		</div>
	</tbody>
	</table>
</main>

<aside>	
<?php
	# Grand Total Section 
	if(!empty($grand_total)){?>
		<div class="grand_total">
			<b> Grand Total: &pound; <?=$grand_total?><br><br>
			<a href="checkout.php">
				<button  class="btn_checkout">Go to Checkout </button>
			</a>	
		</div> <!-- End of grand_total div -->
	<?php } ?>


</aside>
</div>



<?php
include_once('footer.php');
 ?>
