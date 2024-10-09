@include('components.head')
@include('components.nav')
@include('components.sidebar')

<style>
	.delete_icon
	{
		position: absolute;
		top: 0;
		right: 0;
		padding: 2%;
		border-left: solid 1px red;
		border-bottom: solid 1px red;
		background: red;
		color: white;
		border-bottom-left-radius: 5px;
		border-top-right-radius: 5px;
	}
</style>
<main>
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<h1>Social Media Settings</h1>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-2 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<a href="#" class="delete_icon">
							<i class="fa fa-trash fa-lg"></i>
						</a>
						<a href="#">
							<img src="img/social_media/facebook.png" height="50px" width="50px">
							<!-- <i class="fa fa-facebook-square fa-3x"></i> -->
							<h5 class="mt-2 text-capitalize"> Facebook </h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-2 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<a href="#" class="delete_icon">
							<i class="fa fa-trash fa-lg"></i>
						</a>
						<a href="#">
							<img src="img/social_media/instagram.png" height="50px" width="50px">
							<!-- <i class="fa fa-instagram fa-3x"></i> -->
							<h5 class="mt-2 text-capitalize"> Instagram </h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-2 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<a href="#" class="delete_icon">
							<i class="fa fa-trash fa-lg"></i>
						</a>
						<a href="#">
							<img src="img/social_media/snapchat.png" height="50px" width="50px">
							<!-- <i class="fa fa-snapchat-square fa-3x"></i> -->
							<h5 class="mt-2 text-capitalize"> Snapchat </h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-2 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<a href="#" class="delete_icon">
							<i class="fa fa-trash fa-lg"></i>
						</a>
						<a href="#">
							<img src="img/social_media/whatsapp.png" height="50px" width="50px">
							<!-- <i class="fa fa-whatsapp fa-3x"></i> -->
							<h5 class="mt-2 text-capitalize"> Whatsapp </h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-2 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<a href="#" class="delete_icon">
							<i class="fa fa-trash fa-lg"></i>
						</a>
						<a href="#">
							<img src="img/social_media/linkedin.png" height="50px" width="50px">
							<h5 class="mt-2 text-capitalize"> Linkedin </h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-2 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<a href="#">
							<i class="fa fa-plus-square fa-3x text-success"></i>
							<h5 class="mt-2 text-capitalize"> Add New </h5>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>


@include('components.footer')
