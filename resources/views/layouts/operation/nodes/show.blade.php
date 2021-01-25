@extends('layouts.admin.master')
@section('content')


<style type="text/css">
.success{
	color: #40B34E;
}

.warning{
	color: #FF5B00;
}

.danger{
	color: #F33734;
}

td .fa  {
	text-align: center;
}


</style>


<div class="container-fluid">

	<div class="row">
		<div class="col-lg-12">
			<div class="view-header">
				<div class="pull-right text-right" style="line-height: 14px">

				</div>
				<div class="header-icon">
					<i class="pe page-header-icon pe-7s-science"></i>
				</div>
				<div class="header-title">
					<h3 class="m-b-xs">{{ $nodeId }} </h3>
					<small>
						This section will summarize the specific Node
					</small>
				</div>
			</div>
			<hr>
		</div>
	</div>

	@include('layouts.operation.nodes.show.chart')


	<br>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="panel-heading"> VNF Instances </div>
					<table class="table table-responsive-sm">
						<thead>
							<tr>
								<th>#</th>
								<th>Instance</th>
								<th>VCPU</th>
								<th>Memory</th>
								<th>HDD</th>
								<th>State</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>

							@if(count($vnfInstances) > 0 )

							<?php $x = 1; ?>

							@foreach($vnfInstances as $instance)

							<?php $instanceId = strtolower($instance['instanceId']); ?>

							<tr>
								<td>{{ $x++ }}</td>

								<td>
									<a href="/nodes/{{ $instanceId }}/summary/1?instanceId={{ trim($instanceId) }}&ip={{ $_GET['ip'] }}&port={{ $_GET['port'] }}">
										{{ $instanceId }}
									</a>
								</td>
								<td>{{ $instance['vCPUs'] }}</td>
								<td>{{ $instance['memoryInKb'] }} KB</td>
								<td>{{ $instance['virshId'] }} MB</td>
								<td class="state-{{ $instanceId }}">{{ $instance['state'] }}</td>
								<td>

									{!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'url'=>'nodes/'. strtolower($instance['instanceId']) .'/action')) !!}


									<select class="form-control" name="action-{{ $instanceId }}" onchange="updateAction('{{ $instanceId }}')">
										<option value="---"> --- </option>

										@foreach($instance['operations'] as $operation)
										<option value="{{ $operation }}">
											{{ basename($operation) }}
										</option>

										@endforeach
									</select>

									<input type="hidden" name="ip" value="{{ $_GET['ip'] }}">
									<input type="hidden" name="port" value="{{ $_GET['port'] }}">
									<input type="hidden" name="nodeId" value="{{ $_GET['nodeId'] }}">
									<input type="hidden" name="instaneName-{{ $instanceId }}" value="{{ $instanceId }}">

									{!!Form::close()!!}

								</td>

							</tr>

							@endforeach

							@else

							<tr class="text-center">
								<td colspan="12">
									<br>
									No data ...
								</td>

							</tr>


							@endif

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	@include('layouts.operation.nodes.show.latency')
	@include('layouts.operation.nodes.show.thumnail')

</div>
@stop

@section('custom-scripts')

<script type="text/javascript">

	function updateAction(instance) {

		console.log("updateAction executed ... ");


		var data         = {};
		data.ip          = $("input[name=ip]").val();
		data.port        = $("input[name=port]").val();
		data.instaneName = $("input[name=instaneName-" + instance + "]").val();
		data.action      = $("select[name=action-" + instance + "]").val();

		var parts = data.action.split('/');
		var operation = parts.pop() || parts.pop();  // handle potential trailing slash

		console.log(data);

		$.ajax({
			method: 'POST',
			url: '{{ URL::to("nodes/1/action")}}',
			crossDomain: true,
			contentType: false,
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('value'),
				"Accept": "application/json",
				"Content-Type": "application/x-www-form-urlencoded",
				"Cache-Control": "no-cache"
			},
			data: data,
			success: function(response){
				//console.log(response);

				if(response == "204"){

					toastr.options = {
						"debug": false,
						"newestOnTop": true,
						"positionClass": "toast-top-right",
						"closeButton": true,
						"progressBar": true
					};

					toastr.success(data.instaneName + ' - ' +  operation );
					$("select[name=action-" + instance + "]").prop('selectedIndex',0);
					$("td[class=state-" + instance + "]").text(operation);

				} else {
					toastr.options = {
						"debug": false,
						"newestOnTop": true,
						"positionClass": "toast-top-right",
						"closeButton": true,
						"progressBar": true
					};

					toastr.error(data.instaneName + ' can not ' + operation );
					$("select[name=action-" + instance + "]").prop('selectedIndex',0);

				}

			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(JSON.stringify(jqXHR));
				console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
			}
		});

	}

</script>



@include('layouts.operation.nodes.show.scripts.chart')
@stop
