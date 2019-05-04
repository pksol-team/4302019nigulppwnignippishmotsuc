<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
  if($_POST['simpleecommcart-action'] == 'save flat rate options') {
  	$flat_rate_rate=$_POST["shipping_options_flat_rate"]; 
	SimpleEcommCartSetting::setValue('shipping_options_radio','1');
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option', $flat_rate_rate["option"]);
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option2_local', $flat_rate_rate["option2_local"]);
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option2_international', $flat_rate_rate["option2_international"]);
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option3_local', $flat_rate_rate["option3_local"]);
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option3_international', $flat_rate_rate["option3_international"]); 


	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_1quantity', $flat_rate_rate["option4_1quantity"]); 
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_2quantity', $flat_rate_rate["option4_2quantity"]); 
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_35quantity', $flat_rate_rate["option4_35quantity"]); 
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_628quantity', $flat_rate_rate["option4_628quantity"]); 
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_2960quantity', $flat_rate_rate["option4_2960quantity"]); 
	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_61100quantity', $flat_rate_rate["option4_61100quantity"]); 

	SimpleEcommCartSetting::setValue('shipping_options_flat_rate_option4_enable_0_cost', $flat_rate_rate["option4_enable_0_cost"]); 


  } 
} 
?> 
<h2>Shipping</h2>


