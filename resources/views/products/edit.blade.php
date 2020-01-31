@extends("layouts.app")

@section("content")

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h4 class="uppercase mb16">Modifica un produs existent</h4>
                <p class="lead mb64">
                    Produsul va fi actualizat în meniul public.
                </p>
                <form action="{{ action('ProductsController@update', $product->id) }}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                    <label class="input-with-label text-left">
                    Română
                    <hr>
                </label>
                <div class="input-with-label text-left">
                    <span>Nume produs:</span>
                </div>
                <input type="text" placeholder="Nume produs" name="name_ro" value="{{$product->name_ro}}"/>
                <div class="input-with-label text-left">
                    <span>Categoria produsului:</span>
                </div>
                <select id="categories" name="categ">
                    <option value="pasta" selected>Paste</option>
                    <option value="desert">Desert</option>
                    <option value="drinks">Băuturi</option>
                    <option value="extra">Extra</option>
                </select>
                <div class="input-with-label text-left">
                    <span>Descriere produs:</span>
                </div>
                <textarea placeholder="Descrierea produslui" rows="3" name="desc_ro" >{{$product->desc_ro}}</textarea>

                <hr>
                <label class="input-with-label text-left">
                    English
                    <hr>
                </label>
                <div class="input-with-label text-left">
                    <span>Product name:</span>
                </div>
                <input type="text" placeholder="Product name" name="name_en" value="{{$product->name_en}}"/>
                <div class="input-with-label text-left">
                    <span>Product description:</span>
                </div>
                <textarea placeholder="Product description" rows="3" name="desc_en" >{{$product->desc_en}}</textarea>
                <hr>
                <div class="input-with-label text-left">
                    <span>Preț produs:</span>
                </div>
                <input id="price" type="text" placeholder="Pret produs (lei)" onblur="transformToMoney()" name="price" value="{{$product->price}}"/>
                <input type="file" id="file-upload" />
                <label for="file-upload" class="btn btn-primary text-dark">Incarcă poza produsului</label>
                <div id="file-upload-filename"></div>

                <button type="submit">Modifică produsul</button>
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