@include('components.head')
@include('components.nav')
@include('components.sidebar')
<style type="text/css">
	.iconsminds-add
	{
		font-size: 1rem;
	}
	.contract_folder_title
	{
		text-transform: capitalize;
	}
</style>

<main>
    <div class="container-fluid">
        <div class="row">
			<div class="col-12 col-md-10">
				<h1>All Contracts</h1>
			</div>
			<div class="col-12 col-md-2">
				<button class="btn btn-success btn-lg round_border font-lg px-3" id="add_new_contract_folder_button1">
					<i class="iconsminds-add"></i>
					<span>
						Add New
					</span>
				</button>
			</div>
			<div class="col-12">                
				<div class="separator mb-5"></div>
			</div>
        </div>
        <div class="row align-items-end" id="contract_folder_wrapper">
			@foreach($contracts as $key =>  $single_contract)
	        	<div class="col-12 col-md-2">
	        		<a href="{{ route('contract',['slug' => $single_contract['contract_slug']])}}">
						<h3 class="contract_folder_title font-weight-bold">{{ $single_contract['contract_title'] }}</h3>
	        			<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#1A5FB4" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
	        		</a>
	        	</div>
			@endforeach
        </div>
    </div>
</main>

<!-- Generate New Contract Modal -->
<div class="modal fade " id="add_new_contract_folder_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_contract_folder_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_new_contract_folder_modal_label">New Contract Folder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            	<form id="create_folder">
	                <div class="row">
	                    <div class="col-12">
	                        <div class="form-group">
	                            <input type="text" name="folder_title" id="folder_title" class="form-control" placeholder="Folder Title">
	                        </div>
	                    </div>
	                </div>
	                <div class="row mt-4">
	                    <div class="col-12">
	                        <button class="btn btn-info round_border btn-block" id="save_new_contract_folder">
	                            Save
	                        </button>
	                    </div>
	                </div>
	            </form>
            </div>
        </div>
    </div>
</div>


@include('components.footer')

<script>
	$(document).ready(function () {

        $("#add_new_contract_folder_button1").on('click', function(e) {
            $('#add_new_contract_folder_modal').modal('show');
        });

		const snakeCase = string => {
			return string.replace(/\W+/g, " ")
				.split(/ |\B(?=[A-Z])/)
				.map(word => word.toLowerCase())
				.join('_');
		};

        $("#save_new_contract_folder").on('click', function(e) {
	       	e.preventDefault();
			
			var new_folder_title = $("#folder_title").val();
			var new_folder_slug = $("#folder_title").val();
			var success_message = "You have successfully created new contract folder.";
			var error_message = "Please enter a valid contract folder name.";

			if (new_folder_title == '') {
        		show_notification("top", "right", "danger", error_message,"Error");
			}
			else
			{
				new_folder_slug = snakeCase(new_folder_slug)

				var html = 
				'<div class="col-12 col-md-2">' +
				'	<a href="contracts/' + new_folder_slug + '">'+
				'		<h3 class="contract_folder_title font-weight-bold">' + new_folder_title + '</h3>' +
				'		<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#1A5FB4" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>' +
				'	</a>' +
		        '</div>';

				$("#contract_folder_wrapper").append(html);

        		show_notification("top", "right", "success", success_message, "Success");

			}
            $('#add_new_contract_folder_modal').modal('hide');
			$("#folder_title").val('');
		});

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
	});


</script>