<div class="container">
    <h3>Login</h3>
    <?php
    if($this->session->flashdata('success')){?>

    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success')?>
    </div>

    <?php
    } elseif($this->session->flashdata('error')){?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error')?>
    </div>
    <?php } ?>
    

    <form action="<?php echo base_url('login-user')?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php echo form_error('email');?>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <?php echo form_error('password');?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>