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
				<?php foreach($list as $data): ?>
					<tr>
						<td><?php echo $data->title; ?></td>
						<td><?php echo $data->content; ?></td>
						<td><?php echo $data->date; ?></td>
						<td><?php echo $data->posted_by; ?></td>
					</tr>
				<?php endforeach; ?>	
				</tbody>
			</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer-cust'); ?>