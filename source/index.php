
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
  
  
    <meta charset="utf-8">
    <title>InfiGo UCSC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <!-- Le styles -->
    <link href="./main/css/bootstrap.css" rel="stylesheet">
	<link id="switch_style" href="./main/css/silver/bootstrap.min.css" rel="stylesheet">
	
    <link href="./main/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./main/css/docs.css" rel="stylesheet">
    <link href="./main/js/google-code-prettify/prettify.css" rel="stylesheet"> 
    <link href="./main/css/my.css" rel="stylesheet">

    <script src="./main/js/jquery.js"></script>
     <script src="./main/js/msy.js"></script>
    <script src="./main/js/bootstrap-transition.js"></script>
    <script src="./main/js/live.js"></script>
    <script src="./main/js/bootstrap-alert.js"></script>
    <script src="./main/js/bootstrap-modal.js"></script>
    <script src="./main/js/bootstrap-dropdown.js"></script>
    <script src="./main/js/bootstrap-scrollspy.js"></script>
    <script src="./main/js/bootstrap-tab.js"></script>
    <script src="./main/js/bootstrap-tooltip.js"></script>
    <script src="./main/js/bootstrap-popover.js"></script>
    <script src="./main/js/bootstrap-button.js"></script>
    <script src="./main/js/bootstrap-collapse.js"></script>
    <script src="./main/js/bootstrap-carousel.js"></script>
    <script src="./main/js/bootstrap-typeahead.js"></script>
    <script src="./main/js/application.js"></script>
	
 <!-- Registration form validation  -->
 
    <script language="javascript">
	function check1(){
		if (document.reg1.password.value != document.reg1.con_password.value){
		alert("password doesn't match");
		return false;}
		return confirm("Do you want to register..?");
			}
	</script>

</head>	


<body>
<div class="container">



<div class="row-fluid">
    <div class="span9"><br/>
    <h1>InfiGo UCSC</h1>
	</div>
	<div class="span3"><br/>
	<div class="pull-right">
	<a href="#"  original-title="facebook"><img src="./main/icon/soc1.png"  alt="facebook"></a>
	<a href="#"  original-title="Delicious"><img src="./main/icon/soc2.png"  alt="Delicious"></a>
	<a href="#"  original-title="myspace"><img src="./main/icon/soc3.png" alt="myspace"></a><br/><br/>
	</div>
	</div>
	
	<!--
    <div class="span3"><br/>
	<div class="pull-right">
	<a href="#"  original-title="facebook"><img src="icon/facebook.png"  alt="facebook"></a>
	<a href="#"  original-title="Delicious"><img src="icon/digg.png"  alt="Delicious"></a>
	<a href="#"  original-title="myspace"><img src="icon/myspace.png" alt="myspace"></a><br/><br/>
	</div>
	</div>
	<div class="pull-right">
	<a href="#"  original-title="facebook"><img src="css/images/admin/facebook.jpg" width="23" height="22" alt="facebook"></a>
	<a href="#"  original-title="Delicious"><img src="css/images/admin/delicious.jpg" width="23" height="22" alt="Delicious"></a>
	<a href="#"  original-title="Digg"><img src="css/images/admin/digg.jpg" width="23" height="22" alt="Digg"></a>
	<a href="#"  original-title="Twitter"><img src="css/images/admin/twitter.jpg" width="23" height="22" alt="Twitter"></a>
	<a href="#"  original-title="Stumbleupon"><img src="css/images/admin/stumbleupon.jpg" width="23" height="22" alt="Stumbleupon"></a> <br/><br/>
	</div> -->
</div>

