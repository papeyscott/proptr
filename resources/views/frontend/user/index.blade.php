@extends('layouts.master')

@section('title')
	PropTR | Home
@endsection()

@section('content')
		
		<div class="slider-home">
	<img src="{{  asset('/src/images/banner1.jpg') }}">
	   <div class="inner-slider">
 		<div class="container">
			<h1>The 1st. Global Real Estate Management <br />& </br> Service Providers' Networking Platform </h1>
		</div>
		</div>
</div>

<div class="botom-slider">
<div class="container">
	<div class="filters">

	<div class="tab-men pops"><h3>menu <img src="{{  asset('/src/images/ic_menu.png') }}"></h3>

			  <ul class="filter-ul">
			<li><a href="#">Rent</a></li>
			<li><a href="#">Rent To Own</a></li>
			<li><a href="#">Sales</a></li>
			<li><a href="#">Lease</a></li>
			<li><a href="#">Mortgage</a></li>
			<li><a href="#">foreclosure</a></li>
			<li><a href="#">Property Development</a></li>
			<li><a href="#">Property Requests</a></li>
			<li><a href="#">Service Providers</a></li>
		  </ul>
</div>		  
		  <div class="ful-search">
		  <form>
		  <span class="locati"><input class="location-lank" type="text" placeholder="Enter Location or Landmark" /> <i class="fa fa-map-marker" aria-hidden="true"></i></span>
				<select class="first-sel"><option>Country</option> <option>country-1</option></select>
				<select class="second-sel"><option>Province/State</option> <option>Province/State-1</option></select>
				<select class="third-sel"><option>Country/Municipal/LGA</option> <option>Country/Municipal/LGA-1</option></select>
				<select class="four-sel"><option>Type of Property</option> <option>Type of Property-1</option></select>
				<select class="five-sel"><option>Budget</option> <option>Budget-1</option></select>
			  <input type="button"  value="SEARCH"/>
		  </form>
		  </div>

	
	</div>
</div>
</div>



<div class="our-servic">
	<div class="container">
	  <div class="row">
	  <div class="heading-all">
	  <h2>Our Services</h2>	 
	  </div>
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{  asset('/src/images/serv1.png') }}"/>
				</div>
				<h3><a href="#">Real Estate Networking</a></h3>
				<p>This is the first of its kind. Our platform gives you an online/realtime opportunity to Network and add your friends and associates in the real estate industry globally and also interact with property listings on one another's user timelines</p>

			</div>
		</div>
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{  asset('/src/images/serv2.png') }}" />
				</div>
				<h3><a href="#">Property Management</a></h3>
				<p>A Platform like a Property Management Software. Ensuring that you can capture details of your Property portfolio and also manage them on a single platform. So while on the go, you have access to all your property information</p>


			</div>
		</div>
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{ asset('/src/images/serv3.png') }}" />
				</div>
				<h3><a href="#">Tenants Management</a></h3>
				<p>Ensuring that you are able to keep the secure details of your tenants and having access to such information is very critical, giving you an opportunity to serve as a Tenants Management Software in one location. In addition, giving you details of tenants,  rents and lease durations etc </p>

			</div>
		</div>
		
		
		
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{ asset('/src/images/serv4.png') }}" />
				</div>
				<h3><a href="#">Service Providers</a></h3>
				<p>The business of Real Estate wouldnt be complete without having Service Providers. Whether you are looking for Archtechects in Baltimore or Real Estate Flippers in Rocklin, this platform gives you an opportunity to access them and Network</p>

			</div>
		</div>
		
		
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{ asset('/src/images/serv5.png') }}" />
				</div>
				<h3><a href="#">Property Income Management</a></h3>
				<p>The income generated from Real Estate is easier when its managed in a Property Income Management Software. Here, you can also securely manage your income from real estate without anyone havong access to such information. Only you has access to such private information </p>

			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
			<img src="{{ asset('/src/images/serv6.png') }}" />
				</div>
				<h3><a href="#">Property Expenses Management</a></h3>
				<p>You can only capture the true value of your Real Estate transactions when you take careful consideration of all expenses incurred in your business. Our platform also gives you this opportunity to ensure that as you make this expenses, you can capture them immediately</p>

			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{ asset('/src/images/serv7.png') }}" />
				</div>
				<h3><a href="#">Real Estate Groups</a></h3>
				<p>The whole essence of business is to ensure people can interact in a cohesive and structured manner. Users on this platform can create Real Estate industry focused groups and also join existing groups for collaboration and information sharing</p>

			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
			<img src="{{ asset('/src/images/serv8.png') }}" />
				</div>
				<h3><a href="#">Post Curriculum Vitae</a></h3>
				<p>This is an industry platform, so seekers of employment opportunities are given the proviledge to share their Curriculum Vitae(s) with the hope of securing employment from Employers that post vacancies too</p>

			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="inner-services">
			<div class="for-img">
				<img src="{{ asset('/src/images/serv9.png') }}" />
				</div>
				<h3><a href="#">Advertise</a></h3>
				<p>Here, you can give your Properties, Products and Services the necessary boost by advertising on this platform. So you take control of your advert spend, you only get billed when someone interacts with your adverts through our Pay Per Click (PPC), Pay Per Impression (PPI) and Pay Per Action (PPA) advertising model</p>

			</div>
		</div>

		
	  </div>
	</div>
</div>






