@extends("layouts.app")

@section("content")

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h4 class="uppercase mb16">Adaugă un produs nou</h4>
                <p class="lead mb64">
                    Produsul va fi prezent în meniul public.
                </p>
                <form action="{{ action('ProductsController@store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <label class="input-with-label text-left">
                    Română
                    <hr>
                </label>
                <input type="text" placeholder="Nume produs" name="name_ro" required/>
                <div class="input-with-label text-left">
                    <span>Categoria produsului:</span>
                </div>
                <select id="categories" name="categ" required>
                    <option value="pasta" selected>Paste</option>
                    <option value="desert">Desert</option>
                    <option value="drinks">Băuturi</option>
                    <option value="extra">Extra</option>
                </select>
                <textarea placeholder="Descrierea produslui" rows="3" name="desc_ro" required></textarea>

                <hr>
                <label class="input-with-label text-left">
                    English
                    <hr>
                </label>
                <input type="text" placeholder="Product name" name="name_en" required/>

                <textarea placeholder="Product description" rows="3" name="desc_en" required></textarea>
                <hr>
                <input id="price" type="text" placeholder="Pret produs (lei)" onblur="transformToMoney()" name="price" required/>
                <input type="file" id="file-upload" name="cover_image" required />
                <label for="file-upload" class="btn btn-primary text-dark">Incarcă poza produsului</label>
                <div id="file-upload-filename"></div>

                <button type="submit">Adaugă produsul</button>
            </form>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<script>
    function transformToMoney()
    {
    console.log("called");
    var x = document.getElementById("price");
    var val = x.value;
    x.value = parseFloat(val)+" Lei";
    }

    var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'Nume fisier: ' + fileName;
}
</script>
@endsection