<div class='wrap'><div class='wrap' style="width:80%;max-width:80%;float:left;"> 
 
 <div id="widgets-left" style="margin-right: 5px;">
    <div id="available-widgets"> 
		<div class="widgets-holder-wrap">
			<div class="sidebar-name"> 
         		<h3><?php _e( 'Shipping Method' , 'simpleecommcart' ); ?></h3>
        	</div>
       		<div class="widget-holder"> 
				<div id="dvFlatRate" >
		<form action="" method="post">
	    <input type="hidden" name="simpleecommcart-action" value="save flat rate options" />
		<input type="hidden" value="1" name="shipping_options[radio]"/>
		<h3><?php _e( 'Flat Rate(Product Specific Shipping Rate)' , 'simpleecommcart' ); ?></h3>
		<table>
				<tr>
					<td>
						<input type="radio" value="1" name="shipping_options_flat_rate[option]" <?php echo (SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option")  == '1' || SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option")==NULL)? 'checked="true"' : '' ?>>Apply Product Specific Shipping Rates for Individual Products</input>
						 <img title="Calculate shipping individually for the products that have specific shipping configured (single and bundle rate under individual product)." src=" <?php echo INFO_ICON ?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" value="2" name="shipping_options_flat_rate[option]" <?php echo (SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option")  == '2')? 'checked="true"' : '' ?>>Apply a Flat Rate regardless the number of Items in the Cart</input>
						  <img title="Customers will be charged a fixed shipping price regardless the amount of items in the cart. " src=" <?php echo INFO_ICON ?>"/>
						<br/>
						<table>
							<tr>
								<td>Flat Rate amount local</td>
								<td><input  type="text" style="width: 75px;"  name="shipping_options_flat_rate[option2_local]" value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option2_local") ?>'/></td>
								<td>International</td>
								<td><input  type="text" style="width: 75px;" name="shipping_options_flat_rate[option2_international]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option2_international") ?>'/></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" value="3" name="shipping_options_flat_rate[option]" <?php echo (SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option")  == '3')? 'checked="true"' : '' ?>>Apply a Flat Rate for each Individual Product in the Cart</input>
						 <img title="Customer will be charged a fixed shipping price for each individual product in the cart (only the products that have shipping required selected “Yes”). Example: 1 pencil and a 1 laptop in the cart and the Flat rate amount local is $2. The total shipping price will be $2+$2=$4." src=" <?php echo INFO_ICON ?>"/>
						<br/>
						<table>
							<tr>
								<td>Flat Rate amount local</td>
								<td><input  type="text" style="width: 75px;"  name="shipping_options_flat_rate[option3_local]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option3_local") ?>'/></td>
								<td>International</td>
								<td><input  type="text" style="width: 75px;" name="shipping_options_flat_rate[option3_international]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option3_international") ?>'/></td>
							</tr>
							</table>
					</td>
				</tr>

				<tr>
					<td>
						<input type="radio" value="4" name="shipping_options_flat_rate[option]" <?php echo (SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option")  == '4')? 'checked="true"' : '' ?>>Custom Flat Rates</input>
						 <img title="1. Free (only one item): 0 cost. (Need to checkout through Paypal)

2. quantity 1: item price + custom shipping cost (e.g., $2 + $2)

3. quantity 2: item price x 2 + shipping cost (e.g., $2 x 2 + $4)

4. quantity 3-5: item price x quantity + custom shipping cost (e.g., $2 x 4 + $5)

5. quantity 6-28: item price x quantity + custom shipping cost (e.g., $2 x 12 + $10)

6. quantity 29-60: item price x quantity + custom shipping cost (e.g., $2 x 60 + $20)

7. quantity 61-100: item price x quantity + custom shipping cost (e.g., $2 x 72 + $40)." src=" <?php echo INFO_ICON ?>"/>
						<br/>
						<table>

							<tr>
								<td>&nbsp;</td>
							</tr>

							<tr style="border-bottom: 1px solid #ddd;">
								<td> <strong>Enable 0 cost and 0.01 Shipping: </strong></td>
								<td><input type="checkbox" name="shipping_options_flat_rate[option4_enable_0_cost]" <?php if(SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_enable_0_cost") == 'on') echo 'checked'; ?> ></td>
							</tr>

							<tr>
								<td>&nbsp;</td>
							</tr>

							<tr>
								<td>Quantity: 1</td>
								<td><input type="text" style="width: 75px;"  name="shipping_options_flat_rate[option4_1quantity]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_1quantity") ?>'/></td>

								<td>Quantity: 2</td>
								<td><input type="text" style="width: 75px;"  name="shipping_options_flat_rate[option4_2quantity]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_2quantity") ?>'/></td>


							</tr>

							<tr>
								<td>Quantity: 3-5</td>
								<td><input type="text" style="width: 75px;"  name="shipping_options_flat_rate[option4_35quantity]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_35quantity") ?>'/></td>

								<td>Quantity: 6-28</td>
								<td><input type="text" style="width: 75px;"  name="shipping_options_flat_rate[option4_628quantity]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_628quantity") ?>'/></td>


							</tr>

							<tr>
								<td>Quantity: 29-60</td>
								<td><input type="text" style="width: 75px;"  name="shipping_options_flat_rate[option4_2960quantity]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_2960quantity") ?>'/></td>

								<td>Quantity: 61-100</td>
								<td><input type="text" style="width: 75px;"  name="shipping_options_flat_rate[option4_61100quantity]"  value='<?php echo SimpleEcommCartSetting::getValue("shipping_options_flat_rate_option4_61100quantity") ?>'/></td>


							</tr>


							</table>
					</td>
				</tr>

			</table>
			<br>
		<input type='submit' name='submit' class="button-primary" style='width: 80px;' value='Save' />
		</form>
		<br>
	</div> 
			</div>
		</div>
	</div>
</div>

  
	
</div>

<div style="float:right;width:18%;max-width:18%">
	<?php
	 	echo SimpleEcommCartCommon::getView('admin/more.php',NULL);
	?>
</div>
<div style="clear:both;"/>
<!--<h2  style="font-weight:normal;">Shipping discounts (Free shipping) and variations, Other shipping methods such as Weight base shipping rates, table rate shipping are available in Simple eCommerce Premium Version.</h2>-->

<script type='text/javascript'>
  $jq = jQuery.noConflict();
  
  $jq(document).ready(function() { 
  });
   
   
</script>