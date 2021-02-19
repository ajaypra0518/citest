<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="<?= base_url('upload/resize_image.jpg') ?>" alt="">
   <form action="<?= base_url('Welcome/resize_image') ?>" method="POST">
   <div>Width</div>
   <input type="text" name="width"><br>
   <div>Height</div>
   <input type="text" name="height"><br><br>
   <button type="submit" >Resize</button>
   </form>
</body>
</html>