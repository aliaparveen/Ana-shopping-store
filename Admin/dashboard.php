<?php
include("../session.php");
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Ana Online Store </title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
      <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/favicon.png" />
	 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />
	 
	 
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>



<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>

</head>


<body>
<div id="container">

  
	   <div id="header">
 
         
		<div id="logo-banner">
		   
				<div id="logo">
					
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
				
				<div id="banner">
                   
				</div>
		       
		</div>
		</div> <!--DHAMAADKA hedaerka-->
		
	
<div id="content-wrap">		
	<section id="secondary_bar">
		
            <nav><!-- Defining the navigation menu -->
                <ul>
                    <li class="selected"><a href="index.php">Home</a></li>
                     <li><a href="add_product.php">Add product</a></li>
                    <li><a href="Employee.php">Add employee</a></li>
                    <li><a href="add_category.php">Categories</a></li>
                    <li class="logout"> <span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></li>
					
                </ul>
				
            </nav>
		
	</section><!-- end of secondary bar -->
	
	   	
<aside id="sidebar" class="column">
					<!-- Begin Search -->
			
				<!-- End Search -->
		
		
		

		
		<h3>Administrator:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="Employee.php">Add Employee</a></li>
			<li class="icn_photo"><a href="add_product.php">Add Product</a></li>
			<li class="icn_new_article"><a href="add_category.php">Add Category</a></li>
		
		</ul>
		
        <h3>Tables:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="order.php">Order Detail</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Customer Detail</a></li>
		</ul>

		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Welcome To <strong>"Ana Online Store"</strong> Admin Panel As: <?php echo "  ". "<font color='#f90'><big><b>".$login_session."</b></big></font>" ;?>  </h4> 
		
		<article class="module width_full">
			<header><h3>Stats</h3></header>
			<div class="module_content">
				<article class="stats_graph">
					<img src="http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30" width="520" height="140" alt="" />
				</article>
				
				<article class="stats_overview">
					<div class="overview_today">
						<p class="overview_day">Today</p>
						<p class="overview_count">1,876</p>
						<p class="overview_type">Hits</p>
						<p class="overview_count">2,103</p>
						<p class="overview_type">Views</p>
					</div>
					<div class="overview_previous">
						<p class="overview_day">Yesterday</p>
						<p class="overview_count">1,646</p>
						<p class="overview_type">Hits</p>
						<p class="overview_count">2,054</p>
						<p class="overview_type">Views</p>
					</div>
				</article>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->


		


					
		<?php
$result = mysqli_query($mysqli,"SELECT * FROM contact");
?>
      			<div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 
      <thead>
			<thead><th colspan="7"> Commands and Complain </th></thead>
		<thead>
			</tr>
   		    <th>Check</th> 
    	      <th> ID</th>
              <th> Name</th>			  
    		<th>Email</th>
		    <th>TellePhone</th>	
             <th>Comment</th>				
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['contact_id']; ?></td>
    <td><?php echo $row['Name']; ?></td>
   <td><?php echo $row['Email']; ?></td>
	<td><?php echo $row['Phone']; ?></td>
	<td><?php echo $row['Subject']; ?></td>
    <td> <a href="conDelete.php?delete=<?php echo $row['contact_id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr

  ><?php }mysqli_close($mysqli);?>
</tbody>
</table>


			</div><!-- end of #tab2 -->
			



	    
		 

		
		<div class="clear"></div>

		<div class="spacer"></div>


	</section>
       </div>
</div>

</body>

</html>