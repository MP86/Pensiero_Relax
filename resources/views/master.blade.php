<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	@yield('seo')
	
	<link rel="icon" href="../img/favicon.ico">

    <title>Pensiero Relax/@yield('title')</title>
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="../css/tema.css" rel="stylesheet">
    
    <!-- Social CSS -->
    <link href="../css/social.css" rel="stylesheet">
    
    <link href="../css/sociallite.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" 
	rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" 
	rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>

<body>

				
				

    <div class="brand">Pensiero Relax</div>
    <div class="address-bar">I massaggi,
    <br>anche a casa tua! </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Pensiero Relax</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
					<li>
                        <a href="/servizi">Servizi</a>
                    </li>
                    
                    <!-- dropdown -->
                    <li class="dropdown">
                    	<a class="dropdown-toggle" 
                    	id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" 
                    	aria-expanded="true">Massaggi:</a>
                    	
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li>
                        <a href="/shiatsu">Shiatsu</a>
                    </li>
                    <li>
                        <a href="/rilassante">Rilassante</a>
                    </li>
                    </ul>
                    </li>
                    <!-- fine dropdown -->
                    
                    <li>
                        <a href="/contatti">Contatti</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="col-lg-12 text-center">
	
						<audio controls autoplay loop> <!-- autoplay -->
							<source src="../audio/PensieroRelax.mp3" type="audio/mp3">
							il tuo browser non supporta la riproduzione audio
						</audio>
	
	</div>

@yield('content')

		
	    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                
                <div class="social">
                		
                	<ul class="social-network social-circle">
                        
                        <li>
	                        <a class="fb-share-button" href="http://laravel.app/" data-layout="button">
	                        <i class="fa fa-facebook"></i>
	                        </a>
                        </li>
                        
                        <li>
	                        <a href="https://twitter.com/share" class="icoTwitter" title="Twitter">
	                        <i class="fa fa-twitter"></i>
	                        </a>
                        </li>
                        
                        <li>
	                        <a href="https://plus.google.com/share" class="icoGoogle" title="Google +">
	                        <i class="fa fa-google-plus"></i>
	                        </a>
                        </li>
                        
                    </ul>
                		 		
                </div>
                
                </div>
            </div>
        </div>
        
        </div>


	<div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                	<div>
                	
                	<a class="fb-share-button"
	                	 href="http://laravel.app/"
	                	 data-layout="button">
	                	 Condividi
                	<a>
                	
						
					
					<a href="https://twitter.com/share" 
						class="twitter-share-button" data-size="large">
						Tweet
					</a>
					
					
					
					<a class="g-plus" data-action="share" data-annotation="none">
					</a>
	
                	
                </div>
            </div>
    </div>
</div>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <br>
                <br>
                	<img alt="Marchio reggistrato" src="../img/MP.png">
                    <p>Copyright &copy; MP86 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Latest compiled and minified JavaScript -->
	<script
		 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		 integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		 crossorigin="anonymous">
	</script>

    <!-- Script to Activate the Carousel -->
    <script>
		    $('.carousel').carousel({
		        interval: 5000 //changes the speed
		    })
    </script>
    
    		<!-- Sript Facebook -->
    	<div id="fb-root"></div>
				<script>
					  (function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5";
					  fjs.parentNode.insertBefore(js, fjs);
					  }(document, 'script', 'facebook-jssdk'));
				</script>
				
    
    			<!-- Script Twitter -->
    				<script>
    						!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?
							'http':'https';if(!d.getElementById(id))
							{js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
							fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
					</script>
					
					
			<!-- Social G+ -->
					<script src="https://apis.google.com/js/platform.js" async defer>
					  {lang: 'it'}
					</script>
					

</body>

</html>
    