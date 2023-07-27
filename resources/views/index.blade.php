<x-main>
    <div class="my-3 text-center text-color">
        <h1 class="text-decoration-underline mb-3">I tuoi libri</h1>
        @foreach ($books as $book)
        <a href="{{route('books.show', ['book'=>$book['id']])}}">
            <li>{{$book['title']}} - {{$book->author}}</li>
        </a>
        @endforeach
    </div>
    <div class="my-5 text-center">
        <a href="{{route('books.create')}}">
            <button type="submit" class="btn btn-color">Aggiungi libro</button>
        </a>
    </div>
</x-main>