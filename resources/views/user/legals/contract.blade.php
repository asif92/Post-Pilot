@include('components.head')
@include('components.nav')
@include('components.sidebar')

<style type="text/css">
    #edit_contract_title,
    #cancel_new_contract_title_button,
    #save_new_contract_title_button
    {
        cursor: pointer;
        font-size: 20px;
    }
    #contract_title_input
    {
        display: none;
    }
</style>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10">
                <h1>{{$page_title}}</h1>
            </div>
            <div class="col-12 col-md-2 text-right">
                <button class="btn btn-success btn-lg round_border font-lg px-3" id="add_new_contract_button">
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
        <div class="row">
        	<div class="col-12">
                <table id="contract_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Team Member Name</th>
                            <th>Contract Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
            		@foreach($contracts as $key =>  $single_contract)
                        <tr>
                            <td>{{ $single_contract['team_member_name'] }}</td>
                            <td>{{ $single_contract['contract_name'] }}</td>
            				<td class="d-flex justify-content-center py-2">
            					<button class="btn btn-primary round_border d-flex mr-2" id="edit_contract_button" onclick="edit_contract('{{$single_contract['id']}}')">
            						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
            						<span class="ml-2">Edit</span>
            					</button>
            					<button class="btn btn-danger round_border d-flex" id="delete_contract_button" onclick="delete_contract('{{$single_contract['id']}}')">
            						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
            						<span class="ml-2">Delete</span>
            					</button>
            				</td>
                        </tr>
            		@endforeach
                    <tfoot>
                        <tr>
                            <th>Team Member Name</th>
                            <th>Contract Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
        	</div>
        </div>
    </div>
</main>

@if($errors->any())
	<h4>{{$errors->first()}}</h4>
@endif

<!-- Delete Contract Modal -->
<div class="modal fade " id="delete_contract_modal" tabindex="-1" role="dialog" aria-labelledby="delete_contract_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete_contract_modal_label">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            Are you sure you want to delete this contract?
                        </p>
                        <p>
                            You won't be able to undo this change.
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <button class="btn btn-secondary round_border btn-block" data-dismiss="modal">
                            No
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger round_border btn-block" id="confirm_delete_contract_button">
                            Yes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create/Edit New Contract Modal -->
<div class="modal fade " id="create_edit_contract_modal" tabindex="-1" role="dialog" aria-labelledby="create_edit_contract_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create_edit_contract_modal_label">Create New Contract</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <p class="mb-0" id="contract_title_wrapper">
                            <span id="contract_title">New contract</span>
                            <i class="iconsminds-pen text-primary" id="edit_contract_title" data-toggle="tooltip" data-placement="top" title="Click to edit title"></i>
                        </p>
                        <div class="form-inline w-100" id="contract_title_input">
                            <div class="form-group w-100">
                                <input type="text" name="contract_title" id="new_contract_title" class="form-control w-75">
                                <i class="iconsminds-close text-danger" id="cancel_new_contract_title_button"></i>
                                <i class="iconsminds-yes text-success" id="save_new_contract_title_button"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <button class="btn btn-success round_border btn-block" data-toggle="modal" data-target="#generate_contract_modal">
                            Generate
                        </button>
                    </div>
                    <div class="col-12 col-md-3">
                        <button class="btn btn-info round_border btn-block" data-dismiss="modal">
                            Save
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <textarea class="form-control" rows="15" cols="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Generate New Contract Modal -->
<div class="modal fade " id="generate_contract_modal" tabindex="-1" role="dialog" aria-labelledby="generate_contract_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generate_contract_modal_label">Generate New Contract</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <select class="form-control">
                                <option selected> Contract Type</option>
                                <option value="team_contract"> Team Contract</option>
                                <option value="clients_contract"> Clients Contract</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="contractee_name" class="form-control" placeholder="Employee / Contractee Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="10" cols="5"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group" data-dismiss="modal" >
                            <button class="btn btn-success round_border btn-block">Generate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

<script>
	$(document).ready(function () {

        $('#contract_table').DataTable();

        $('#generate_contract_modal').on('show.bs.modal', function (e) {
            $('#create_edit_contract_modal').modal('hide')        
        })

        $('#generate_contract_modal').on('hide.bs.modal', function (e) {
            $('#create_edit_contract_modal').modal('show')        
        })

        $("#add_new_contract_button").on('click', function(e) {
            show_create_edit_contract_modal('Create New Contract');
        });

        $("#edit_contract_button").on('click', function(e) {
            show_create_edit_contract_modal('Edit Contract');
        });

        // $("#delete_contract_button").on('click', function(e) {
        //     $('#delete_contract_modal').modal('show');
        // });
 
        $("#confirm_delete_contract_button").on('click', function(e) {
            // -------------------------------------------
            // API call for delete contract will goes here
            // -------------------------------------------
            $('#delete_contract_modal').modal('hide');

            // show notification on API success
            show_notification('top', 'right');
        });


        // ******************************* //
        // ACTIONS FOR EDIT CONTRACT TITLE //
        // ******************************* //
        $("#edit_contract_title").on('click', function(e) {
            show_edit_contract_title_field();
        });
        $("#cancel_new_contract_title_button").on('click', function(e) {
            close_edit_contract_title_field();
        });
        $("#save_new_contract_title_button").on('click', function(e) {
            save_contract_title_field();
        });



    });
    function edit_contract(contract_id) {
        $('#create_edit_contract_modal').modal('show');
    }
    function delete_contract(contract_id) {
        $('#delete_contract_modal').modal('show');
    }
    // ACTION FOR SHOW CREATE EDIT CONTRACT MODAL AND CHANGE TITLE
    function show_create_edit_contract_modal(title) {
        $('#create_edit_contract_modal').modal('show');
        $('#create_edit_contract_modal_label').html(title);
    }

    function show_edit_contract_title_field()
    {
        $('#contract_title_wrapper').hide();
        $('#contract_title_input').show();
        
        var old_title = $('#contract_title').text();
        $('#new_contract_title').val(old_title);
    }

    function close_edit_contract_title_field()
    {
        $('#contract_title_wrapper').show();
        $('#contract_title_input').hide();
    }
    function save_contract_title_field()
    {
        var new_title = $('#new_contract_title').val();
        $('#contract_title').html(new_title);
        $('#contract_title_wrapper').show();
        $('#contract_title_input').hide();
        // -------------------------------------
        // API call for new title will goes here
        // -------------------------------------
    }



    // *************************** //
    // ACTIONS FOR DELETE CONTRACT //
    // *************************** //
    function show_notification(from, align)
    {
        $.notify({
            icon: "add_alert",
            message: "The selected contract has been deleted successfully.."
        },{
            type: 'success',
            timer: 4000,
            placement: {
                from: from,
                align: align
            }
        });
    }
</script>
