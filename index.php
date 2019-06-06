<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/titlelogo.ico" />
	<title>Maersk Line</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<!-- this below for card animated hover -->
	<script src="https://cdnjs.cloudflare.com/ajax/lib/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/fontawesome.min.css" rel="stylesheet">
	<!-- scroll up button -->
	<script src="main.js"></script>

	
<script>	
/* start-card hover function*/
$(document).ready(function(){
	$('.card').hover(
	//trigger when mouse hover
	function(){
		$(this).animate({
			marginTop: "-=1%",
		},200);
	},
	//trigger when mouse out 
	function(){
		$(this).animate({
			marginTop: "0%"
		},200);
	}
	
	);
});
</script>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php"><img src="img/mainlogo.png"></a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">



			<div class="dropdown">
  			<a href="index.php"><button class="dropbtn" href="#">Home</button></a>
			</div>

			<div class="dropdown">
  			<a href="login.php"><button class="dropbtn" href="#">Login</button></a>
			</div>
			</ul>
		</div>
	</div>
</nav>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
		<li data-target="#slides" data-slide-to="3"></li>
		<li data-target="#slides" data-slide-to="4"></li>
	</ul>
	<div class="carousel-inner">

		<div class="carousel-item active">
			<img src="img/bg1.png">
			<div class="carousel-caption ">
				<h1 style="font-size:35px;">Shipping Services</h1>
				<h5>Maersk has solutions that offer both small and large businesses the opportunity to grow. </h5>
				
				<a href="" class="btn btn-outline-light btn-lg "  >VIEW DEMO</a>
				<button type="button" class="btn btn-primary btn-lg">Login</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/bg4.png">
		</div>
		<div class="carousel-item">
			<img src="img/bg5.png"> 
		</div>
		<div class="carousel-item">
			<img src="img/bg6.png">
		</div>
		<div class="carousel-item">
			<img src="img/bg7.png">
		</div>

	</div>
</div>




<!--- Jumbotron -->
<div class="container-fluid ">
<div class="row jumbotron">
	<div class="col-12">
		<p class="justify">Regardless of your industry, your commodity, or your key markets, Maersk has solutions that offer both small and large businesses the opportunity to grow. We serve our customers with frequent departures on all major trade lanes and inland services for a true end-to-end experience.</p>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid  my-3">
<div class="row Welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Solutions</h1>
		<p class="lead">From the farm to your refrigerator, or the factory to your wardrobe, A.P. Moller - Maersk is developing solutions that meet customer needs from one end of the supply chain to the other.</p>
	</div>
</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid mt-3">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<img class="img1" src="img/item1.png">
		<h4>Shipping and Cargo Services</h4>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<img class="img1" src="img/item2.png">
		<h4>Supply Chain Services</h4>
		
	</div>
	<div class="col-sm-12 col-sm-6 col-md-4">
		<img class="img1" src="img/item3.png">
		<h4>Freight Forwarding</h4>
	</div>
</div>
<hr class="my-4" />
</div>

<!--- Two Column Section -->
<div class="container-fluid mt-3">
<div class="row padding">
	<div class="col-md-12 col-lg-6">
		<h2>Integrated transport and logistics</h2>
		<p class="justify">True industry-leading customer experience isn’t a vision. It’s a passion. A passion for our customers whose business is dependent on moving the right products to the right market at the right time.</p>
		<p class="justify">As Maersk is striving to be a true integrator of container logistics connecting and simplifying our customers’ supply chain through global end-to-end solutions we just made our customers´ life a lot easier. We are able to manage the entire product journey for them including Inland Services, Customs House Brokerage, Ocean Freight, Warehouse Management and Distribution to name but a view.</p>
		<br>
<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Learn More </button>
	</div>
	<div class="col-lg-6">
		<img src="img/sideimage.jpg" class="img-fluid">
	</div>
</div>
</div>
<hr class="my-4"/>



<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Integrated transport and logistics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="justify">Last year, when A.P. Moller - Maersk announced its intention to become an integrated container shipping, logistics and ports company, 
		it broke with a ­long-standing principle of operating each business as a stand-alone company. By integrating the businesses and working 
		together, synergies like the case in Salalah and others across the division, are expected to improve the division's return on invested 
		capital by two percentage points over a period of three years starting in 2017. "Last year's financial result was unsatisfactory, and 
		we are in a recovery phase. The result from the first quarter shows that we are on the right track. The same goes for the second quarter 
		where we are beginning to see some cost-synergies and collaboration wins start to kick in," says Jakob Stausholm, Chief Financial, Strategy 
		& Transformation Officer at A.P. Moller - Maersk.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
			<div class="carousel-caption">
				<h1  style="font-size:25px;">Connecting global trade</h1>
				<h5>We have developed an unrivalled shipping expertise to offer you a range of services to connect you to key markets across the globe.</h5>
			</div>
		</div>
	</div>
