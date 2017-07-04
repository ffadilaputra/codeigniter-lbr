<?php $this->load->view('partials/header'); ?>
<br>
<div class="row">
	<div class="col-md-3">
		<div class="container-fluid">
			<?= form_open('category/add'); ?>
			<div class="form-group">
				<label>Category Name</label>
				<input type="text" class="form-control" name="c_category">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success">
			</div>
			<?= form_close() ?>
		</div>
	</div>
		<div class="col-md-6">
		<div class="container-fluid">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Category Name</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($list as $data): ?>
					<tr>
						<td><?= $data->id ?></td>
						<td><?= $data->category_name ?></td>
						<td>
							<a href="#" class="btn btn-default">Edit</a>
							<a href="#" class="btn btn-default">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer'); ?>