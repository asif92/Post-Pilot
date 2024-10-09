@include('components.head')
@include('components.nav')
@include('components.sidebar')

<style>
	#calendar {
/*		max-width: 1100px;*/
/*		margin: 0 auto;*/
	}
	.dropdown-item.active
	{
		background-color: #aab2b7;
		color: #000000;
	}
	#preview_post img
	{
		max-width: 100%;
	}
	#validate_title
	{
		display: none;
	}
	#add_new_plan_modal .modal-dialog 
	{
		max-width: 95%;
		height: 100%;
		width: 95%;
	}
	#add_new_plan_modal .modal-content
	{
		height: 100%;
		width: 100%;
	}
	.border-light
	{
		border: 1px solid #d7d7d7 !important;
	}
	#fb_post_type_icon_wrapper,
	#instagram_post_type_icon_wrapper
	{
		cursor: pointer;
	}
	#disabled_fb_handler,
	#disabled_instagram_handler
	{
		cursor: pointer;
		opacity: 0.5;
	}
	#fb_handler,
	#instagram_handler
	{
		cursor: pointer;
		opacity: 1;
	}

	.social_media_wrapper
	{
		position: absolute;
	}
	.post_type_icon_wrapper
	{
		position: absolute;
		bottom: -9px;
		right: -9px;
		padding: 0px 3px;
		background: #ffffff;
		border-radius: 50%;		
	}
	.post_type_icon
	{
		height: 12px;
		width: 12px;
	}


</style>

<main>
    <div class="container-fluid">
        <!-- <div class="row">
			<div class="col-12">
				<h1>Social Media Planning</h1>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-12">
				<div id='calendar'></div>
			</div>
		</div>
	</div>
</main>

