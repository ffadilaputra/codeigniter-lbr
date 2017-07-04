<?php $this->load->view('partials/header') ?>
<br>
<br>
<div class="container">
	<div class="row">
		<?php if($this->session->flashdata('msg_success')): ?>
		<div class="alert alert-success alert-dismissible wow bounce" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<strong><?php echo $this->session->flashdata('msg_success'); ?></strong>
		</div>
		<?php endif; ?>
		<?php foreach($get as $data): ?>
		<input type="hidden" value="<?= $data->id ?>" />
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<img class="img-responsive" src="<?= base_url('assets/upload/') ?><?= $data->image ?>">
				</div>
				<div class="panel-footer">
					<?php echo $data->title ?>
					<a href="<?= base_url().'gallery/edit/'.$data->id ?>" class="btn btn-danger pull-right wow bounce"><i class="fa fa-edit"></i></a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<?php $this->load->view('partials/footer') ?>
