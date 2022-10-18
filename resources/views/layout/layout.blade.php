<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>layout</title>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center bg-success py-2 text-capitalize">welcometo our teacher management page:</h3>
        <div class="row">
            <div class="col-md-3">
                <h2>sidebar</h2>
                @yield("sidebar")
            </div>
            <div class="col-md-9">
                @yield("content")
            </div>
        </div>
        <h3 class="text-center bg-success py-2 text-capitalize">@copy;Md:Nur-nobi islam</h3>
    </div>
</body>
</html>
