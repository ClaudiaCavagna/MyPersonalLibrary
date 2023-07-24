<x-main>
    <div class="d-flex justify-content-center text-center my-5">
        <div>
            <h1 class="text-color text-decoration-underline">{{$book['title']}}</h1>
            <h3 class="text-color mb-4">{{$book['author']}}</h3>
            <img src="{{empty($book->image)?Storage::url('images/default.png'):Storage::url($book->image)}}" alt="immagine copertina libro">

            <p class="text-color">Anno di pubblicazione: {{$book['year']}}</p>
            <p class="text-color">Pagine: {{$book['pages']}}</p>
        </div>
    </div>
</x-main>



