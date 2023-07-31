<x-main>
    <div class="container justify-content-center m-5">
        <div class="row">
            <div class="col-6">
                <img src="{{empty($book->image)?Storage::url('images/default.png'):Storage::url($book->image)}}" alt="immagine copertina libro">
            </div>
            <div class="col-6">
            <h1 class="text-color text-decoration-underline">{{$book->title}}</h1>
            <h3 class="text-color mb-4">{{$book->author}}</h3>
            <p class="text-color">Anno di pubblicazione: {{$book->year}}</p>
            <p class="text-color">Pagine: {{$book->pages}}</p>
            <p class="text-color">Genere:@foreach ($book->categories as $category) {{$category->name}} @endforeach</p>
            </div>
        </div>
    </div>
</x-main>



