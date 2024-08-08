

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

   


<!-- <select id="example" name="example[]" multiple="multiple" style="width: 100%">
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
</select>

<script>

$(document).ready(function() {
    $('#example').select2({
        placeholder: 'Select an option',
        allowClear: true
    });
});


</script> -->








<!-- <select id="example" name="example[]" multiple="multiple" style="width: 100%">
    
</select>


<script>

$(document).ready(function() {
    $('#example').select2({
        placeholder: 'Select an option',
        allowClear: true,
        ajax: {
            url: '/options',
            dataType: 'json',
            processResults: function (data) {
                return {
                    results: data.map(function (item) {
                        return {
                            id: item.id,
                            text: item.name // ou toute autre propriété
                        };
                    })
                };
            }
        }
    });
});


</script> -->
    <div class="row">
            <div class="col-md-3">

            </div>
    
            <div class="container mt-5 col-md-6">

    <form >
            @csrf


            <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="libelle" class="form-label">libelle</label>
                            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrer le libelle du produit">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="prix" class="form-label">prix</label>
                            <input type="number" class="form-control" id="prix" name="prix" placeholder="Entrer le prix du produit">
                        </div>
                        </div>
                        <div>
                            <label  for="caracteristique" class="form-label">caracteristique</label>

            <select id="caracteristique" class="form-select" name="caracteristique[]" multiple="multiple" style="width: 100%">
                @foreach($options as $option)
                    <option value="{{ $option->id }}">{{ $option->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="row" class="mt-3">
                        <div class="mb-3 col-md-6">
                            <label for="categorie" class="form-label">categorie</label>
                            <select class="form-select" name="categorie" id="categorie"></select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="qtte" class="form-label">qtte en stock</label>
                            <input type="number" class="form-control" id="qtte" name="qtte" placeholder="Entrer la quantite en stock">
                        </div>
                        </div>

                        <div class="form-outline" data-mdb-input-init>
                        <label class="form-label" for="description">description</label>
    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
    </div>
    <div class="mb-3 ">
                            <label for="image" class="form-label">image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="veuillez entrer les images du produits ">
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-lg rounded-pill me-3" style="background-color: rgb(12, 165, 91)">Submit</button>
                                <button type="submit" class="btn btn-danger btn-lg rounded-pill ms-3" style="color: rgb(10, 9, 9)">Reset</button>
                            </div>
                            
                        </div>
        </form>
        </div>

        <div class="col-md-3">

    </div>
     <script>
        $(document).ready(function() {
            $('#caracteristique').select2({
                placeholder: 'Select options',
                allowClear: true
            });
        });
    </script>