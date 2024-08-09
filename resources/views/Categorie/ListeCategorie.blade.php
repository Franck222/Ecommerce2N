<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorie</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
               <div class="row"> 
                    <div class="col"> <h1>Liste des catégories</h1></div> 
                    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
                 @endif 
                 @if(session('statue'))
    <div class="alert alert-success">
        {{ session('statue') }}
    </div>
                 @endif   
                    <div class="col"><i class="fas fa-plus"></i><a href="">Ajouter une nouvelle catégorie</a></div>
               </div>
                <br>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nom de la catégorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->nomCat}}</td>
                            <td>
                                <a href="/ModifierCategorie/{{$category->id}}" ><i class="fas fa-edit me-5"></i></a> 
                                <a href="/SupprimerCategorie/{{$category->id}}"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"src=  "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
</body>
</html>