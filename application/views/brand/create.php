

<div class="container">
    <div class="card">
        <div class="card-header">
            Create Brand
        </div>

        <?php
        if ($this->session->flashdata('success')) { ?>

            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success') ?>
            </div>

        <?php
        } elseif ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error') ?>
            </div>
        <?php } ?>

        <div class="card-body">
            <form action="<?php echo base_url('brand/store') ?>" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span class="text text-danger"> <?php echo form_error('title'); ?></span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" id="exampleInputPassword1">

                    <span class="text text-danger"> <?php echo form_error('slug'); ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1">

                    <span class="text text-danger"> <?php echo form_error('description'); ?></span>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>