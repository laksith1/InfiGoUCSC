<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Back End Registration</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

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


<!-- User registration validation -->

<script language="javascript">
<!--
function validate(){
if (document.reg.fname.value==""){
alert("Please enter first name");
return false;}
if (document.reg.lname.value==""){
alert("Please enter last name");
return false;}
if (document.reg.mail.value==""){
alert("Please enter email address");
return false;}
if (document.reg.tp.value==""){
alert("Please enter telephone number");
return false;}
if (document.reg.uname.value==""){
alert("Please enter user name");
return false;}
if (document.reg.password.value==""){
alert("Please enter password");
return false;}
if (document.reg.con_pass.value==""){
alert("Please confirm password");
return false;}
if (document.reg.password.value != document.reg.con_pass.value){
alert("password doesn't match");
return false;}
return confirm("Do you want to register..?");
}

-->
</script>




</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title">InfiGo UCSC</h1>
            
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="../log.php">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user"><!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
	  </div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="./index.php">InfiGo UCSC</a> 
			  <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		
			<img src="./images/ucsc.png " width="250px" hight="50px">
		
		<hr/>
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="./upload.php">New Article</a></li>
			<li class="icn_edit_article"><a href="#">Edit Articles</a></li>
			<li class="icn_categories"><a href="#">Categories</a></li>
			<li class="icn_tags"><a href="#">View Articles</a></li>
		</ul>
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="./add_users.php">Add New User</a></li>
			<li class="icn_view_users"><a href="#">View Users</a></li>
			<li class="icn_profile"><a href="#">Remove Users</a></li>
		</ul>
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"></li>
		</ul>
	  <h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"></li>
			<li class="icn_jump_back"><a href="#">Logout</a></li>
		</ul>
		
		<footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
	  <h4 class="alert_info"><center>Back End User Registration Centre.</center></h4><!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Registration Form</h3>
	
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			
			<!-- Back end user reg form start here -->
			
			
            <form name="reg" action="../php/back_end_registration.php" method="post" onsubmit="return validate()">
			<table class="tablesorter" cellspacing="0"> 
			<br>
			<tbody> 
            
				<tr> 
    				<td><b>Select user type: </b></td>
                    <td>

			<input type="radio" name="utype" value="admin" checked>Admin &nbsp;&nbsp; 
			<input type="radio" name="utype" value="ceditor">Chief Editor &nbsp; </td><td>
			<input type="radio" name="utype" value="editor">Editor &nbsp;&nbsp;
			<input type="radio" name="utype" value="data">Data Entry 
		
			</td></tr> 
             
                <tr> 
    				<td><b>First Name:</b></td>
    				<td><input type="text" name="fname" maxlength="30" required></td> 
                </tr> 
                <tr> 
    				<td><b>Last Name:</b></td>
    				<td><input type="text" name="lname" maxlength="30" required>
                    </td> 
                </tr> <tr> 
    				<td><b>E-Mail:</b></td>
    				<td><input type="email" name="mail" maxlength="30" required></td> 
                </tr> <tr> 
    				<td><b>Mobile Number:</b></td>
    				<td><input type="number" name="tp" min="0"  maxlength="10" required></td>
                </tr> <tr> 
    				<td><b>User Name:</b></td>
    				<td><input type="text" name="uname" maxlength="30" required></td> 
                </tr> <tr> 
    				<td><b>Password:</b></td>
    				<td><input type="password" name="password" maxlength="30" required></td>
                </tr> <tr> 
    				<td><b>Confirm Password:</b></td>
    				<td><input type="password" name="con_pass" maxlength="30" required></td> 
                </tr> 
                <tr>
                <td colspan="2"><center><input type="submit" name="submit" value="Register">&nbsp;&nbsp;&nbsp;<input type="reset" name="cancel" value="Cancel"></center>
                </td></tr>
                
 
			</tbody> 
			</table>
            </form>
			
			<!-- Back end user reg form end here -->
			
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content"></div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
	  </article><!-- end of content manager article -->
		
	  <article class="module width_quarter">
			<header><h3>Profile Picture</h3></header>
			
				<div class="module_content">
			<img src="./images/l.jpg" width="100%" height="100%" >
			</div>
			<footer>
				<form class="post_message">
					<center>
		<input type="submit" name="" value="Upload Image">
        </center>
				</form>
			</footer>
		</article><!-- end of messages article --><!-- end of content manager article --><!-- end of messages article -->

	  <div class="clear"></div><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
</section>


</body>

</html>