<div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
   			<a name="top"></a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#academy">Academy</a></li>
            <li><a href="#research">Research</a></li>
            <li><a href="#sports">Sports</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#">People</a></li>
             <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">About us <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Vision</a></li>
                <li><a href="#">Mission</a></li>
            
                <li class="divider"></li>
                <li class="nav-header">UCSC</li>
                <li><a href="http://www.ucsc.lk/">Web Site</a></li>
                
              </ul>
            </li>
            
          
          </ul>
         
         
   
     <form action="" class="navbar-search pull-left">
            <input type="text" placeholder="Search" class="search-query span2">
          </form> 
          
           <!-- sign up part start --> 

          
          
          <ul class="nav pull-right">
          
         <a href="#myModal2" role="button" class="btn btn-primary" data-toggle="modal">Sign Up</a>
     
    <!-- Modal -->
    <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Registration form..</h3>
    </div>
	<!-- Registration form start here-->
	
    <form name="reg1" action="./php/front_end_registration.php" method="post" onsubmit="return check1()">
    <div class="modal-body">
    User name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" maxlength="30" required></br>
    E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="mail" maxlength="30" required></br>
    Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" maxlength="30" required></br>
    Confirm password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="con_password" maxlength="30" required></br>
    
    </div>
    <div class="modal-footer">
    
    <button type="submit" name="submit1" class="btn btn-primary" >Register</button>

    </form>
	<!-- Registration form end here -->
	
    </div>
    </div>
         
            
            <li class="divider-vertical"></li>
            
            
            
  

<!-- sign up part end --> 


  <!-- logging part start -->
    <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Log In</a>
     
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Login form..</h3>
    </div>
	<!-- Login form start here -->
	
    <form name="login" action="./php/login.php" method="post">
    <div class="modal-body">
    E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="name" required></br>
     Password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" required></br>
     <a href="#">Fogot password?</a>
    </div>
    <div class="modal-footer">
    
    <button type="submit" name="submit" class="btn btn-primary">Log in</button>
    </form>
	<!-- login form end here -->
    </div>
    </div>
            
            
            
            
            
            
            
            
     

              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div>
	
<div class="row-fluid">
	<div class="span7">
	
	<div id="myCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
    <div class="active item"><img src="./main/img/2.jpg" style="width:100%"/>
	<div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
	</div>
    <div class="item"><img src="./main/img/4.jpg" style="width:100%"/>
	<div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
	</div>
    <div class="item"><img src="./main/img/2.jpg" style="width:100%"/>
	<div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
	</div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
	
	
		
	</div>
	<div class="span5">
		<img src="./main/img/1.jpg"/><br/><br/>
		<form class="well form-inline" name="reg2" action="../Project Infigo/php/front_end_registration.php" method="post">
		<h3>Official Newsletter for UCSC</h3><br/>
		<p style="text-align:justify">
			Infigo UCSC is the Online news letter implemented for University of Colombo School of Computing in order to maintain a proper information flow between various parties. And also will be implemented as bridging compartment of both Student and Alumna parties of UCSC..<br/>
		</p>

		<div class="control-group" >
            
            <div class="controls">
              <div class="input-append" >
              
                <input type="email" name="email" required size="40" id="appendedInputButton" class="span9" /><button type="submit" class="btn btn-inverse" style="padding-left:13px" name="submit2">Subscribe</button>
                
              </div>
            </div>
          </div>
		<!--<input type="text" class="input-large" style="font-size:15px;" placeholder="Email">
		<button type="submit" class="btn btn-large" style="color:#000; font-weight:bold; ">Subscribe</button> -->
		</form>	
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
	
	<center>
	<img src="./main/img/10.jpg"/>
	<div class="modal hide" id="myModal">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
	<h3>Modal header</h3>
    <img src="http://placehold.it/600x300" style="width:600px; height:300px"/>
    </div>
	</div>
	<br/><br/>
	
	<a class="btn" style="width:285px;" href="#">Sri Maha Bodhi Sapling at UCSC <br/> This is a sprout of Sri maha bodhi </a>
	</center>
	</div>
	<div class="span4">
	<center>
	  <img src="./main/img/11.jpg"/>	  <div class="modal hide" id="myModal1">
	    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
	<h3>Modal header</h3>
    <img src="http://placehold.it/600x300" style="width:600px; height:300px"/>
    </div>
	</div>
	<br/><br/>
	
	<a class="btn" style="width:285px;" href="#">Informatics and UCSC <br/> Victorious at Imagine Cup 2014</a>
	</center>
	
	</div>
	
	<div class="span4">
	<center>
	<img src="./main/img/12.jpg"/>

	<br/><br/>
	
	<a class="btn" style="width:285px;" href="#">IFO++ : Memoirs of a Successful Event <br/>@ UCSC </a>
	</center>
	
	</div>
