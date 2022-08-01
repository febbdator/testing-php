<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
    <div class="card mt-5 mx-auto w-25">
        <div class="card-header">
            <h1 class="h3"> Arithmetc </h1>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="row mb-2">
                    <div class="col">
                        <label for="num1"> First Number </label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="num1">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <label for="num2"> Second Number </label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="num2">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100" name="btn_submit"> Submit </button>
            </form>
        </div>
    </div>


</body>
</html>