<br>
<?php $this->load->view('partials/header'); ?>
<?php foreach ($emp as $data): ?>
<div class="container">
    <div class="form-group">
        <a class="btn btn-default" href="<?php echo base_url('blog') ?>"><i class="fa fa-arrow-up"></i>&nbsp;Back</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                        <h3><?php echo $data->title ?></h3>
                        <hr>
                        <p><?php echo $data->content ?></p>
                        <hr>
                        <h4>Post date <?php echo $data->date ?></h4><h5 class="text-primary">Posted by <?php echo $data->posted_by ?></h5>
                </div>
                </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php $this->load->view('partials/footer'); ?>