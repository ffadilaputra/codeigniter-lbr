<?php $this->load->view('partials/header') ?>
<br>
<div class="container">
	<div class="row">
		<?php echo form_open_multipart('gallery/store')?>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Tittle</label>
				
				<input type="text" class="form-control" name="title">
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file" class="form-control" name="image">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-default">
			</div>
		</div>
        <?php echo form_close()?>
	</div>
</div>

<?php $this->load->view('partials/header') ?>
