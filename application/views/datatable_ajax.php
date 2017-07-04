<?php $this->load->view('partials/header-cust'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					<table id="list" class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Content</th>
						<th>Date</th>
						<th>Posted by</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/ajax'); ?>