<!-- Add new plan Modal -->
<div class="modal fade" id="add_new_plan_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_plan_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_new_plan_modal_label">Create new post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                	<div class="col-7">


                		<div class="row mb-4" style="margin-bottom: 25px;">
	                		<div class="col-12 d-flex">
	                			<!-- facebook -->
	                			<div>
		                			<div class="social_media_wrapper" id="disabled_fb_handler">
										<img src="img/social_media/facebook.png" height="25" width="25">
									</div>
	                			</div>
	                			<div>
									<div class="social_media_wrapper" id="fb_handler">
										<img src="img/social_media/facebook.png" height="25" width="25">
										<div class="post_type_icon_wrapper" id="fb_post_type_icon_wrapper">
											<img src="img/social_media/post.png" class="post_type_icon" id="fb_post_type_icon">
										</div>
									</div>
									<div class="dropdown ml-3" id="fb_dropdown">
										<button class="btn btn-default btn-sm border border-light bg-light dropdown-toggle px-3 py-0 ml-3" id="fb_dropdown_button" type="button" data-toggle="dropdown" aria-expanded="false">
											Post
										</button>
										<div class="dropdown-menu" id="fb_dropdown_menu">
											<a class="dropdown-item active" href="#">
												<img src="img/social_media/post.png" class="mr-2" height="15" width="15">
												Post
											</a>
											<a class="dropdown-item" href="#">
												<img src="img/social_media/reels.png" class="mr-2" height="15" width="15">
												Reels
											</a>
											<a class="dropdown-item" href="#">
												<img src="img/social_media/story.png" class="mr-2" height="15" width="15">
												Story
											</a>
										</div>
									</div>
	                			</div>

	                			<!-- instagram -->
	                			<div class="ml-5" style="margin-bottom: 25px;">
		                			<div class="social_media_wrapper" id="disabled_instagram_handler">
										<img src="img/social_media/instagram.png" height="25" width="25">
									</div>
	                			</div>
	                			<div>
									<div class="social_media_wrapper" id="instagram_handler">
										<img src="img/social_media/instagram.png" height="25" width="25">
										<div class="post_type_icon_wrapper" id="instagram_post_type_icon_wrapper">
											<img src="img/social_media/post.png" class="post_type_icon" id="instagram_post_type_icon">
										</div>
									</div>
									<div class="dropdown ml-3" id="instagram_dropdown">
										<button class="btn btn-default btn-sm border border-light bg-light dropdown-toggle px-3 py-0 ml-3" id="instagram_dropdown_button" type="button" data-toggle="dropdown" aria-expanded="false">
											Post
										</button>
										<div class="dropdown-menu" id="instagram_dropdown_menu">
											<a class="dropdown-item active" href="#">
												<img src="img/social_media/post.png" class="mr-2" height="15" width="15">
												Post
											</a>
											<a class="dropdown-item" href="#">
												<img src="img/social_media/reels.png" class="mr-2" height="15" width="15">
												Reels
											</a>
											<a class="dropdown-item" href="#">
												<img src="img/social_media/story.png" class="mr-2" height="15" width="15">
												Story
											</a>
										</div>
									</div>
	                			</div>
	                		</div>
                		</div>

                		<div class="row">                			
                			<div class="col-12 mb-2">
								<input type="text" class="form-control rounded-sm" id="plan_title_field" placeholder="Please enter title" required>
								<div id="validate_title" class="invalid-feedback">
									Please provide a valid title
								</div>
                			</div>
                			<div class="col-12">
								<textarea id="add_new_plan_description"></textarea>
                			</div>

                			<!-- global presets -->
                			<!-- <div class="col-12">
								<div class="border-light mt-2">
									<div class="rounded-sm d-flex justify-content-between px-2 py-2">	
										<p class="mb-0 text-left">
											<i class="iconsminds-gear" style="font-size: 20px;"></i>
											<strong>Global presets</strong>
										</p>
										<div class="text-right">
											<div class="d-flex align-items-center">
												<strong class="mr-2">Auto Publish</strong>
												<i class="iconsminds-information" style="font-size: 15px;" data-toggle="tooltip" data-placement="top" title="Publish this post automatically on the socila media."></i>
												<div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1">
													<input class="custom-switch-input" id="switchPublish" type="checkbox" checked>
													<label class="custom-switch-btn" for="switchPublish"></label>
												</div>
												<a data-toggle="collapse" href="#global_presets_collapse" role="button" aria-expanded="false" aria-controls="global_presets_collapse">
													<i class="iconsminds-arrow-down-in-circle" style="font-size: 20px;"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="collapse multi-collapse" id="global_presets_collapse">
										<div class="card card-body">
											Global presets will be displayed here.
										</div>
									</div>
								</div>
                			</div> -->


							<!-- facebook presets -->
							<div class="col-12" id="facebook_presets_wrapper">
								<div class="border-light mt-2">
									<div class="rounded-sm d-flex justify-content-between px-2 py-2">
										<p class="mb-0 text-left">
											<i class="iconsminds-facebook" style="font-size: 20px;"></i>
											<strong>Facebook presets</strong>
										</p>
										<p class="mb-0 text-right">
											<a data-toggle="collapse" href="#facebook_presets_collapse" role="button" aria-expanded="false" aria-controls="facebook_presets_collapse">
												<i class="iconsminds-arrow-down-in-circle" style="font-size: 20px;"></i>
											</a>
										</p>
									</div>
									<div class="collapse multi-collapse" id="facebook_presets_collapse">
										<div class="card card-body">
											Facebook presets will be displayed here.
										</div>
									</div>
								</div>
							</div>

							<!-- instagram presets -->
							<div class="col-12" id="instagram_presets_wrapper">
								<div class="border-light mt-2">
									<div class="rounded-sm d-flex justify-content-between px-2 py-2">
										<p class="mb-0 text-left">
											<i class="iconsminds-instagram" style="font-size: 20px;"></i>
											<strong>Instagram presets</strong>
										</p>
										<p class="mb-0 text-right">
											<a data-toggle="collapse" href="#instagram_presets_collapse" role="button" aria-expanded="false" aria-controls="instagram_presets_collapse">
												<i class="iconsminds-arrow-down-in-circle" style="font-size: 20px;"></i>
											</a>
										</p>
									</div>
									<div class="collapse multi-collapse" id="instagram_presets_collapse">
										<div class="card card-body">
											Instagram presets will be displayed here.
										</div>
									</div>
								</div>
							</div>

	                		<div class="col-12 mt-2 d-flex justify-content-between">
	                			<button class="btn btn-primary round_border" data-dismiss="modal">
									Cancel
								</button>
								<div>
									<!-- <button class="btn btn-info round_border" id="close_add_new_plan_modal_button">
										Save
									</button> -->

									<input type="datetime-local" class="border border-light round_border py-2 px-1" name="post_datetime">
									<div class="btn-group dropup">
										<button type="button" class="btn btn-light font-weight-bold" id="post_action_dropdown_button">
											SAVE AS DRAFT
										</button>
										<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
										</button>
										<div class="dropdown-menu dropdown-menu-right" id="post_action_dropdown_menu">
											<a class="dropdown-item font-weight-bold active" href="#"> SAVE AS DRAFT </a>
											<a class="dropdown-item font-weight-bold" href="#"> SAVE AND SCHEDULE </a>
											<a class="dropdown-item font-weight-bold" href="#"> PUBLISH NOW </a>
										</div>
									</div>
								</div>
	                		</div>

                		</div>
                	</div>

                	<!-- code for live preview -->
                	<div class="col-5">
                		<div class="card h-100">
                			<div class="card-body">
								<div id="preview_post"></div>
                			</div>
                		</div>
                	</div>
                </div>

            </div>
        </div>
    </div>
</div>


