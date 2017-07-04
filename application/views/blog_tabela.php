<?php $this->load->view('partials/header'); ?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<a href="<?= base_url('blog/store') ?>" class="btn btn-default"><i class="fa fa-arrow-up"></i>&nbsp;Create a Article</a>
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tittle</th>
						<th>Content</th>
						<th>Date</th>
						<th>Category</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($blog as $data): ?>
					<tr>
						<td><?= $data->id ?></td>
						<td><?= $data->title ?></td>
						<td><?= $data->content ?></td>
						<td><?= $data->date ?></td>
						<td><?= $data->category_name ?></td>
						<td>
							<a href="#" class="btn btn-default"><i class="fa fa-pencil"></i></a>
							<a href="#" class="btn btn-default"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer'); ?>