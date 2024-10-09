@include('components.head')
@include('components.nav')
@include('components.sidebar')

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-10">
                <h1>{{$page_title}}</h1>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="entry_date">Hire date: </label>
									<span>01-23-2024</span>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="payroll_frequency">Pay Frequency: </label>
									<span>Monthly</span>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="payroll_amount">Pay Amount (monthly): </label>
									<span>$10,000</span>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="payment_method">Payment Method: </label>
									<span>Bank Account</span>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label class="font-weight-bold" for="payment_notes">Payment info notes: </label>
									<span>An digital form of your payroll will be sent to your email. For more information you can contact the admin.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-12">
                <table id="payroll_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Payroll Date</th>
                            <th>Payroll Amount</th>
                            <th class="text-center">Payroll Status</th>
                        </tr>
                    </thead>
                    <tbody>
            		@foreach($payment_history as $key =>  $single_payment)
                        <tr>
                            <td>{{ $single_payment['id'] }}</td>
                            <td>{{ $single_payment['payroll_date'] }}</td>
                            <td>${{ $single_payment['payroll_amount'] }}</td>
                            <td class="text-center">
                            	@if( $single_payment['status'] == 'in-progress' )
									<span class="badge badge-warning rounded text-capitalize">{{ $single_payment['status'] }}</span>
                            	@endif
                            	@if( $single_payment['status'] == 'pending')
									<span class="badge badge-warning rounded text-capitalize" id="payment_status_badge">{{ $single_payment['status'] }}</span>

									<span type="button" class="btn btn-success rounded py-1 px-2" id="change_payroll_status">
										<span class="font-weight-bold">Mark as paid</span>
									</span>

                            	@endif
                            	@if( $single_payment['status'] == 'paid' )
									<span class="badge badge-info rounded text-capitalize">{{ $single_payment['status'] }}</span>
                            	@endif
                            </td>
                        </tr>
            		@endforeach
                    <tfoot>
                        <tr>
                            <th>Payroll Date</th>
                            <th>Payroll Amount</th>
                            <th>Payroll Status</th>
                        </tr>
                    </tfoot>
                </table>
			</div>
		</div>
	</div>

<!-- Mark as paid confirmation  Modal -->
<div class="modal fade" id="mark_as_paid_confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="mark_as_paid_confirmation_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mark_as_paid_confirmation_modal_label">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            Are you sure you want to change the payroll status?
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
                        <button class="btn btn-danger round_border btn-block" id="confirm_mark_as_paid_modal_button">
                            Yes
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
	$(document).ready(function () {
		$('#payroll_table').DataTable();


        $("#change_payroll_status").on('click', function() {
			$('#mark_as_paid_confirmation_modal').modal('show');
        });

        $("#confirm_mark_as_paid_modal_button").on('click', function() {
			$('#mark_as_paid_confirmation_modal').modal('hide');
		
			$('#payment_status_badge').html('Paid');

			$('#payment_status_badge').removeClass('badge-warning');
			$('#payment_status_badge').addClass('badge-info');

			$('#change_payroll_status').hide();
        });

	});



</script>