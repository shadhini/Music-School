<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Music Academy</title>
    <!-- Bootstrap -->
	<link href="{{URL::asset('login/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('login/css/default.css')}}" rel="stylesheet" type = "text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="padding-top: 28px; padding-bottom: 40px;">
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar-top">
    <div class="container-fluid">
      <div class = "row">
      <div id="settings-button" data-target = "#popup-window-settings" data-toggle="modal" >
      <a href="#">
      	<img src = "login/icons/settings-icon.png" width="16" onMouseOver="this.src='login/icons/settings-icon-hover.png'" onMouseOut="this.src='login/icons/settings-icon.png'" />
        </a>
      </div> 
      
      <div class="right-side-of-row">
      	<ul>
        	<li><a href="#" class="username">D. S. G. Jayarathne</a></li>
            <li><a href="#" class="logout-link">[logout]</a></li>
        </ul>
      </div>         
      </div>
    </div>
    
  </nav>
<div class = "container-fluid display-table">
<div class="modal fade" id="popup-window-settings" data-backdrop="static" tabindex="-1">
	<div class = "modal-dialog" >
    	<div class = "modal-content" id = "popup-window-settings-modal-dialog">
        	<div class = "modal-header" id = "popup-window-settings-modal-header" >
            	<button class = "close" data-dismiss = "modal">
                	<img src = "icons/close-icon.png" onMouseOver="this.src='login/icons/close-icon-hover.png'" onMouseOut="this.src='login/icons/close-icon.png'" />
                </button>
            	<h4 class = "modal-title" id = "popup-window-settings-modal-title">Settings</h4>
            </div>
            <div class = "modal-body" id = "popup-window-settings-modal-body">
            	<h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
                <h4 class = "modal-title">.</h4>
            </div>
            <div class = "modal-footer">
            	<h4 class = "modal-title"></h4>
                <h4 class = "modal-title"></h4>
                <h4 class = "modal-title"></h4>
                <h4 class = "modal-title"></h4>
            </div>
        </div>
    </div>
</div>



	<div class = "row display-table-row">  
  			<div class = "col-md-2 display-table-cell v-align" id="side-menu">
  				<div class="row" id="search-item">
                
                <div class = "col-md-1">
                <span class="glyphicon glyphicon-search" id="search-icon"></span>              
                </div>
                <div class = "col-md-9">
                <input type="text" placeholder="Search..." id="search-text">
                </div>                
                </div>
                <div class="row">
                
                <div id ="main-menu-items">
                  <ul>
                  <a href="index.html">
                  	<li><span>Overview</span></li>
                  </a>
                  <a href="index.html">
                	<li><span>Send / Recieve</span></li>
                  </a>
                  <a href="index.html">
                	<li><span>Transactions</span></li>
                  </a>
                  <a href="index.html">
                	<li><span>Address Book</span></li>
                  </a>
                </ul>
                </div>
                <div id="logo-image-div" >
                <img src="login/icons/logo.png" id="logo-image"/>
                </div>
                </div>
  			</div>
  			<div class="col-md-10 display-table-cell v-align box" id="content-area">            	
                <div id="background-image-div" >
                	<img src="login/icons/background.png" id="background-image"/>

                </div>   
                @yield('main_content')            
  			</div>
  		</div>
  	</div>
  
  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
    <div>
    
	<nav class="navbar-custom navbar-fixed-bottom-custom">
	  <div>
	    
      </div>
  	</nav>
    
    <nav class="navbar-custom navbar-fixed-bottom-custom-left">
	  <div>
	    	
      </div>
  	</nav>
    
    <nav class="navbar-custom navbar-fixed-bottom-custom-right">
	  <div id="status-icons-bottom-right">
      <ul>
	    	<li><img src = "login/icons/not-live-icon.png" /></li>
            <li data-target = "#popup-window-login" data-toggle="modal"><img src = "login/icons/lock-icon.png" onMouseOver="this.src='login/icons/lock-icon-hover.png'" onMouseOut="this.src='login/icons/lock-icon.png'" /></li>
            <li><img src = "login/icons/network-icon.png" onMouseOver="this.src='login/icons/network-icon-hover.png'" onMouseOut="this.src='login/icons/network-icon.png'" /></li>
       </ul>
      </div>
  	</nav>
    </div>
  </body>
</html>