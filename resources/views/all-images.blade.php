<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>All Images</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 text-center my-5">
                <h1 class="display-2">All Images</h1>
            </div>
            @foreach($images as $image)
            <div class="col-lg-4 col-sm-4 col-md-4 mb-3">
                <?php $rasm = $image->image_path;
                 echo $rasm; ?>
                
            </div>
            @endforeach
        </div>
    </div>




</body>

</html>