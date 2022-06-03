<?php
session_start();
include("config.php");
include("session.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> Suncart Groups </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="shortcut icon" href="images/favicon.png" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
		 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
		 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>
	
	
	<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->



<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Somstore">Ana Online</a></h1>
				<div id="top-nav">
					<ul>
					
						<li><a href="contact.php" title="Contact"><span>Contact</span></a></li>
						<li><a href="Sign In.php" title="Sign In"><span>Sign In</span></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</dt>
<dd class="active" style="display: block;">
<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ul>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: green" ><big> '.$cart_itm["name"].' </big></h3>';
        echo '<div class="p-code"><b><i>ID:</i></b><strong style="color: #d7565b" ><big> '.$cart_itm["code"].' </big></strong></div>';
		echo '<span><b><i>Shopping Cart</i></b>( <strong style="color: #d7565b" ><big> '.$cart_itm["TiradaProductTiga"].'</big></strong>) </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #d7565b" ><big>'.$currency.$cart_itm["Qiimaha"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }
    echo '</ul>';
    echo '<span class="check-out-txt"><strong style="color:green" ><i>Total:</i> <big style="color:green" >'.$currency.$total.'</big></strong> <a   class="a-btnjanan"  href="view_cart.php"> <span class="a-btn-text">Check Out</span></a></span>';
	echo '&nbsp;&nbsp;<a   class="a-btnjanan"  href="cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Clear Cart</span></a>';
}else{
    echo ' <h4>(Your Shopping Cart Is Empty!!!)</h4>';
}
?>

</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="#" title="index.php">Home</a></li>
					<li>
						<a href="products.php">Category</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="products.php"> FoodStuff</a>
									<div class="dd">
										<ul>
											<li><a href="products.php">Fruits</a></li>
                                            <li><a href="products.php">Biscuits</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									 <a href="products.php"> Beverage</a>
									<div class="dd">
										<ul>
											  <li><a href="products.php">Bavaria</a></li>
                                             <li><a href="products.php">Reddbull</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="products.php"> Cleaning Material</a>
									<div class="dd">
										<ul>
											<li><a href="products.php">Fairy</a></li>
                                            <li><a href="products.php">Harpic</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="products.php"> Clothes</a>
									<div class="dd">
										<ul>
											  <li><a href="products.php">Suit</a></li>
                                              <li><a href="products.php">T.shirts</a></li>
										</ul>
									</div>
								</li>
								
							</ul>
						</div>
					</li>
					   <li><a href="products.php"> Products</a></li>
					   	   
								
							</ul>
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					  <li><a href="customer.php">Free Sign Up</a> </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					


<?php
$result = mysqli_query($mysqli,"SELECT * FROM warehouse");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

		<thead>  <th Colspan="9">  Ana Online Store</th></thead>
		<thead>
		<thead>
			</tr>
   		    <th>Check ID</th> 
    	      <th>ID</th>
              <th> Name</th>			  
    		<th>Country</th>
		    <th>City</th>				
    		<th> Address</th>
			 <th>Postal Code</th>				
    		<th> Email</th>
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Warehouse_ID']; ?></td>
    <td><?php echo $row['Warehouse']; ?></td>
   <td><?php echo $row['Country']; ?></td>
	<td><?php echo $row['City']; ?></td>
	<td><?php echo $row['Address']; ?></td>
	<td><?php echo $row['PostalCode']; ?></td>
	<td><?php echo $row['Email']; ?></td>
    <td> <a href="wareViewUpdate.php?update=<?php echo $row['Warehouse_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="DeleteWarehouse.php?delete=<?php echo $row['Warehouse_ID']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr>

  <?php }mysqli_close($mysqli);?>
      </tbody>
</table>
	  
 </div> 
				</div>
			</div>
			<!-- End Content -->
			
			
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>TOP Brands</h2>
						<div class="brands">
							<ul>
								<li><a href="#" title="Brand 1"><img src="images/brand-img1.jpg" alt="Brand 1" /></a></li>
								<li><a href="#" title="Brand 2"><img src="images/brand-img2.jpg" alt="Brand 2" /></a></li>
								<li><a href="#" title="Brand 3"><img src="images/brand-img3.jpg" alt="Brand 3" /></a></li>
								<li><a href="#" title="Brand 4"><img src="images/brand-img4.jpg" alt="Brand 4" /></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<a href="#" class="more" title="More Brands">More Brands</a>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
	<div class="post">
					<h2>Welcome!</h2>
					<img src="images/post-img.jpg" alt="Post Image" />
					<p>Lestibulum vel libero posuere velit faucibus pellentesque. Duis eleifend libero vitae justo porta eget interdum ligula porta. Fusce tristique, ante sit amet hendrerit suscipit, leo metus vehicula sem, eget scelerisque felis leo id magna. Proin imperdiet ullamcorper tellus sed consectetur. Aliquam erat volutpat. Integer orci urna, posuere sed bibendum id, tincidunt non augue. </p>
					<p>Cras mauris sem, posuere vel semper sed, condimentum non dui. Suspendisse vestibulum ligula eget urna posuere sagittis. Suspendisse sed nisl massa. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
		</div>
		<!-- End Main -->

	
		<p>&copy; My Site <a href="index.php"><i><font color="fefefe"> Welcome To My Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2022 My Site All rights reserved. The information contained in Ana Online Store.may not be published, broadcast, rewritten, or redistributed without the prior written authority of Ana Online Store.
				</div>
	<!-- End Wrapper -->
</body>
</html>