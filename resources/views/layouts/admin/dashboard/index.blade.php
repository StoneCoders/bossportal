@extends('layouts.admin.master')
@section('content')

<style>
canvas {
	-moz-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
}
</style>

<div class="container-fluid">

	<div class="row">
		<div class="col-lg-12">
			<div class="view-header">
				<!-- <div class="pull-right text-right" style="line-height: 14px">
					<small>BOSS<br>Dashboard<br> <span class="c-white">v.1.4</span></small>
				</div> -->
				<div class="header-icon">
					<i class="pe page-header-icon pe-7s-shield"></i>
				</div>
				<div class="header-title">
					<h3 class="m-b-xs">BOSS</h3>
					<small>
						This Dashboard will summarize all the analytics of the client and its respective latency measurements.
					</small>
				</div>
			</div>
			<hr>
		</div>
	</div>


	<div class="row">

		<div class="col-lg-3 col-xs-6">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="large">Devices</div>
					<h2 class="m-b-none">
						1023
					</h2>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="large">Nodes</div>
					<h2 class="m-b-none">
						20
					</h2>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="large">Zones</div>
					<h2 class="m-b-none">
						4
					</h2>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="large">Boss Clients</div>
					<h2 class="m-b-none">
						5
					</h2>
				</div>
			</div>
		</div>


	</div>

	<div class="row">
		<div class="col-lg-6">
			<canvas id="bwChart"></canvas>
		</div>

		<div class="col-lg-6">
			<canvas id="authChart"></canvas>
		</div>

	</div>

	<br>


	<div class="row">
		<div class="col-lg-3">
			<canvas id="zone1"></canvas>
		</div>

		<div class="col-lg-3">
			<canvas id="zone2"></canvas>
		</div>

		<div class="col-lg-3">
			<canvas id="zone3"></canvas>
		</div>

		<div class="col-lg-3">
			<canvas id="zone4"></canvas>
		</div>
	</div>

	<!-- <br> -->

	<div class="panel-body">
            <div class="row">
                    <div class="col-md-3 col-xs-6 text-center">
	                        <h2 class="no-margins">
	                            75%
	                        </h2>
							<div class="large">Boss Score - 67</div>
							<div class="large">Network Score - 62</div>
							<div class="slight m-t-sm c-white">Zone 1 Analytics URL</div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center">
	                        <h2 class="no-margins">
	                            65%
	                        </h2>
							<div class="large">Boss Score - 77</div>
							<div class="large">Network Score - 72</div>
							<div class="slight m-t-sm c-white">Zone 2 Analytics URL</div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center">
	                        <h2 class="no-margins">
	                            35%
	                        </h2>
							<div class="large">Boss Score - 87</div>
							<div class="large">Network Score - 82</div>
							<div class="slight m-t-sm c-white">Zone 3 Analytics URL</div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center">
	                        <h2 class="no-margins">
	                            15%
	                        </h2>
							<div class="large">Boss Score - 97</div>
							<div class="large">Network Score - 92</div>
							<div class="slight m-t-sm c-white">Zone 4 Analytics URL</div>
                    </div>
            </div>
	</div>

	<!-- <div class="row">
		<div class="col-lg-3 col-xs-6 text-center">
			<div class="panel panel-filled">

				<div class="panel-body">
					<h2 class="m-b-none">
						75%
					</h2>
					<div class="large">Boss Score - 67</div>
					<div class="large">Network Score - 62</div>
					<div class="slight m-t-sm">Zone 1 Analytics URL</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6 text-center">
			<div class="panel panel-filled">
				<div class="panel-body">
					<h2 class="m-b-none">
						65%
					</h2>
					<div class="large">Boss Score - 77</div>
					<div class="large">Network Score - 72</div>
					<div class="slight m-t-sm">Zone 2 Analytics URL</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6 text-center">
			<div class="panel panel-filled">
				<div class="panel-body">
					<h2 class="m-b-none">
						35%
					</h2>
					<div class="large">Boss Score - 87</div>
					<div class="large">Network Score - 82</div>
					<div class="slight m-t-sm">Zone 3 Analytics URL</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6 text-center">
			<div class="panel panel-filled">
				<div class="panel-body">
					<h2 class="m-b-none">
						15%
					</h2>
					<div class="large">Boss Score - 97</div>
					<div class="large">Network Score - 92</div>
					<div class="slight m-t-sm">Zone 4 Analytics URL</div>
				</div>
			</div>
		</div> -->



	</div>

	<br>

	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-filled">
				<div class="panel-body">
						<div class="panel">
				<div class="panel-body">
					<table class="table table-vertical-align-middle table-responsive-sm">
						<thead>
							<tr>
								<th>
									Task Name
								</th>
								<th>
									Instance Name
								</th>
								<!-- <th>
									Event Trigger
								</th> -->
								<th>
									Status
								</th>
								<th>
									Node ID
								</th>
								<th>
									Initiator
								</th>
								<th>
									Created At
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<span class="label label-accent">Running</span>
								</td>
								<td>
									<a href="#">Fortigate</a>
								</td>
								<td>
									<div class="progress m-b-none full progress-small">
										<div style="width: 35%" class="progress-bar progress-bar-warning"></div>
									</div>
									<small>35% completed</small>
								</td>
								<td>
									<a href="#">SumeshZuse</a>
								</td>
								<td>
									<a href="#">Orchestrator</a>
								</td>
								<td>
									<a href="#">7:04pm 02-06-19</a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="label label-default">Stopped</span>
								</td>
								<td>
									<a href="#">Boss</a>
								</td>
								<td>
									<div class="progress m-b-none full progress-small">
										<div style="width: 100%" class="progress-bar progress-bar-warning"></div>
									</div>
									<small>100% completed</small>
								</td>
								<td>
									<a href="#">AndrewZuse</a>
								</td>
								<td>
									<a href="#">Orchestrator</a>
								</td>
								<td>
									<a href="#">9:37pm 02-06-19</a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="label label-default">Reboot</span>
								</td>
								<td>
									<a href="#">vMEG OS</a>
								</td>
								<td>
									<div class="progress m-b-none full progress-small">
										<div style="width: 11%" class="progress-bar progress-bar-warning"></div>
									</div>
									<small>11% completed</small>
								</td>
								<td>
									<a href="#">Xfinity-vMEG02</a>
								</td>
								<td>
									<a href="#">xMEG-1</a>
								</td>
								<td>
									<a href="#">1:32am 01-06-19</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>


</div>
@stop

@section('custom-scripts')

<script type="text/javascript" src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script type="text/javascript" src="/js/chartjs/utils.js"></script>

<script type="text/javascript">

	var utils = Samples.utils;
	var inputs = {
		min: 20,
		max: 80,
		count: 8,
		decimals: 2,
		continuity: 1
	};
	var config;

	function generateData() {
		return utils.numbers(inputs);
	}
	function generateLabels() {
		return utils.months({count: inputs.count});
	}

	utils.srand(42);

</script>


@include('layouts.admin.dashboard.charts.bwChart')

@include('layouts.admin.dashboard.charts.authChart')

@include('layouts.admin.dashboard.charts.zone1')
@include('layouts.admin.dashboard.charts.zone2')
@include('layouts.admin.dashboard.charts.zone3')
@include('layouts.admin.dashboard.charts.zone4')

</script>
@stop
