<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Contributor Panel</title>
	
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

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title">InfiGo UCSC</h1>
            
			<h2 class="section_title">Contributor Panel</h2><div class="btn_view_site"><a href="../log.php">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user"><!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
	  </div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="./index.php">Home</a> 
			  <div class="breadcrumb_divider"></div> <a class="current">Profile</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
	<img src="./images/ucsc.png " width="250px" hight="50px">
		<hr/>
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="./upload.php">New Article</a></li>
			<li class="icn_edit_article"><a href="#">Edit Article</a></li>
			<li class="icn_categories"><a href="#">View Article</a></li>
			<li class="icn_tags"><a href="#">Remove Article</a></li>
		</ul><br>
		<h3>My profile</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="./add_details.php">Add Details</a></li>
			<li class="icn_view_users"><a href="#">Edit Profile</a></li>
			<li class="icn_profile"><a href="#">Deactivate Account</a></li>
		</ul><br>
		
	  <h3>Option</h3>
		<ul class="toggle">
			<li class="icn_settings"></li>
			<li class="icn_security"><a href="#">Logout</a></li>
			<li class="icn_jump_back"></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; InfiGo UCSC</strong></p>
			
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
	  <h4 class="alert_info"><center>You Are Welcome laksith..!</center></h4><!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Your Details</h3>
	
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
            <form>
			<table class="tablesorter" cellspacing="0"> 
			<br>
			<tbody> 
            
				<tr> 
    				<td><b>Full Name </b></td>
                    <td>

			<input type="text">
		
        </td>
                </tr> 
                <tr> 
    				<td><b>Email </b></td>
    				<td><input type="text"></td> 
                </tr> 
                <tr> 
    				<td><b>Gender </b></td>
    				<td><select>
                    <option>Select your gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                    </td> 
                </tr> <tr> 
    				<td><b>Mobile phone </b></td>
    				<td><input type="text"></td> 
                </tr> <tr> 
    				<td><b>current city </b></td>
    				<td><input type="text"></td> 
                </tr> <tr> 
    				<td><b>Home town</b></td>
    				<td><input type="text"></td> 
                </tr> <tr> 
    				<td><b>College</b></td>
    				<td><input type="text"></td> 
                </tr> <tr> 
    				<td><b>High school</b></td>
    				<td><input type="text"></td> 
                </tr> <tr> 
    				<td><b>username</b></td>
    				<td><input type="text"></td> 
                </tr> 
                <tr>
                <td colspan="2"><center><input type="submit" name="" value="Submit">&nbsp;&nbsp;&nbsp;<input type="reset" name="" value="Reset"></center>
                </td></tr>
                
 
			</tbody> 
			</table>
            </form>
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