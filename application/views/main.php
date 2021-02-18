<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link href="<?php //echo base_url();
                        ?>assets/style.css" rel="stylesheet"> -->
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
            <?php echo $this->session->flashdata('message'); ?>
                <form action="<?php echo base_url(); ?>User/val" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo set_value('name'); ?>">
                        <span class="text-danger"><?= form_error('name'); ?> </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo set_value('email'); ?>">
                        <span class="text-danger"><?= form_error('email'); ?> </span>
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>