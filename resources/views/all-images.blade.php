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
            <?php foreach (json_decode($image->image_path) as $picture) { ?>
                <div class="col-lg-4 col-sm-12 col-md-6 mb-3">
                    <img src="uploads/{{$picture}}" alt="{{$picture}}" style="width: 100%; height: auto;">
                </div>
            <?php } ?>
            @endforeach
        </div>
    </div>




</body>

</html>