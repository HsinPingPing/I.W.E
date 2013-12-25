<!DOCTYPE html>
<!-- saved from url=(0041)http://calm-scrubland-1840.herokuapp.com/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="http://calm-scrubland-1840.herokuapp.com/docs-assets/ico/favicon.png">

		<title>I.W.E</title>

		<!-- Bootstrap core CSS -->
		<link href="http://calm-scrubland-1840.herokuapp.com/dist/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="http://calm-scrubland-1840.herokuapp.com/carousel.css" rel="stylesheet">
	</head>
	<!-- NAVBAR
	================================================== -->
	<body style="">


    <!-- BLOCK: FB SDK initialization -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        // init the FB JS SDK
        FB.init({
            appId      : "{{ facebook_app_id }}",              // App ID from the app dashboard
            cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
            status     : true,                                 // Check Facebook Login status
            xfbml      : true,                                 // Look for social plugins on the page
            oauth      : true
        });
        // Additional initialization code such as adding Event Listeners goes here
        window.fbLoaded();
    };

    // Load the SDK asynchronously
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        //js.src = "//connect.facebook.net/en_US/all.js";
        // Debug version of Facebook JS SDK
        js.src = "//connect.facebook.net/en_US/all/debug.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- ENDBLOCK: FB SDK initialization -->


		<!-- Carousel 
		================================================== -->
		<div class="navbar-wrapper">
			<div class="container">

				<div class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="http://calm-scrubland-1840.herokuapp.com/index.php">I.W.E</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="http://calm-scrubland-1840.herokuapp.com/MyMenu.html">My Menu</a></li>
								<li><a href="http://calm-scrubland-1840.herokuapp.com/Friends.html">Friends'</a></li>
								<li><a href="http://calm-scrubland-1840.herokuapp.com/Ranks.html">Rank</a></li>
								<li><a href="http://calm-scrubland-1840.herokuapp.com/Catagory.html">Catagory</a></li>
								<button id="my-login-button" class="btn btn-primary">Login with Facebook</button>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>


		<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" style="z-index:1">
			<div class="carousel-inner">
				<div class="item active">
					<img src="pic1.png">
					<div class="container">
						<div class="carousel-caption">
							<h3><font color="white">W.I.E</font></h3>   
							<p class="lead">
							</p><div class="alert alert-info" style="opacity: 0.7"><font color="black" size="3">
									I am XX</font>
							</div>
							<p></p>
						</div>
						<div align="right"><font color="white">Hsu</font></div>
					</div>
				</div>
				<div class="item">
					<img src="pic2.png" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h3><font color="white">XX </font></h3>   
							<p class="lead">
							</p><div class="alert alert-error" style="opacity: 0.7"><font color="black" size="3">
									I am XX</font>
							</div>
							<p></p>
						</div>
						<div align="right"><font color="white">Hsu</font></div>
					</div>
				</div>
				<div class="item">
					<img src="pic3.png" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h3>XX </h3>   
							<p class="lead">
							</p><div class="alert alert-success" style="opacity: 0.7"><font color="black" size="3">
								I am XX</font>
							</div>
							<p></p>
						</div>
						<div align="right"><font color="white">Hsu</font></div>

					</div>
				</div>          
			</div>
			<a class="right carousel-control" href="http://calm-scrubland-1840.herokuapp.com/#myCarousel" data-slide="next"></a>
			<a class="left carousel-control" href="http://calm-scrubland-1840.herokuapp.com/#myCarousel" data-slide="prev"></a>

			</div>
			<!-- /.carousel -->


			<!-- Marketing messaging and featurettes
			================================================== -->
			<!-- Wrap the rest of the page in another container to center all the content. -->
			
			<div class="navbar-wrapper pull-left">
				<div class="container">
					<!-- Profile Area -->
					<div id="my-profile" class="row">
						<div class="col-md-3">
							<!-- Profile Picture -->
							<img id="my-profile-picture" class="img-thumbnail" src="" alt="">
						</div>
						<div class="col-md-9">
							<!-- Profile Information -->
							<dl class="dl-horizontal">
								<dt>Name</dt>
								<dd id="my-profile-name"></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Gender</dt>
								<dd id="my-profile-gender"></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Username</dt>
								<dd id="my-profile-username"></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Facebook ID</dt>
								<dd id="my-profile-facebook-id"></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>

			<div class="container marketing">

				<hr class="featurette-divider">
				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading"> You may like...  <span class="text-muted">It'll blow your mind!</span></h2>
						<p class="lead"> all kinds of food </p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">
				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">Steak <span class="text-muted">Check it out! </span></h2>
						<p class="lead"> </p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">
				<div class="row featurette">
					<div class="col-md-5">
						<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
					<div class="col-md-7">
						<h2 class="featurette-heading">Pizza <span class="text-muted">See it yourself.</span></h2>
						<p class="lead"> </p>
					</div>
				</div>

				<hr class="featurette-divider">
				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">Pasta <span class="text-muted">Check it out! </span></h2>
						<p class="lead"> </p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">
				<div class="row featurette">
					<div class="col-md-5">
						<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
					<div class="col-md-7">
						<h2 class="featurette-heading">Salad <span class="text-muted">See for yourself.</span></h2>
						<p class="lead"> </p>
					</div>
				</div>

				<!-- FOOTER -->
				<footer>
				<p class="pull-right"><a href="http://calm-scrubland-1840.herokuapp.com/#">Back to top</a></p>
				<p>© 2013 JOPINGDLSHI, Inc. · <a href="http://calm-scrubland-1840.herokuapp.com/#">Privacy</a> · <a href="http://calm-scrubland-1840.herokuapp.com/#">Terms</a></p>
				</footer>

			</div><!-- /.container -->


			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="./XX_files/jquery-1.10.2.min.js"></script>
			<script src="./XX_files/bootstrap.min.js"></script>
			<script src="./XX_files/holder.js"></script>
		    <!-- BLOCK: Your script playground -->
    <script id="my-script-playground">
        window.fbLoaded = function(){
            // define the events when login status changed.
            FB.Event.subscribe('auth.login', function(response) {
                // when user has been logged in, this block will be triggered.
                var msg = "You're logged in.";
                $("#my-login-message").html(msg);
                console.log("Your login response:");
                console.log(response);

                // fetch the profile
                fetch_my_profile();
            });

            // define the action when user clicked the login button.
            $("#my-login-button").click(function(){
                FB.login();
            });

            var fetch_my_profile = function () {
                /*
                Fetching profile information.
                For more detail, please vist the following url:

                (Graph API: User documentation)
                https://developers.facebook.com/docs/graph-api/reference/user/
                */
                FB.api('/me', function(response) {
                    var my_name = response.name;
                    var my_gender = response.gender;
                    var my_username = response.username;
                    var my_facebook_id = response.id;

                    $("#my-profile-name").html(my_name);
                    $("#my-profile-gender").html(my_gender);
                    $("#my-profile-username").html(my_username);
                    $("#my-profile-facebook-id").html(my_facebook_id);
                });

                /*
                Fetching profile picture from Facebook.
                For more detail, please visit the following url:

                (Graph API: User/Picture reference)
                https://developers.facebook.com/docs/graph-api/reference/user/picture/
                */
                FB.api('/me/picture?width=250', function(response) {
                    var my_picture_url = response.data.url;
                
                    $("#my-profile-picture").attr('src', my_picture_url);
                });
            };
        };
    </script>
		    <!-- ENDBLOCK: Your script playground -->
		
	</body>
</html>
