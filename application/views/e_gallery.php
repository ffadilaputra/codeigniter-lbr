<?php $this->load->view('partials/header') ?>

<?php foreach($get as $data): ?>

    <div class="container">
	<div class="row">
		<?php echo form_open_multipart('gallery/update')?>
        <input name="id" type="hidden" value="<?= $data->id ?>"/>
        <div class="col-md-6">
			<div class="form-group">
				<label for="">Tittle</label>
				<input value="<?php echo $data->title ?>" type="text" class="form-control" name="title">
			</div>

           <div class="form-group">
				<img class="img-responsive" src="<?= base_url('assets/upload/') ?><?= $data->image ?>">
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


<?php endforeach;?>

<?php $this->load->view('partials/footer') ?>