</div>

 <div class="row-fluid">
 <hr style="height:1px;border:none;color:#333;background-color:#333;" />
 </div>
 
 <a name="academy">
 <h2>Academic News</h2>
 </a>
<br>
<!--1st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">
On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives

<br>
		        </div>		         </td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>
        
<!--2nd article-->

<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b> UCSC Students wins Inter-University Statistics Quiz 2012 Winning Team from UCSC</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="734" bgcolor="#EFEFEF"><div align="justify"><br>
	            Stat day 2012 organized by the Stat Circle of the University of Colombo was held on 28th June 2012 at the Professor V.K. Samaranayake auditorium. One of the items of the stat day was an Inter-university statistics quiz competition for the Professor V.K. Samaranayake memorial trophy. Six teams representing University of Colombo (two teams) and one each from University of Moratuwa, University of Sri Jayewardenapura, University of Wayaba and University of Colombo School of Computing took part. The competition was held in three rounds. Winning team consists of five Computer Science students from Second and Third years.<br>
		        </div></td>
		        <td width="220" bgcolor="#EFEFEF" font color="black"><img src="./main/img/20.jpg" width="220" height="165"><br>                
	            <font></td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>        

<!--3st article -->

	<div class="row-fluid">
	<div class="span12">
	  <form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives.<br>
		        </div></td>
	          </tr>
	        </table>
		  </div>
		</form>
      <div align="right"><a href="#top">Go to Top</a></div>
    </div>
        </div>
<!--change article type-->

 <div class="row-fluid">
 <hr style="height:1px;border:none;color:#333;background-color:#333;" />
 </div>
 <a name="research">
<h2>Research News</h2>
</a>
<br>
<!--1st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p></p>
		    <table width="964" height="41" border="0">
		      <tr>

		        <td width="700" bgcolor="#EFEFEF" font color="black">
  <?php
 

require_once("./php/connect.php"); 


$query="SELECT text FROM article ORDER BY id DESC LIMIT 1;";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}


$row=mysql_fetch_row($result);
echo  $row[0];



?><br>
		        </td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>
        
<!--2nd article-->

<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b> UCSC Students wins Inter-University Statistics Quiz 2012 Winning Team from UCSC</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="734" bgcolor="#EFEFEF"><div align="justify"><br>
	            Stat day 2012 organized by the Stat Circle of the University of Colombo was held on 28th June 2012 at the Professor V.K. Samaranayake auditorium. One of the items of the stat day was an Inter-university statistics quiz competition for the Professor V.K. Samaranayake memorial trophy. Six teams representing University of Colombo (two teams) and one each from University of Moratuwa, University of Sri Jayewardenapura, University of Wayaba and University of Colombo School of Computing took part. The competition was held in three rounds. Winning team consists of five Computer Science students from Second and Third years.<br>
		        </div></td>
		        <td width="220" bgcolor="#EFEFEF" font color="black"><img src="./main/img/20.jpg" width="220" height="165"><br>                
	            <font></td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>        

<!--3st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives.<br>
		        </div></td>
	          </tr>
	        </table>
		  </div>
		</form>
        <div align="right"><a href="#top">Go to Top</a></div>
      </div>
        </div>

	
    
 <!--change article type-->

 <div class="row-fluid">
 <hr style="height:1px;border:none;color:#333;background-color:#333;" />
 </div>
 <a name="sports">
<h2>Sports News</h2>
</a>
<br>
<!--1st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives.<br>
		        </div>		          <font></td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>
        
<!--2nd article-->

<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b> UCSC Students wins Inter-University Statistics Quiz 2012 Winning Team from UCSC</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="734" bgcolor="#EFEFEF"><div align="justify"><br>
	            Stat day 2012 organized by the Stat Circle of the University of Colombo was held on 28th June 2012 at the Professor V.K. Samaranayake auditorium. One of the items of the stat day was an Inter-university statistics quiz competition for the Professor V.K. Samaranayake memorial trophy. Six teams representing University of Colombo (two teams) and one each from University of Moratuwa, University of Sri Jayewardenapura, University of Wayaba and University of Colombo School of Computing took part. The competition was held in three rounds. Winning team consists of five Computer Science students from Second and Third years.<br>
		        </div></td>
		        <td width="220" bgcolor="#EFEFEF" font color="black"><img src="./main/img/20.jpg" width="220" height="165"><br>                
	            <font></td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>        