<div class="featur-property">
	<div class="container">
				 	 <div class="heading-all">
				 		 <h2>Featured Properties Across The Globe</h2>      
					</div> 
						 <div id="horizontalTab">
								<div class="tab-men tabas-2"><h3>menu <img src="{{ asset('/src/images/ic_menu.png')}}"></h3>
									  <ul class="resp-tabs-list">
								        <li>All</li>
								        <li>Rent</li>
								        <li>Rent To Own</li>
								        <li>Sales</li>
								        <li>Lease</li>
								        <li>Mortage</li>
								        <li>Foreclosure</li>
								        <li> Property Development</li>
								        <li>Property Request</li>
								        <li>Service Providers</li>
									  </ul>
								</div>
			


<div class="resp-tabs-container">
	<div class="tab1 block-in">
			 <div class="owl-carousel feature-carousel">
		            <div class="owl-item">
						<div class="inner-feature">
						  <img src="{{ asset('/src/images/feature-1.jpg') }}" />
						  	<h3><a href="#">Hall/Event Centre</a></h3>
						 			 <p>Vacant | For Sale <br /><span><i class="fa fa-map-marker" aria-hidden="true"></i> Abuja (FCT), Nigeria</span></p>
								 <div class="price-number">900,000,000.00 (NGN)</div>
						 	 <a class="know-more" href="#">KNOW MORE</a>
						</div>
				    </div>

					 <div class="owl-item">
						<div class="inner-feature">
						 	<img src="{{ asset('/src/images/feature-2.jpg') }}" />
						 		 <h3><a href="#">Duplex(es)</a></h3>
									  <p>Vacant | For Sale <br /><span><i class="fa fa-map-marker" aria-hidden="true"></i> Abuja (FCT), Nigeria</span></p>
						  		<div class="price-number">900,000,000.00 (NGN)</div>
						 		 <a class="know-more" href="#">KNOW MORE</a>
						</div>
					</div>

	           		<div class="owl-item">
						<div class="inner-feature">
							  <img src="{{ asset('/src/images/feature-3.jpg') }}" />
								  <h3><a href="#">Hospital</a></h3>
								  <p>Vacant | For Sale <br /><span><i class="fa fa-map-marker" aria-hidden="true"></i> Abuja (FCT), Nigeria</span></p>
							 	<div class="price-number">900,000,000.00 (NGN)</div>
								  <a class="know-more" href="#">KNOW MORE</a>
						</div>
					</div>

					 <div class="owl-item">
						<div class="inner-feature">
						  <img src="{{ asset('/src/images/feature-1.jpg') }}" />
						  	<h3><a href="#">Hall/Event Centre</a></h3>
						 			 <p>Vacant | For Sale <br /><span><i class="fa fa-map-marker" aria-hidden="true"></i> Abuja (FCT), Nigeria</span></p>
								 <div class="price-number">900,000,000.00 (NGN)</div>
						 	 <a class="know-more" href="#">KNOW MORE</a>
						</div>
				    </div>

				     <div class="owl-item">
						<div class="inner-feature">
						 <img src="{{ asset('/src/images/feature-1.jpg') }}" />
						  	<h3><a href="#">Hall/Event Centre</a></h3>
						 			 <p>Vacant | For Sale <br /><span><i class="fa fa-map-marker" aria-hidden="true"></i> Abuja (FCT), Nigeria</span></p>
								 <div class="price-number">900,000,000.00 (NGN)</div>
						 	 <a class="know-more" href="#">KNOW MORE</a>
						</div>
				    </div>



<!--<div class="owl-controls">
        <div class="owl-nav">
            <div class="owl-prev">prev</div>
            <div class="owl-next">next</div>
        </div>
        <div class="owl-dots">
            <div class="owl-dot active"><span></span></div>
            <div class="owl-dot"><span></span></div>
            <div class="owl-dot"><span></span></div>
        </div>
    </div>-->
					
</div>
	</div>



</div> 
</div>

</div>
</div>
		  
		  
		  


<div class="testimonl">
	<div class="container">
			  <div class="heading-all">
				  <h2>Testimonials</h2>
		   	  </div>
					  
			<div class="owl-carousel testimonial-carousel">
           		<div class="owl-item">
					<div class="inner-test">
										 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, 
												by injected humour, or randomised words which don't look even slightly believable. 
											If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
						<div class="auther-details">
								<img src="{{ asset('/src/images/auther-1.png') }}" />
								<p>Nick Rogers</p>
								<span>Photographer</span>
						</div>
					</div>
			 	</div>
           </div>		
	</div>
</div>
 
 
 
			 	<div class="Our_partner">
						<div class="container">
				 			 <div class="heading-all">
					 				 <h2>Our partner's</h2>
			   	 			 </div>
							   	  	<div class="oartnes">
							   	  		<ul>
								   	 		 <li>
												<img src="{{ asset('/src/images/partner-1.png') }}" />
											</li>
											<li>
												<img src="{{ asset('/src/images/partner-2.png') }}" />
											</li>
											<li>
												<img src="{{ asset('/src/images/partner-3.png') }}" />
											</li>
											<li>
												<img src="{{ asset('/src/images/partner-4.png') }}" />
											</li>
											<li>
												<img src="{{ asset('/src/images/partner-1.png') }}" />
											</li>
										</ul>
							   	 	</div>
				  
						</div>
				</div>



</div>

@endsection