<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-4">

        </div>
   
        <div class="container mt-5 col-md-4">
            <div class="card p-4">
                <h2 class="text-center mb-4">Modifier Categorie</h2>
                <hr>

                <form action="{{ route('UpdateCategorie') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom Categorie</label>
                        <input value="{{$categories->nomCat}}" type="text" class="form-control" id="name" name="categorie" placeholder="Entrer le nom de la categorie">
                        <input value="{{$categories->id}}" type="text" class="form-control" id="id" hidden name="id" placeholder="Entrer le nom de la categorie">
                    </div>
                    <div class="row">
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-lg rounded-pill me-1" style="background-color: rgb(12, 165, 91)">Submit</button>
                            <button type="reset" class="btn btn-danger btn-lg rounded-pill ms-1" style="color: rgb(10, 9, 9)">Reset</button>
                        </div>
                        
                    </div>
                  
                </form>
            </div>
        </div>
        <div class="col-md-4">

        </div>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"src=  "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
</body>
</html>