</figure>
<hr class="my-4"/>

  
<!--- content -->
<div class="container-fluid mt-3">
<div class="row Welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Global presence</h1>
	</div>
	<hr>
</div>
</div>

<!--- Cards -->
<div class="container-fluid mt-3 ">
<div class="row padding">
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top sizeimg" src="img/asia.jpg">
			<div class="card-body">
				<h4 class="card-title">Shipping from Asia</h4>
				<p class="card-text justify">Asia's rise as an economic power has made it the most dynamic region in the world. Maersk is active across the continent. From China to Kazakhstan, Qatar, India and Vietnam, Maersk supports wealth through long-term investments and the transfer of critical knowledge to local workforces. </p>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalScrollable1">Learn More </button>				
			</div>
		</div>
	</div>
		<div class="col-md-4">
		<div class="card">
			<img class="card-img-top sizeimg" src="img/shippingfrommalaysia.jpg">
			<div class="card-body">
				<h4 class="card-title">Shipping from Africa</h4>
				<p class="card-text justify">After more than a century of doing business in Africa, and with operations in almost every country across the continent, we can truly say “We know Africa”. Our long experience, extensive presence and local knowledge puts us in a unique position to improve its infrastructure accommodate economic growth.</p>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalScrollable2">Learn More </button>								
			</div>
		</div>
	</div>
		<div class="col-md-4">
		<div class="card">
			<img class="card-img-top sizeimg" src="img/shippingfromeurop.jpg">
			<div class="card-body">
				<h4 class="card-title">Shipping From Europe</h4>
				<p class="card-text justify">With Maersk headquarters located in Denmark and APM Terminals in the The Netherlands, we naturally have a keen focus on our service offerings in Europe but our activities are widespread throughout Europe, since as much as 40% of Intra-EU trade relies on sea transport.</p>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalScrollable3">Learn More </button>				
			</div>
		</div>
	</div>

</div>
</div>

<!-- Modal-card1 -->
<div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Shipping From Asia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="justify">We do more than just carry cargo. We propel the ambitions of businesses of all sizes – from conglomerates to corner shops. 
		With global experience, local expertise and a full inland service network that connects our ocean fleet with inland destinations, we can help 
		to make your business ambitions come to life. Welcome aboard. Asia's rise as an economic power has made it the most dynamic region in the world.
		Maersk is active across the continent, operating 10 business units. From China to Kazakhstan, Qatar, India and Vietnam, Maersk supports wealth 
		through long-term investments and the transfer of critical knowledge to local workforces.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal-card2 -->
<div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Shipping from Africa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="justify">Introducing our fast and reliable shipping services from Africa to Asia. Maersk is stable and reliable, and better equipped 
		to provide you with a consistent shipping service, ensuring you’re able to plan your transport chain from Africa to Asia without the stress so 
		common with other services.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal-card3 -->
<div class="modal fade" id="exampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Shipping from Europe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="justify">Introducing our fast and reliable shipping services from Europe to Asia. Maersk is stable and reliable, and better equipped 
		to provide you with a consistent shipping service, ensuring you’re able to plan your transport chain from Europe to Asia without the stress so 
		common with other services.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--- Connect -->
<div class="container-fluid  mt-3">
<div class="row text-center padding">
	<div class="col-12">
		<h2>Connect</h2>
	</div>
	<div class="col-12 social padding">
		<a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook"></i></a>
		<a href="#" data-toggle="tooltip" title="twitter"><i class="fab fa-twitter"></i></a>
		<a href="#" data-toggle="tooltip" title="Google-Plus"><i class="fab fa-google-plus-g"></i></a>
		<a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram"></i></a>
		<a href="#" data-toggle="tooltip" title="Youtube"><i class="fab fa-youtube"></i></a>
</div>
</div>
</div>
 <!--- Footer -->
<footer class="container-fluid">
            
                <div class="row text-center">
                    <div class="col-md-4" >

                        <img src="img/footerlogo1.png">
                        <hr class="light">
                        <p> +601-3-4410076</p>
                        <p>  maerks.line@outlook.com</p>
                        <p>  Subang Jaya, Selangor, Malaysia</p>
                    </div>
                    <div class="col-md-4">
                        
                        <h5>Openning Hours</h5>
                        <hr class="light">
                        <p>Mon-Thu 9:00am-17:15pm</p>
                        <p>Fri 9:00am-17:00pm</p>
                        <p>Closed Time: 12:30-13:30</p>
                        
                    </div>
                    <div class="col-md-4">
                       
                        <h5>Solution</h5>
                        <hr class="light">
                        <p>Shipping and cargo services</p>
                        <p>Supply chain Services</p>
						<p>Fright forwarding</p>
                    </div>
                </div>
           <!--- Last-Footer -->
                <div class="col-12">
                    <hr class="light-100">
                    <h5 style="text-align: center;">Maersk Line Container Management System © 2019</h5>
                </div>
         
        <img class="scroll-to-top-link" src="img/move.png" alt="" />
</footer>
</body>
</html>













