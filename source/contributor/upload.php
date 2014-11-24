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
		
<!-- Validation for upload article -->

 	<script language="javascript">	
	<!--
	function check() {
	if(document.upload.title.value==''){
	alert("Enter Article Title");
	return false;}
	if(document.upload.type.value=='select article type'){
	alert("Select Artice Type");
	return false;}
	if(document.upload.editor.value==''){
	alert("No Article Found");
	return false;}
	return confirm("Do you want to upload article");

	}
	-->
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
			<article class="breadcrumbs"><a href="./index.php">InfiGo UCSC</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
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

			<li class="icn_security"><a href="#">Logout</a></li>
		
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; InfiGo UCSC</strong></p></br></br></br></br></br></br></br></br></br>
			
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column"><!-- end of stats article -->
    
    
      <h4 class="alert_info"><center>Article Upload Center </center></h4>
    <!-- end of content manager article --><!-- end of messages article -->
		
  <div class="clear"></div>
		
		<article class="module width_full">
		<form action="" method="post" name="upload" onSubmit="return check();">
			<header><h3>Post New Article</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Post Title</label>
							<input type="text" name="title">
						</fieldset>
						<fieldset>
							
							<textarea class="editor" id="editor" name="editor"></textarea>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Category</label>
							<select style="width:92%;" name="type">
 								<option>select article type</option>
								<option>Academy</option>
								<option>Research</option>
								<option>Sports</option>
                                <option>Events</option>
                                <option>People</option>
							</select>
						</fieldset>
						<input type="hidden" name="upload" value="upload">
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">

		      <input type="submit" value="Upload" class="alt_btn" name="submit">
					<input type="reset" value="Reset">
				</div>
			</footer>
		</form>
		</article><!-- end of post new article -->
		
		
    </article><!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>

