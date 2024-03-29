<html>
<head>
	@include('layouts.header')
</head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <img src="../assets/images/laravel-4.jpg" style="max-height:50px" alt='laravel 4 practice'/>
		  </div>

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <!-- <li><a href="#">Link</a></li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Separated link</a></li>
		          <li class="divider"></li>
		          <li><a href="#">One more separated link</a></li>
		        </ul>
		      </li> -->
		    </ul>
		    <!-- <form class="navbar-form navbar-left" role="search">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" class="btn btn-default">Submit</button>
		    </form> -->
		    <ul class="nav navbar-nav navbar-right">
		      @if(Auth::check())
		      	<li><a href="/logout">Logout</a></li>
		      @endif
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>

        <div class="container">
            @yield('content')
        </div> 
    </body>
</html>