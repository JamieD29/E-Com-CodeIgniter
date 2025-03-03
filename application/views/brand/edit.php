<div class="container">
    <div class="card">
        <div class="card-header">
            Edit Brand
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
            <form action="<?php echo base_url('brand/update/' . $brand->id) ?>" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title" value="<?= $brand->title ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span class="text text-danger"> <?php echo form_error('title'); ?></span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input type="text" name="slug" value="<?= $brand->slug ?>" class="form-control" id="exampleInputPassword1">

                    <span class="text text-danger"> <?php echo form_error('slug'); ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" name="description" value="<?= $brand->description ?>" class="form-control" id="exampleInputPassword1">

                    <span class="text text-danger"> <?php echo form_error('description'); ?></span>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                    <img src="<?php echo base_url('uploads/brands/' . $brand->image) ?>" width="150" height="150" alt="">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <?php if ($brand->status == 1) { ?>
                            <option selected value="1">Active</option>
                            <option value="0">Inactive</option>
                        <?php } else { ?>
                            <option selected value="1">Active</option>
                            <option value="0">Inactive</option>
                        <?php } ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>