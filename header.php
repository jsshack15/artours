<!DOCTYPE html>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="jquery-2.1.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			*{
				color:#fff;
			}
			.navbar-inverse
			.navbar-nav>.active>a, 
			.navbar-inverse .navbar-nav>.active>a:hover, 
			.navbar-inverse .navbar-nav>.active>a:focus 
			{
				background:#00796b;
				color:#fff;
			}
			
			.navbar-inverse 
			.navbar-nav>.open>a,
			 .navbar-inverse .navbar-nav>.open>a:hover, 
			 .navbar-inverse .navbar-nav>.open>a:focus {
			    color: #fff;
			    background-color: #00796b;
			}
		</style>
	</head>
	<body>
		
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" style="color:#fff;border-bottom: 3px solid #00796b;background:#009688;" role="navigation">
  <div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.php">
        <img alt="Brand" src="pics/viewlogo.aspx-3 (2).png" style="box-shadow: 0 5px 5px #fff;z-index: 10px;width:65px;height:65px;border-top: solid 3px #888;border-left: #888 solid 3px;border-radius:140px/140px;">
      </a>
      <div class="pull-right">
      <button type="button" class="navbar-toggle collapsed pull-left" style="padding: 6px 12px; "  data-toggle="collapse" data-target="#navbar-collapse-2">
       <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-search" style="color:white; font-size: 14px; "></span>
        
      </button>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      </div>
      
    </div>

     
    
    
  
    <div class="collapse navbar-collapse navbar-right " id="navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <li class="active" style="color:#fff;"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
		
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:#fff;">Hospitals<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
					
			</ul>
		</li>
	
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:#fff;">Diseases <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
					
			</ul>
		</li>
		
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:#fff;"> Appointments<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
                                                
			</ul>
		</li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
    <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-2">
      <ul class="nav navbar-nav center-block">
        <li class="active">
        	<div class="input-group col-xs-9 col-xs-offset-2 ">
               <input type="text" class="form-control">
               <span class="input-group-btn">
                  <button class="btn btn-default" type="button" style="background: #777;">
                    <span class="glyphicon glyphicon-search" style="color:black; font-size: 14px; "></span>
                  </button>
               </span>
            </div>
        </li>
		
	</ul>
	</div>
	</div><!--Container Fluid-->
</nav>