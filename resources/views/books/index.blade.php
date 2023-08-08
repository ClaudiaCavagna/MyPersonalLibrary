<x-main>
    @if (session('success')) 
    <div id="session_success" class="justify-content-center" style="display: flex;">
        <div class="text-center bg-success bg-opacity-25 text-success my-2 px-4 py-2 fs-4 fw-semibold">{{session('success')}}</div> 
    </div>
    @endif
    <div class="container text-center mt-5">
        <p class="d-inline-flex gap-1">
            <a class="btn btn-light text-color" data-bs-toggle="collapse" href="#books" role="button" aria-expanded="false" aria-controls="books">
                Libri
            </a>
            <button class="btn btn-light text-color" type="button" data-bs-toggle="collapse" data-bs-target="#authors" aria-expanded="false" aria-controls="authors">
                Autori
            </button>
        </p>
        <div class="collapse" id="books">
            <div class="card card-body">
                <table class="table">
                    <thead>
                        <h4 class="text-color text-decoration-underline">Libri</h4>
                        <tr>
                            <th scope="col" class="text-color">Titolo</th>
                            <th scope="col" class="text-color">Autore</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author->name}} {{$book->author->surname}}</td>
                            <td>
                                <a href="{{route('books.show', ['book'=>$book->id])}}">
                                    Dettagli
                                </a>
                            </td>
                            <td>
                                <form action="{{route('books.destroy', compact('book'))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('books.edit', ['book'=>$book->id])}}" class="btn">
                                        <i class="bi bi-pencil-square text-warning me-2"></i>
                                    </a>
                                    <button type="submit" class="btn">
                                        <i class="bi bi-trash3-fill text-danger ms-2"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="collapse mt-3" id="authors">
            <div class="card card-body">
                <table class="table">
                    <thead>
                        <h4 class="text-color text-decoration-underline">Autori</h4>
                        <tr>
                            <th scope="col" class="text-color">Cognome</th>
                            <th scope="col" class="text-color">Nome</th>
                            <th scope="col" class="text-color">Data di nascita</th>
                            <th scope="col" class="text-color">Nazionalità</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)
                        <tr>
                            <td>{{$author->surname}}</td>
                            <td>{{$author->name}}</td>
                            <td>{{$author->birth_date}}</td>
                            <td>{{$author->nation}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-main>