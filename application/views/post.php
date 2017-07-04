<?php $this->load->view('partials/header') ?>
<br>
<div class="container">
    <div class="form-group">
        <a class="btn btn-default" href="<?= base_url('blog') ?>"><i class="fa fa-arrow-up"></i>&nbsp;Back</a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= form_open('blog/store'); ?>
            <div class="form-group">
                <label for="">Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="" rows="10" class="form-control"></textarea>
            </div>
             <div class="form-group">
                <label for="">Post date</label>
                <input name="date" id="datepicker" type="text" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="fk_category" class="form-control" required="required">
                <?php foreach($category as $ab): ?>
                    <option value="<?= $ab->id ?>"><?= $ab->category_name ?></option>
                <?php endforeach; ?>    
                </select> 
            </div>
            <div class="form-group">
                <label for="">Posted by</label>
                <select name="posted_by" class="form-control" required="required">
                    <option value="Ivan Fadila Putra">Ivan Fadila Putra</option>
                    <option value="Christian Bale">Christian Bale</option>
                    <option value="Christoper Nolan">Christoper Nolan</option>
                </select> 
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
                <input type="reset" class="btn btn-danger">
            </div>
               <?= form_close(); ?>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer') ?>