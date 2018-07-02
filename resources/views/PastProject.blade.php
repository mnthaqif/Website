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
		<div class="row">
			<div class="col-md-12">
				<div><h2>Our Past Project</h2>There are several projects that have been successfully developed by our company</div>

			</div>
		</div>
	</div>
</section>


<section id="gallery-1" class="content-block section-wrapper gallery-1">
	<div class="container">


		<!-- /.gallery-filter -->

		<div class="row" align="center">

			<div class="well">
			<div id="isotope-gallery-container">

				<div class="col-md-3 col-sm-6 gallery-item-wrapper artwork creative">
					<div class="gallery-item">
						<div class="gallery-thumb">
							<img src="img/works/ekontrak.png" class="img-responsive" >
							<div class="image-overlay"></div>
							<a href="img/works/ekontrak.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
							<a href="http://kontrak.mppg.gov.my/eSebutHarga/Default.aspx" class="gallery-link"><i class="fa fa-link"></i></a>
							<br>
							<div>Sistem Pengurusan Kontrak <br>(Majlis Perbandaran Pasir Gudang)</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-item-wrapper nature outside">
					<div class="gallery-item">
						<div class="gallery-thumb">
							<img src="img/works/iperolehan.png" class="img-responsive" >
							<div class="image-overlay"></div>
							<a href="img/works/iperolehan.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
							<a href="http://iperolehan.mpkluang.gov.my" class="gallery-link"><i class="fa fa-link"></i></a>
							<br>
							<div>Sistem i-Perolehan <br>(Majlis Perbandaran Kluang)</div>
						</div>

					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-item-wrapper photography artwork">
					<div class="gallery-item">
						<div class="gallery-thumb">
							<img src="img/works/eperolehan.png" class="img-responsive"alt="Sistem e-Perolehan">
							<div class="image-overlay"></div>
							<a href="img/works/eperolehan.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
							<a href="http://eperolehan.mbip.gov.my" class="gallery-link"><i class="fa fa-link"></i></a>
							<br>
							<div>Sistem e-Perolehan <br>(Majlis Bandaraya Iskandar Puteri)</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
		<hr class="margin-bottom-50">

	</div>
</section>



@include('footer')
