@extends('masterpage')


@include('navbar')


<section id="inner-headline">
	<div class="container1">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">INTEGRASYS SOLUTION SDN. BHD.</h2>
			</div>
		</div>
	</div>
</section>

<section id="content">

	<div class="container">
		<div class="well">
			<div class="row">
				<div class="col-md-12">
					<div>
						<h2>How to Reach Us</h2>
						<i class="right"></i> Integrasysy Solution Sdn. Bhd.<br>
						<i class="right"></i> No.4, Block A Arked Pekan Francais Mukim Pulai, 81300 Skudai, Johor Darul Takzim<br>
						<i class="right"></i> 07-5504702<br>
						<i class="right"></i> <a href="integrasys.my">integrasys.my</a><br>

						<i class="right"></i> faizalbahri@integrasyssolution.com<br>
						<i class="right"></i> <a href="https://www.facebook.com/IntegraSys.Solution">fb.IntegraSys.Solution</a>


					</div>

				</div>
			</div>
		</div>
		@if(Session::has('mesej'))
			<div class="alert alert-success">
				{{Session::get('mesej')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
		<br>



		<div class="row">
			<div class="col-md-6">
				<div class="well well-lg">

					<div class="contact-form">

						<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->



						<form class="form-horizontal" role="form" action="{{url('Contact')}}" method="POST">
							{!! csrf_field() !!}
							<h3>Contact Form</h3>

							<p>Fill in the contact form :</p>
							<hr></hr>
							<div class="form-group">
								<input type="text" class="form-control"
								placeholder="Full Name" id="name"  name="name" required
								data-validation-required-message="Please enter your name" />
							</div>


							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email"
								id="email" name="email" required
								data-validation-required-message="Please enter your email" />
							</div>

							<div class="form-group">
								<input type="text" class="form-control"
								placeholder="Subject" id="subject"  name="subject" required
								data-validation-required-message="Please enter your subject" />
							</div>

							<div class="form-group">
								<textarea rows="10" cols="100" class="form-control"
								placeholder="Message" id="message" name="message" required
								data-validation-required-message="Please enter your message" minlength="5"
								data-validation-minlength-message="Min 5 characters"
								maxlength="999" style="resize:none"></textarea>
							</div>

							<button type="submit" class="btn btn-success wow fadeInUp pull-right">Send</button><br />
						</div>
					</form>
				</div>
			</div>


			<div class="col-md-6">
				<div class="well well-lg">
					<div id="dvmap" style="width:100%;height:80%"></div>

					<script>
					// window.myMap = function () {
					// var mapOptions = {
					//     center: new google.maps.LatLng(1.564366,103.61358810000002),
					//     zoom: 100,
					//     mapTypeId: google.maps.MapTypeId.ROADMAP
					//
					// }
					// var map = new google.maps.Map(document.getElementById("map"), mapOptions);
					//
					//
					// }

					window.onload = function () {
						var mapOptions = {
							//give latitude and long
							center: new google.maps.LatLng("1.564366", "103.61358810000002"),
							zoom: 19,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};
						var infoWindow = new google.maps.InfoWindow();
						var map = new google.maps.Map(document.getElementById("dvmap"), mapOptions);
						//give latitude and long
						var myLatlng = new google.maps.LatLng("1.564366", "103.61358810000002");
						var marker = new google.maps.Marker({
							position: myLatlng,
							map: map,
							title: "Disini"
						});
					}

					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChghgnhKdaM8Jck_aLVrLysZvu0JzYW7c&callback=myMap "></script>

				</div>
			</div>
		</div>

		<hr class="margin-bottom-50">
	</div>
</section>


@include('footer')
