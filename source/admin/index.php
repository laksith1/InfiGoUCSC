<?php
session_start();


if (! ((isset($_SESSION["admin"])) ||(isset($_SESSION["chief_editor"]))  ||(isset($_SESSION["editor"])) ||(isset($_SESSION["data_entry"])))){
echo ('<script type="text/javascript">
	alert("Unauthorized Access")
	window.location= "../index.php"
	</script>');
exit;
}

?>


<!doctype html>
<html lang="en">

<head>

    <script type = "text/javascript" >
    history.pushState(null, null, 'index.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'index.php');
    });
    </script>


	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
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



<!-- This is relate to text editor -->
        <script type="text/javascript" src="../editor/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="../editor/js/jquery.form.js"></script>
        <style>
            .cke_contents {
                height: 200px !important;
            }
        </style>
		<script type="text/javascript">
			$(document).ready(function() {
				CKEDITOR.replace( 'editor',
				{
					fullPage : true,
					uiColor : '#9AB8F3',
					toolbar : 'MyToolbar'
				});
			});
			

		</script>
<style>

table {
     /* 140px * 5 column + 16px scrollbar width */
    border-spacing: 0;

}

tbody, thead tr { display: block; }

tbody {
    height: 315px;
    overflow-y: auto;
    overflow-x: hidden;
}

tbody td, thead th {
    width: 140px;
}

thead th:last-child {
    width: 140px; /* 140px + 16px scrollbar width */
}

</style>


</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">InfiGo UCSC</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="../log.php">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user"><!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
	  </div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">InfiGo UCSC</a> <div class="breadcrumb_divider"></div> 
			<a class="current">Dashboard</a></article>
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
			<li class="icn_jump_back"><a href="../php/logout.php">Logout</a></li>
		</ul>
		
		<footer>
		  <hr />
			<p><strong>Copyright &copy; InfiGo UCSC</strong></p>
			<p>&nbsp;</p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info"><center>Welcome to the InfiGo UCSC's Admin Dashboard.</center></h4><!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Ready for publish</h3>
</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter"  cellspacing="0" > 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Article Title</th> 
    				<th>Category</th> 
    				<th>Created On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
                <tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Ipsum Lorem Dolor Sit Amet</td> 
    				<td>Freebies</td> 
    				<td>6th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Sit Amet Dolor Ipsum</td> 
    				<td>Tutorials</td> 
    				<td>10th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Articles</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Articles</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>  
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content"></div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
        			<footer>
				<div class="submit_link">
				<input type="submit" value="Select All" class="alt_btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <input type="submit" value="Publish" class="alt_btn">
					
				</div>
			</footer>
		
		</article><!-- end of content manager article -->
        
		
		<article class="module width_quarter">
			<header><h3>Admin</h3></header>
			
				<div class="module_content">
					<p>&nbsp;xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br>xcxxc<br></p></div>
				
				</div>
			</div>
			<footer></footer>
		</article><!-- end of messages article --><!-- end of post new article -->
			
    </article><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>