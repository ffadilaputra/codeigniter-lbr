<?php $this->load->view('partials/header') ?>
<br>
    <div class="container">
        <div class="form-group">
        <a class="btn btn-default" href="<?php echo base_url('blog/store') ?>"><i class="fa fa-arrow-up"></i>&nbsp;Create a Post</a>
        <a class="btn btn-default" href="<?php echo base_url('Login/logout') ?>"><i class="fa fa-close"></i>&nbsp;Logout</a>
    </div>
    <div class="row">
        <?php foreach($blog as $data): ?>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                        <h4><?php echo $data->title; ?></h4>
                        <hr>
                        <div class="container">
                            <p><?php echo $data->content; ?></p>
                            <h5>Posted On : <?php echo $data->date; ?></h5>
                            <h5>By : <?php echo $data->posted_by; ?></h5>
                        </div> 
                </div>
                <div class="panel-footer ">
                        <a class="btn btn-default" href="<?php echo base_url('blog/details/'.$data->id); ?>">ReadMore</a>
                        <a class="btn btn-success" href="<?php echo base_url('blog/edit/'.$data->id); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('blog/delete/'.$data->id); ?>">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->load->view('partials/footer') ?>