<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{pagetitle}</title>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                                           
						<li class="active">
							<a href="/">Home</a>
						</li>
                                                <li>
							<a href="/player">Player</a>
						</li>
						<li>
							<a href="/Stock">StockInfo</a>
						</li>
                                                <li>
                                                    {login-menu}
                                                </li>
					</ul>
					
				</div>
				
			</nav>
			
			<div class="row">
				<div class="col-md-6">
				{content}
			</div>
		</div>
	</div>
</div>

    
  </body>
</html>