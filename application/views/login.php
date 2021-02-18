<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        form {
            border: 1px solid green;
            padding: 10px;
            border-radius: 5px;
            ;
        }

        .myclass {
            color: red;
        }
    </style>

</head>

<body>
    <?= $this->session->userdata('login_user');
    $user = $this->session->userdata('login_user');
    print_r($user);
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <form action="<?php echo base_url(); ?>Login/mylogin" method="POST">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="form-group ">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <p class="myclass"><?php echo $this->session->flashdata('message'); ?></p>
                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>