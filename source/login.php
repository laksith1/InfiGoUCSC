<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- this is for avoide user step back to previous pages-->
    <script type = "text/javascript" >
    history.pushState(null, null, 'index.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'index.php');
    });
    </script>

    <title></title>
	
<link href="./custom/css/bootstrap.css" rel="stylesheet">
<link id="switch_style" href="./custom/css/bootstrap.min.css" rel="stylesheet">
<link href="./custom/css/bootstrap-theme.css" rel="stylesheet">
<link id="switch_style" href="./custom/css/bootstrap-theme.min.css" rel="stylesheet">	
	
	
<style type="text/css">	
body{padding-top:20px;}

#size{
height:36px;
}


</style>
  </head>

  <body>
  <br><br>
 

<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			<!--<input id="size" class="btn btn-primary" type="submit" value="Home" style="float:right">-->
			  	<div class="panel-heading">
					
			    	<h3 class="panel-title">Please sign in</h3>
					
					
					
			 	</div>
				
			  	<div class="panel-body">
			    	<form name="login" action="./php/login.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="name" type="email" required >
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" required>
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Login"><br><br>
						<center><a href="./index.php"><input id="size" class="btn btn-primary" type="submit"  value="Home" ></a></center>
			    	</fieldset>
			      	</form>
					
			    </div>
			</div>
		</div>
	</div>
 
  </body>
</html>
