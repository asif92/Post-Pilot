@include('components.head')
@include('components.nav')
@include('components.sidebar')

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.drag-container {
/*  max-width: 1000px;*/
/*  margin: 20px auto;*/
}

.drag-list {
  display: flex;
  align-items: flex-start;
  overflow-x: auto;
  padding-bottom: 10px;
}

/* width */
.drag-list::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.drag-list::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

/* Handle */
.drag-list::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;
}

/* Handle on hover */
.drag-list::-webkit-scrollbar-thumb:hover {
  background: #555;
}

@media (max-width: 690px) {
  .drag-list {
	display: block;
  }
}

.drag-column {
  flex: 0 0 25%;
/*  flex: 1;*/
  margin: 0 10px;
  position: relative;
  background: #e9e9e9;
  color: #222222;
/*  background: rgba(0, 0, 0, 0.1);*/
  overflow: hidden;
}
@media (max-width: 690px) {
  .drag-column {
	margin-bottom: 30px;
  }
}
.drag-column h2 {
  font-size: 0.8rem;
  margin: 0;
  text-transform: uppercase;
  font-weight: 700;
}

/*.drag-column-new-lead .drag-column-header,
.drag-column-new-lead .is-moved,
.drag-column-new-lead .drag-options
{
	background: #f97316;
}
.drag-column-contacted .drag-column-header,
.drag-column-contacted .is-moved,
.drag-column-contacted .drag-options
{
	background: #f59e0b;
}
.drag-column-qualified .drag-column-header,
.drag-column-qualified .is-moved,
.drag-column-qualified .drag-options
{
	background: #eab308;
}
.drag-column-proposal-sent .drag-column-header,
.drag-column-proposal-sent .is-moved,
.drag-column-proposal-sent .drag-options
{
	background: #84cc16;
}
.drag-column-negotiation .drag-column-header,
.drag-column-negotiation .is-moved,
.drag-column-negotiation .drag-options
{
	background: #22c55e;
}
.drag-column-closed-won .drag-column-header,
.drag-column-closed-won .is-moved,
.drag-column-closed-won .drag-options
{
	background: #10b981;
}
.drag-column-closed-lost .drag-column-header,
.drag-column-closed-lost .is-moved,
.drag-column-closed-lost .drag-options
{
	background: #14b8a6;
}*/

.drag-column-deals .drag-column-header,
.drag-column-deals .is-moved,
.drag-column-deals .drag-options
{
	background: #14b8a6;
}

.drag-column-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
}

.drag-inner-list {
  min-height: 50px;
  margin-bottom: 10px;
}
.cursor-grab
{
	cursor: all-scroll !important;
}
.cursor-pointer
{
	cursor: pointer;
}

.drag-item {
	cursor: pointer;
  margin: 10px;
  padding: 10px;
/*  height: 100px;*/
  background: #e1e1e1;
  box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
/*  background: rgba(0, 0, 0, 0.2);*/
  transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
  border-radius: 5px;
}
.drag-item.is-moving {
  transform: scale(1.5);
  background: rgba(0, 0, 0, 0.8);
}

.drag-header-more {
  cursor: pointer;
}

.drag-options {
  position: absolute;
  top: 44px;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 10px;
  transform: translateX(100%);
  opacity: 0;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
}
.drag-options.active {
  transform: translateX(0);
  opacity: 1;
}
.drag-options-label {
  display: block;
  margin: 0 0 5px 0;
}
.drag-options-label input {
  opacity: 0.6;
}
.drag-options-label span {
  display: inline-block;
  font-size: 0.9rem;
  font-weight: 400;
  margin-left: 5px;
}

/* Dragula CSS  */
.gu-mirror {
  position: fixed !important;
  margin: 0 !important;
  z-index: 9999 !important;
  opacity: 0.8;
  list-style-type: none;
}

.gu-hide {
  display: none !important;
}

.gu-unselectable {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important;
}

.gu-transit {
  opacity: 0.2;
}

/* Demo info */
.section {
  padding: 20px;
  text-align: center;
}
.section a {
  color: white;
  text-decoration: none;
  font-weight: 300;
}
.section h4 {
  font-weight: 400;
}
.section h4 a {
  font-weight: 600;
}
</style>

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-9">
				<h1>Sales Pipelines</h1>
			</div>
			<div class="col-12 col-md-3 text-right">
				<button class="btn btn-success btn-lg round_border font-lg px-3" id="add_new_stage_button">
					<i class="iconsminds-add"></i>
					<span>
						Add New Stage
					</span>
				</button>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="drag-container">
					<ul class="drag-list" id="stage_pipeline_list">
					@foreach($sales_pipeline as $key =>  $single_stage)
						<li id="{{ $single_stage['stage_slug'] }}" class="drag-column drag-column-deals">
							<span class="drag-column-header handle">
								<h2>{{ $single_stage['stage_title'] }}</h2>
								<i class="fa fa-plus text-white cursor-pointer" onclick="add_new_deal_modal('{{$single_stage['id']}}')"></i>
								<!-- drag-header-more -->
							</span>
							<div class="drag-options" id="options_{{ $single_stage['id'] }}"></div>
							<ul class="drag-inner-list" id="{{ $single_stage['id'] }}">
							@foreach($single_stage['stage_deals'] as $deals_key =>  $single_deal)
								<li class="drag-item" onclick="deal_card_details_button('{{$single_deal['id']}}')">
									<div>
										<strong>Deal Name: </strong> {{ $single_deal['deal_name'] }} <br />
										<strong>Value: </strong> {{ $single_deal['value'] }} <br />
										<strong>Close Date: </strong> {{ $single_deal['close_date'] }} <br />
										<strong>Contact Person: </strong> {{ $single_deal['contact_Person'] }} <br />
										<strong>Deal Status: </strong> {{ $single_deal['deal_status'] }} <br />
									</div>
								</li>
							@endforeach
							</ul>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>