<!--3st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives.<br>
		        </div></td>
	          </tr>
	        </table>
		  </div>
		</form>
        <div align="right"><a href="#top">Go to Top</a></div>
      </div>
        </div>
   
    
<!--change article type-->

 <div class="row-fluid">
 <hr style="height:1px;border:none;color:#333;background-color:#333;" />
 </div>
 <a name="events">
<h2>Events </h2>
</a>
<br>
<!--1st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives.<br>
		        </div>		          <font></td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>
        
<!--2nd article-->

<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b> UCSC Students wins Inter-University Statistics Quiz 2012 Winning Team from UCSC</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="734" bgcolor="#EFEFEF"><div align="justify"><br>
	            Stat day 2012 organized by the Stat Circle of the University of Colombo was held on 28th June 2012 at the Professor V.K. Samaranayake auditorium. One of the items of the stat day was an Inter-university statistics quiz competition for the Professor V.K. Samaranayake memorial trophy. Six teams representing University of Colombo (two teams) and one each from University of Moratuwa, University of Sri Jayewardenapura, University of Wayaba and University of Colombo School of Computing took part. The competition was held in three rounds. Winning team consists of five Computer Science students from Second and Third years.<br>
		        </div></td>
		        <td width="220" bgcolor="#EFEFEF" font color="black"><img src="./main/img/20.jpg" width="220" height="165"><br>                
	            <font></td>
	          </tr>
	        </table>
		  </div>
		</form>
      </div>
        </div>        

<!--3st article -->

	<div class="row-fluid">
	<div class="span12">
		<form class="well form-inline">
		  <div align="left"><p><center><b>Three days workshop</b></center></p>
		    <table width="964" height="41" border="0">
		      <tr>
		        <td width="254" bgcolor="#EFEFEF"><img src="./main/img/21.jpg" width="246" height="155"></td>
		        <td width="700" bgcolor="#EFEFEF" font color="black"><div align="justify">On the 16th of September the six students of University of Colombo School of computing (Com.Soc) came to H/Nihiluwa public school and held a three day workshop in the computer centre. The students of ICT and GIT of Nihiluwa public school and the students of Ruhunulanka participated in the workshop.<br>
                The workshop was very successful. The university students shared their knowledge about computer hardware, programming languages, web design, the Internet, software used in photo editing and videos. As a student of Ruhunulanka I appreciate their valuable help and I wish them success their lives.<br>
		        </div></td>
	          </tr>
	        </table>
		  </div>
		</form>
        <div align="right"><a href="#top">Go to Top</a></div>
      </div>
        </div>

<div class="row-fluid">
 <hr style="height:1px;border:none;color:#333;background-color:#333;" />
 </div>




    
    
    
    
    



<div class="row"><center><br/><br/>&copy; Allright reserved. <br/> <br/></center></div>
<div id="theme_switcher">
<style>
.container{width:970px}
#theme_switcher {left: 10px;position: fixed;top: 10px;}
</style>
	<div class="btn-group">
		<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Choose Colors<span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#" rel="silver">Silver</a></li>
            <li><a href="#" rel="black">Black</a></li>
			<li><a href="#" rel="blue">Blue</a></li>
			<li><a href="#" rel="bluewhite">Blue White</a></li>
            <li><a href="#" rel="greenyellow">Green Yellow</a></li>
			<li><a href="#" rel="orange">Orange</a></li>
            <li><a href="#" rel="siningblack">Sining Black</a></li>
            <li><a href="#" rel="white">White</a></li>
			<li><a href="#" rel="">Bootstrap</a></li>
		</ul>
	</div>
</div>
<script>
$(function() {
	$('#theme_switcher ul li a').bind('click',
		function(e) {
			$("#switch_style").attr("href", "./main/css/"+$(this).attr('rel')+"/bootstrap.min.css");    		
			return false;
		}
	);
});
</script>
</body>

</html>