@include('components.footer')

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
	var plan_obj = {
		title: null,
		start: null,
		end: null
	}
	var plans_list = [
			{ title: 'All Day Event', start: '2024-01-01' },
			{ title: 'Long Event', start: '2024-01-07', end: '2024-01-10' },
			{ title: 'Conference', start: '2024-01-11', end: '2024-01-13' },
			{ title: 'Meeting', start: '2024-01-12T10:30:00', end: '2024-01-12T12:30:00' },
			{ title: 'Lunch', start: '2024-01-12T12:00:00' },
			{ title: 'Meeting', start: '2024-01-12T14:30:00' },
			{ title: 'External Event', url: 'http://google.com/', start: '2024-01-28' }
		];

	var calendar = null;

	$(document).ready(function () {
		$("#post_action_dropdown_button").on('click', function(e) {
	    	validate_title();
	    });

		$('#fb_handler').hide();
		$('#fb_dropdown').hide();
		$('#facebook_presets_wrapper').hide();

		$('#disabled_fb_handler, #fb_handler').on('click', function() {
			$('#disabled_fb_handler, #fb_handler').toggle()
			if ($("#fb_handler").is(":visible")) {
				$('#fb_dropdown').show();
				$('#facebook_presets_wrapper').show();
			}
			else
			{
				$('#fb_dropdown').hide();
				$('#facebook_presets_wrapper').hide();
			}
		});

		$('#instagram_handler').hide();
		$('#instagram_dropdown').hide();
		$('#instagram_presets_wrapper').hide();


		$('#disabled_instagram_handler, #instagram_handler').on('click', function() {
			$('#disabled_instagram_handler, #instagram_handler').toggle()
			if ($("#instagram_handler").is(":visible")) {
				$('#instagram_dropdown').show();
				$('#instagram_presets_wrapper').show();
			}
			else
			{
				$('#instagram_dropdown').hide();
				$('#instagram_presets_wrapper').hide();
			}
		});





		$('#fb_dropdown_menu a').click(function () {
			var selected_type_icon = this.getElementsByTagName('img')[0].src;
			$("#fb_dropdown_menu a").removeClass('active');
			$("#fb_post_type_icon").attr('src',selected_type_icon);
			$('#fb_dropdown_button').text($(this).text());
			$(this).addClass("active");
		});


		$('#instagram_dropdown_menu a').click(function () {
			$("#instagram_dropdown_menu a").removeClass('active');
			var selected_type_icon = this.getElementsByTagName('img')[0].src;
			$("#instagram_post_type_icon").attr('src',selected_type_icon);
			$('#instagram_dropdown_button').text($(this).text());
			$(this).addClass("active");
		});

		$('#post_action_dropdown_menu a').click(function () {
			$("#post_action_dropdown_menu a").removeClass('active');
			$('#post_action_dropdown_button').text($(this).text());
			$(this).addClass("active");
		});


	});

	function validate_title() {
		if ($("#plan_title_field").val() == '') {
			$("#plan_title_field").focus();
			$("#validate_title").css('display', 'block');
		}
		else
		{
			plan_obj.title = $("#plan_title_field").val();
			$('#add_new_plan_modal').modal('hide');
			$("#validate_title").css('display', 'none');
			console.log(plan_obj);
			calendar.addEvent(plan_obj);
		}
	}

	tinymce.init({
		selector: 'textarea#add_new_plan_description',
		height: 500,
		plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount preview',
		// plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss preview',
		toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | preview | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
		// menubar: 'view',
		tinycomments_mode: 'embedded',
		tinycomments_author: 'Author name',
		image_dimensions: false,


		/* ------------------------- */
		/* code for bootstra classes */
		/* ------------------------- */

		// image_class_list: [
		// 	{title: 'Responsive', value: 'img-fluid'},
		// 	{title: 'Shadow', value: 'shadow'},
		// 	{title: 'No Shadow', value: 'shadow-none'},
		// 	{title: 'Rounded Image', value: 'rounded-circle'},
		// 	{title: 'Not Rounded', value: 'rounded-0'},
		// ],
		mergetags_list: [
		  { value: 'First.Name', title: 'First Name' },
		  { value: 'Email', title: 'Email' },
		],
		setup: function(ed) {
		    ed.on("keyup", function(){
		        $('#preview_post').html(tinymce.activeEditor.getContent());
		    });
			},
		ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
	});


	document.addEventListener('DOMContentLoaded', function()
	{

	    /* ----------------------- */
	  	/* Initialize The Calendar */
	    /* ----------------------- */

	    var calendarEl = document.getElementById('calendar');
	    calendar = new FullCalendar.Calendar(calendarEl, {
	    	headerToolbar: {
	    		left: 'prev,next today',
	    		center: 'title',
	    		right: 'dayGridMonth,timeGridWeek,timeGridDay'
	    		// right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
	    	},
	    	editable: true,
	    	droppable: true, // this allows things to be dropped onto the calendar
			selectable: true,
			businessHours: true,
			dayMaxEvents: true, // allow "more" link when too many events
			events: plans_list
	    });
	    calendar.render();

		calendar.on('dateClick', function(info) {
			console.log('clicked on ' + info.date);
			plan_obj.start = info.date;
			plan_obj.end = info.date;
			$('#add_new_plan_modal').modal('show');
		});
	});


</script>