<!-- Add new stage Modal -->
<div class="modal fade" id="add_new_stage_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_stage_modal_label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add_new_stage_modal_label">Add New Stage</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label for="stage_title">Stage Title</label>
							<input type="text" name="stage_title" id="stage_title" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="stage_description">Stage Description</label>
							<textarea id="stage_description" class="form-control" rows="10"></textarea>
						</div>
					</div>
					<div class="col-12">
						<button class="btn btn-info round_border btn-block" id="save_new_stage_confirm_button">
							Save
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- add new deal Modal -->
<div class="modal fade" id="add_new_deal_card_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_deal_card_modal_label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add_new_deal_card_modal_label">Add New Deal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label for="deal_name">Deal Name </label>
							<input type="text" name="deal_name" id="deal_name" class="form-control" />
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="value">Value </label>
							<input type="number" name="value" id="value" class="form-control" />
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="close_date">Close Date </label>
							<input type="date" name="close_date" id="close_date" class="form-control" />
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="contact_Person">Contact Person </label>
							<input type="text" name="contact_Person" id="contact_Person" class="form-control" />
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="deal_status">Deal Status </label>
							<select class="form-control" id="deal_status">
								<option selected disabled>--- Select One ---</option>
								<option value="pending">Pending</option>
								<option value="risk">At Risk</option>
								<option value="track">On Track</option>
								<option value="ended">Ended</option>
							</select>
						</div>
					</div>
					<div class="col-12">
						<button class="btn btn-info round_border btn-block" id="save_new_deal_confirm_button">
							Save
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- deal card details Modal -->
<div class="modal fade" id="deal_card_details_modal" tabindex="-1" role="dialog" aria-labelledby="deal_card_details_modal_label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deal_card_details_modal_label">Add New Deal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<strong>Deal Name: </strong> John Doe's Deal <br />
						<strong>Value: </strong> 1,000,000.00 <br />
						<strong>Close Date: </strong> 01-02-2024 <br />
						<strong>Contact Person: </strong> John Doe <br />
						<strong>Deal Status: </strong> At Risk <br />
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="font-weight-bold" for="deal_comments"> Deal Comments </label>
							<textarea class="form-control" id="deal_comments" cols="5"></textarea>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="font-weight-bold" for="deal_description"> Deal Description </label>
							<textarea class="form-control" id="deal_description" cols="5"></textarea>
						</div>
					</div>
					<div class="col-12">
						<button class="btn btn-info round_border btn-block" id="deal_card_deatils_confirm_button">
							Save
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</main>


@include('components.footer')

