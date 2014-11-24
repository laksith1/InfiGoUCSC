<!DOCTYPE html>
<html>
    <head>
	
        <title>Writer</title>
		 <link href="css/main.css" rel="stylesheet" type="text/css">

		
		
		
        <meta content="text/html; charset=utf-8" http-equiv="content-type" />
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
        <style>
            .cke_contents {
                height: 350px !important;
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
    
	<style>
.center {

	border:2px solid black;
	border-radius: 4px;
	
}
</style>
	
	</head>

    <body>

	<br>
        <form action="" method="post" name="upload" onsubmit="return check();">
        	Article Title:   <input type="text" name="title"  class="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Article Type: 
	
	 <select name="type" size="1" class="center">
     <option>select article type</option>
    <option>Academy</option>
    <option>Research</option>
    <option>Sports</option>
    <option>Events</option>
     </select> 
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	 <a href="www.google.com"><input type="button" name="pro" value="My Profile" ></a>
	  
     <input type="hidden" name="upload" value="upload">
     
           <br><br>
            <textarea class="editor" id="editor" name="editor"></textarea>
			
			<br>
		<input type="submit" name="submit" value="Upload article">
        </form>
        
 <?php
 
 ?>       
    
    </body>
 
</html>