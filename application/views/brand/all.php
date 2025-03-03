<div class="container">
    <div class="card">
        <div class="card-header">
            All Brand
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($brands as $key => $brand) { ?>
                        <tr>
                            <th scope="row"><?php echo $key ?></th>
                            <td><?php echo $brand->title ?></td>
                            <td><?php echo $brand->description ?></td>
                            <td><img src="<?php echo base_url('uploads/brands/' . $brand->image) ?>" width="150" height="150" alt=""></td>
                            <td>
                                <span class="badge <?= ($brand->status === 1) ? 'text-success' : 'text-danger'; ?>">
                                    <?= ($brand->status === 1) ? "Active" : "Inactive"; ?>
                                </span>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="<?php echo base_url('brand/edit/' . $brand->id)?>">Edit</a>
                                <a class="btn btn-danger" href="<?php echo base_url('brand/delete/' . $brand->id)?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>