@include('components.head')
@include('components.nav')
@include('components.sidebar')


<style>
	#payroll_frequency_span
	{
		display: none;
	}
</style>

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-10">
				<h1>Payroll</h1>
			</div>
			<div class="col-12 col-md-2">
				<button class="btn btn-success btn-lg round_border font-lg px-3" id="add_new_payroll_button">
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

		<div class="row icon-cards-row mb-4">
			<div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<i class="iconsminds-business-mens"></i>
						<p class="card-text mb-0">Number of Employees</p>
						<p class="lead text-center">16</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<i class="iconsminds-dollar"></i>
						<p class="card-text mb-0">Total Payroll</p>
						<p class="lead text-center">5</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<i class="iconsminds-dollar"></i>
						<p class="card-text mb-0">Due Payroll</p>
						<p class="lead text-center">3</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                <table id="employee_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Employee Name</th>
                            <th>Hire Date</th>
                            <th>Total Payroll</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
            		@foreach($employee_list as $key =>  $single_employee)
                        <tr>
                            <td>{{ $single_employee['employee_name'] }}</td>
                            <td>{{ $single_employee['hire_date'] }}</td>
                            <td>{{ $single_employee['total_payroll'] }}</td>
            				<td class="d-flex justify-content-center py-2">            					
            					<a href="{{ route('payroll_detail',['slug' => $single_employee['employee_slug']])}}" class="btn btn-success round_border btn-sm d-flex mr-2">
            						<i class="fa fa-eye fa-lg"></i>
            						<span class="ml-2">View</span>
            					</a>
            					<!-- <button class="btn btn-primary round_border btn-sm d-flex mr-2" id="edit_payroll_button" onclick="edit_employee('{{$single_employee['id']}}')">
            						<i class="fa fa-pencil fa-lg"></i>
            						<span class="ml-2">Edit</span>
            					</button> -->
            					<button class="btn btn-danger round_border btn-sm d-flex" id="delete_payroll_button" onclick="delete_employee('{{$single_employee['id']}}')">
            						<i class="fa fa-trash fa-lg"></i>
            						<span class="ml-2">Delete</span>
            					</button>
            				</td>
                        </tr>
            		@endforeach
                    <tfoot>
                        <tr>
                            <th>Employee Name</th>
                            <th>Hire Date</th>
                            <th>Total Payroll</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
			</div>
		</div>
	</div>
	 <!-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas> -->

<!-- Delete employee Modal -->
<div class="modal fade" id="delete_employee_modal" tabindex="-1" role="dialog" aria-labelledby="delete_employee_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete_employee_modal_label">Confirmation</h5>
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
                        <button class="btn btn-danger round_border btn-block" id="confirm_delete_payroll_button">
                            Yes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add new payroll Modal -->
<div class="modal fade" id="add_new_payroll_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_payroll_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_new_payroll_modal_label">Add New Payroll</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                	<div class="col-12">
                		<div class="form-group">
							<label for="team_member">Select a team member</label>
							<select id="team_member" class="form-control">
								<option value="null" selected disabled>--- Select any one ---</option>
								<option value="team_member_one">John Doe</option>
								<option value="team_member_two">William Doe</option>
								<option value="team_member_three">Peterson Doe</option>
								<option value="team_member_four">Johnson Doe</option>
							</select>
                		</div>
                	</div>
                	<div class="col-12">
                		<div class="form-group">
                			<label for="entry_date">Select date</label>
                			<input type="date" name="entry_date" id="entry_date" class="form-control">
                		</div>
                	</div>
                	<div class="col-12">
                		<div class="form-group">
                			<label for="payroll_frequency">Pay Frequency</label>
							<select id="payroll_frequency" class="form-control">
								<option value="null" selected disabled>--- Select any one ---</option>
								<option value="Weekly">Weekly</option>
								<option value="Bi-weekly">Bi-weekly</option>
								<option value="Semi-monthly">Semi-monthly</option>
								<option value="Monthly">Monthly</option>
							</select>
                		</div>
                	</div>
                	<div class="col-12">
                		<div class="form-group">
                			<label for="payroll_amount">
                				Pay Amount <span id="payroll_frequency_span">(<span id="payroll_frequency_text"></span>)</span>
                			</label>
                			<input type="number" name="payroll_amount" id="payroll_amount" class="form-control" min="0">
                		</div>
                	</div>
                	<div class="col-12">
                		<div class="form-group">
                			<label for="payment_method">Payment Method</label>
                			<input type="text" name="payment_method" id="payment_method" class="form-control">
                		</div>
                	</div>
                	<div class="col-12">
                		<div class="form-group">
                			<label for="payment_notes">Payment info notes</label>
                			<textarea rows="5" name="payment_notes" id="payment_notes" class="form-control"></textarea>
                		</div>
                	</div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-light rounded btn-block" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-info rounded btn-block" id="save_new_payroll_button">
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

<!-- 
<script>
const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
const yValues = [55, 49, 44, 24, 15];
const barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script> -->
<script>
	$(document).ready(function () {
		$('#employee_table').DataTable();

        $("#delete_payroll_button").on('click', function(e) {
            $('#delete_employee_modal').modal('show');
        });

        $("#add_new_payroll_button").on('click', function(e) {
            $('#add_new_payroll_modal').modal('show');
        });

        $("#confirm_delete_payroll_button").on('click', function(e) {
            // -------------------------------------------
            // API call for delete contract will goes here
            // -------------------------------------------
            $('#delete_employee_modal').modal('hide');

            // show notification on API success
            let message = "The selected employee has been deleted successfully..";
            show_notification('top', 'right', message);
        });


        $("#save_new_payroll_button").on('click', function(e) {
            // -------------------------------------------
            // API call for delete contract will goes here
            // -------------------------------------------
            $('#add_new_payroll_modal').modal('hide');

            // show notification on API success
            let message = "New payroll added successfully..";
            show_notification('top', 'right', message);
        });


        $("#payroll_frequency").on('change', function (e) {
        	$("#payroll_frequency_span").show();
        	$('#payroll_frequency_text').html(e.target.value);
        })

    });



	// function edit_employee(employee_id)
	// {
	// 	$('edit_employee').modal('show');
	// }
	

    // alert('I have change modal click due to duplication of ids.');

	function delete_employee(employee_id)
	{
		console.log('employee_id');
		console.log(employee_id);
		$('#delete_employee_modal').modal('show');
	}

    function show_notification(from, align, message)
    {
        $.notify({
            icon: "add_alert",
            message: message
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