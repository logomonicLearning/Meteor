<?php

include_once "header.php";
include_once "data_model.php";
		
?>



<!-- <link rel="stylesheet" type="text/css" href="css/myStyle/productsStyle.css"> -->
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
	
/*	.card.cart_product {
		width:50vw;
	}
*/

	table img{
		height:170px;
	}



	table tr{
/*		display:flex;
		justify-content: 	center;
		align-items: 	center;

*/	
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
			<b>delete</b>
		</td>
		<td class="price">
			<span class="price">&pound;<?=$cart_product['product_price']?></span>
		</td>
		<!-- <td valign="center" > -->
		<td >
			<div><input type="number" name="quantity"><input type="button" name="update" value="Update"></div>
		</td>
	</tr>

					<!-- tbl end -->

	<?php  }
		# End of foreach loop
			} else {
					echo "<div class='error'>You do not have any item in the basket!<a href='product.php'> Shop Now! </a></div>";
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
