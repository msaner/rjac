<!-- include adds doctype, head and page header -->
<?php include "global/header.php"; ?>

<!-- page body -->
<main>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
			<div class="item active">
                <img src="images/home-slide-1.jpg" alt="ask how you can get up to 20% off area yoga studios and gyms">
            </div>
            <div class="item">
                <img src="images/home-slide-2.jpg" alt="get 10% off your first visit if you schedule an appointment before october 31 2014">
            </div>
            <div class="item">
                <img src="images/home-slide-3.jpg" alt="we are dedictated to your comfort. visit us today.">
            </div>
        </div>
            
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
	</div>    
        
    <div class="content-container">
		<div class="content-box blue-boxes">
			<h2>Stop The Pain</h2>
            <div>
                <img src="images/home-neck-pain.jpg" alt="a woman holding her shoulder in pain, dont let this be you" class="img-float-left">
                <p>Massage Therapy</p>
                <p>Core Exercises</p>
                <p>Chiropractic Adjustment</p>
                <p>Everyone person and every problem area is different which is why we offer a variety of treatment options just for you.</p>
            </div>
            <a href="treatments.php" class="btn btn-primary">Learn More</a>
        </div>
        
        <div class="content-box blue-boxes">
            <h2>Fitness News</h2>
            <div>
                <p>15 Running Tips You Need to Know</p>
                <p>10 Mistakes That Make Cravings Worse</p>
                <p>14 Slimming Secrets from America’s Top Spas</p>
                <p>4 Exercises to Beat a Fitness Plateau</p>
           </div>
            <a href="http://news.health.com/?tag=diet,exercise,gym,workout,weight%20loss,move%20of%20the%20week,obesity,sugar,fitness%20gear,gear%20guide,running,yoga,pilates,cleanse,fitsugar,Feel%20Great%20Weight,Tina%20Haupert,injury,race" target="_blank" class="btn btn-primary">More Articles</a>
        </div>
        
        <div class="content-box blue-boxes">
            <h2>Join Our VIP Club</h2>
            <div>
                <img src="images/home-vip.jpg" alt="a group picture of our happy VIP club members." class="img-float-left">
                <p>Quick Chart&trade;</p>
                <p>Shorter Wait Times</p>
                <p>VIP Only Discounts</p>
                <p>Our RJAC Very Important Patient Club members enjoy great perks that make office visits better than ever!</p>
            </div>
            <a href="vip.php" class="btn btn-primary">Join Today</a>
        </div>  
    </div>
    
    <!-- Patient testimonial ticker -->
    <?php include "global/testimonials.php"; ?>
</main>

<!-- include adds page footer and closing body & html tags -->
<?php include "global/footer.php"; ?>