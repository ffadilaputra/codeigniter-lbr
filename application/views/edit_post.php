<br>
<?php $this->load->view('partials/header') ?>
<?php foreach ($emp as $data): ?>
<div class="container">
     <div class="form-group">
        <a class="btn btn-default" href="<?php echo base_url('blog') ?>"><i class="fa fa-arrow-up"></i>&nbsp;Back</a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php echo form_open('blog/update'); ?>
            <input type="hidden" name="id" value="<?php echo $data->id ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input name="title" type="text" class="form-control" value="<?php echo $data->title ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="" rows="10" class="form-control"><?php echo $data->content ?></textarea>
            </div>
             <div class="form-group">
                <label for="">Post date</label>
                <input name="date" id="datepicker" type="text" class="form-control" value="<?php echo $data->date ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Posted by</label>
                <select name="posted_by" class="form-control" value="<?php echo $data->posted_by ?>" required="required">
                    <option value="Ivan Fadila Putra">Ivan Fadila Putra</option>
                    <option value="Christian Bale">Christian Bale</option>
                    <option value="Christoper Nolan">Christoper Nolan</option>
                </select> 
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
                <input type="reset" class="btn btn-danger">
            </div>
               <?php echo form_close(); ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php $this->load->view('partials/footer') ?>