<script>

	var selected_stage_id = null;

	const snakeCase = string => {
		return string.replace(/\W+/g, " ")
			.split(/ |\B(?=[A-Z])/)
			.map(word => word.toLowerCase())
			.join('_');
	};

	$("#add_new_stage_button").on('click', function(e) {
		$('#add_new_stage_modal').modal('show');
	});
	function add_new_deal_modal(id)
	{
		$('#add_new_deal_card_modal').modal('show');
		selected_stage_id = id;
	}


	function deal_card_details_button(id)
	{
		$('#deal_card_details_modal').modal('show');
	}
	$("#deal_card_deatils_confirm_button").on('click', function(e) {
		$('#deal_card_details_modal').modal('hide');
	});


	$("#save_new_deal_confirm_button").on('click', function(e) {
		$('#add_new_deal_card_modal').modal('hide');
		var html = '<li class="drag-item">' +
				'	<div>' +
				'		<strong>Deal Name: </strong> ' + $("#deal_name").val() + ' <br />' +
				'		<strong>Value: </strong> ' + $("#value").val() + ' <br />' +
				'		<strong>Close Date: </strong> ' + $("#close_date").val() + ' <br />' +
				'		<strong>Contact Person: </strong> ' + $("#contact_Person").val() + ' <br />' +
				'		<strong>Deal Status: </strong> ' + $("#deal_status").val() + ' <br />' +
				'	</div>' +
				'</li>';
		console.log(selected_stage_id);
		var success_message = "You have successfully added new deal.";
		show_notification("top", "right", "success", success_message, "Success");
		console.log($('#' + selected_stage_id));
		$('#' + selected_stage_id).append(html);
	});


	$("#save_new_stage_confirm_button").on('click', function(e) {

		var new_stage_title = $("#stage_title").val();
		var	new_stage_slug = snakeCase(new_stage_title)
		var id = Math.floor(100000 + Math.random() * 900000);
		var success_message = "You have successfully added new stage.";
		var error_message = "Please enter a valid stage name.";

		if (new_stage_title == '') {
			show_notification("top", "right", "danger", error_message,"Error");
		}
		else
		{
			// var html = '<li id="' + new_stage_slug + '" class="drag-column drag-column-deals">' +
			// '	<span class="drag-column-header handle">' +
			// '		<h2>' + new_stage_title + '</h2>' +
			// '		<i class="fa fa-plus text-white cursor-pointer"></i>' +
			// '	</span>' +
			// '	<div class="drag-options" id="options_' + id + '"></div>' +
			// '	<ul class="drag-inner-list" id="' + id + '">' +
			// '		<li class="drag-item">' +
			// '		</li>' +
			// '	</ul>' +
			// '</li>';
			// $("#stage_pipeline_list").append(html);

			var new_stage_obj = {
				"id" : Math.floor(100000 + Math.random() * 900000),
				"stage_slug" : new_stage_slug,
				"stage_title" : new_stage_title,
				"stage_deals" : [ ]
            };
            console.log(new_stage_obj);
			
			<?php 
				$object = (object) [
					"id" => random_int(100000, 999999),
					"stage_slug" => "new_stage_slug",
					"stage_title" => "new_stage_title",
					"stage_deals" => []
				];
				array_push($sales_pipeline, $object)
			?> 
			console.log(@json($sales_pipeline));


			$('#add_new_stage_modal').modal('hide');
			show_notification("top", "right", "success", success_message, "Success");
			// console.log(document.getElementById(id));
			// dragula($(id + '.drag-item'));
		}
		$('#add_new_stage_modal').modal('hide');
		$("#stage_title").val('');
	});

	// *************************** //
	// ** Notification Function ** //
	// *************************** //
	function show_notification(from, align, type, message, title) {
		$.notify({
			title: title,
			message: message
		},{
			type: type,
			timer: 4000,
			placement: {
				from: from,
				align: align
			}
		});
	}

	// var ids = $('.drag-inner-list').map(function() {
	//   return $(this).attr('id');
	// });
	// console.log(ids);

	// var drake = dragula({});
	var containers0 = $('.drag-inner-list').toArray();

	dragula(containers0)
	// drake.containers.push($('.drag-inner-list').get(0));
	.on('drag', function(el) {
		console.log(el);
		// add 'is-moving' class to element being dragged
		el.classList.add('is-moving');
		el.classList.add('cursor-grab');
	})
	.on('dragend', function(el) {
		// remove 'is-moving' class from element after dragging has stopped
		el.classList.remove('is-moving');
		el.classList.remove('cursor-grab');
		
		// add the 'is-moved' class for 600ms then remove it
		window.setTimeout(function() {
			el.classList.add('is-moved');
			window.setTimeout(function() {
				el.classList.remove('is-moved');
			}, 600);
		}, 100);
	});

var containers1 = $('.drag-list').toArray();
dragula(containers1, {
  moves: function (el, container, handle) {
	return handle.classList.contains('handle');
  }
})
.on('drag', function(el) {
	console.log(el);
	// add 'is-moving' class to element being dragged
	el.classList.add('is-moving');
	el.classList.add('cursor-grab');
})
.on('dragend', function(el) {
	// remove 'is-moving' class from element after dragging has stopped
	el.classList.remove('is-moving');
	el.classList.remove('cursor-grab');
	
	// add the 'is-moved' class for 600ms then remove it
	window.setTimeout(function() {
		el.classList.add('is-moved');
		window.setTimeout(function() {
			el.classList.remove('is-moved');
		}, 600);
	}, 100);
});





var createOptions = (function() {
	var dragOptions = document.querySelectorAll('.drag-options');
	
	// these strings are used for the checkbox labels
	var options = ['Research', 'Strategy', 'Inspiration', 'Execution'];
	
	// create the checkbox and labels here, just to keep the html clean. append the <label> to '.drag-options'
	function create() {
		for (var i = 0; i < dragOptions.length; i++) {

			options.forEach(function(item) {
				var checkbox = document.createElement('input');
				var label = document.createElement('label');
				var span = document.createElement('span');
				checkbox.setAttribute('type', 'checkbox');
				span.innerHTML = item;
				label.appendChild(span);
				label.insertBefore(checkbox, label.firstChild);
				label.classList.add('drag-options-label');
				dragOptions[i].appendChild(label);
			});

		}
	}
	
	return {
		create: create
	}
	
	
}());

var showOptions = (function () {
	
	// the 3 dot icon
	var more = document.querySelectorAll('.drag-header-more');
	
	function show() {
		// show 'drag-options' div when the more icon is clicked
		var target = this.getAttribute('data-target');
		var options = document.getElementById(target);
		options.classList.toggle('active');
	}
	
	
	function init() {
		for (i = 0; i < more.length; i++) {
			more[i].addEventListener('click', show, false);
		}
	}
	
	return {
		init: init
	}
}());

createOptions.create();
showOptions.init();
</script>