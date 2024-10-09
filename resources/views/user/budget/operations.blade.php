@include('components.head')
@include('components.nav')
@include('components.sidebar')

<main>
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<h1>Operations</h1>
			</div>
			<div class="col-12">
				<div class="separator mb-5"></div>
			</div>
		</div>

		<div class="row icon-cards-row mb-4">
			<div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<i class="iconsminds-money-bag"></i>
						<p class="card-text mb-0"># of Operation Costs</p>
						<p class="lead text-center">50</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<i class="iconsminds-dollar"></i>
						<p class="card-text mb-0">Total Monthly Cost</p>
						<p class="lead text-center">$50,000</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body text-center">
						<i class="iconsminds-dollar"></i>
						<p class="card-text mb-0">Total Unpaid this month</p>
						<p class="lead text-center">$40,000</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-12">
                <table id="operation_costs_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Name</th>
                            <th>Cost</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
            		@foreach($operation_costs as $key =>  $single_operation_cost)
                        <tr>
                            <td>{{ $single_operation_cost['id'] }}</td>
                            <td>{{ $single_operation_cost['name'] }}</td>
                            <td>${{ $single_operation_cost['cost'] }}</td>
            				<td class="d-flex align-items-center justify-content-center">
								<div class="d-flex align-items-center">
									<small class="mr-2"> Unpaid </small>
									<div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1">

										@if ($single_operation_cost['status'] == 'unpaid')
										<input class="custom-switch-input" id="'switch_status_', {{$single_operation_cost['id']}}" type="checkbox">
										@endif
										@if ($single_operation_cost['status'] == 'paid')
										<input class="custom-switch-input" id="'switch_status_', {{$single_operation_cost['id']}}" type="checkbox" checked>
										@endif

										<label class="custom-switch-btn" for="'switch_status_', {{$single_operation_cost['id']}}"></label>
									</div>
									<small class="ml-2"> Paid </small>
								</div>
            				</td>
            				<td class="text-center">
            					<span type="button" class="badge badge-info" onclick="view_payment_history('{{$single_operation_cost['id']}}')">
            						<i class="fa fa-eye"></i>
            						<!-- <span class="ml-2">Delete</span> -->
            					</span>
            				</td>
                        </tr>
            		@endforeach
                    <tfoot>
                        <tr>
                            <th>Sr #</th>
                            <th>Name</th>
                            <th>Cost</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
			</div>
		</div>
	</div>

<!-- Operation Cost Details Modal -->
<div class="modal fade" id="operation_cost_details_modal" tabindex="-1" role="dialog" aria-labelledby="operation_cost_details_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="operation_cost_details_modal_label">Payment History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
		                <table id="payment_history_table" class="table table-striped table-bordered" style="width:100%">
		                    <thead>
		                        <tr>
		                            <th>Sr #</th>
		                            <th>Payment Date</th>
		                            <th>Cost</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		            		@foreach($payment_history as $key =>  $single_payment)
		                        <tr>
		                            <td>{{ $single_payment['id'] }}</td>
		                            <td>{{ $single_payment['payment_date'] }}</td>
		                            <td>${{ $single_payment['cost'] }}</td>
		                        </tr>
		            		@endforeach
		                    <tfoot>
		                        <tr>
		                            <th>Sr #</th>
		                            <th>Payment Date</th>
		                            <th>Cost</th>
		                        </tr>
		                    </tfoot>
		                </table>
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
		$('#operation_costs_table').DataTable();
		$('#payment_history_table').DataTable();
        // $("#operation_cost_view_button").on('click', function(e) {
        // });
    });

	function view_payment_history(id) {
		$('#operation_cost_details_modal').modal('show');
	}


</script>

