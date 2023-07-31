<x-main>
    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="d-flex justify-content-center text-center my-5">
            <div class="w-75 ">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    @error('title')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author_id" class="form-check-label">Autore</label>
                    <select class="form-select" aria-label="author_id" name="author_id">
                        <option selected>Seleziona un autore...</option>
                        @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="year">Anno di pubblicazione</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{old('year')}}">
                    @error('year')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="pages">Numero di pagine</label>
                    <input type="number" class="form-control" id="pages" name="pages" value="{{old('pages')}}">
                    @error('pages')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Genere</label>
                    @foreach ($categories as $category)
                    <div class="form-check">
                        <input class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}" id="categories-{{$category->id}}">
                        <label class="form-check-label" for="categories-{{$category->id}}">
                            {{$category->name}}
                        </label>
                    </div>
                    @endforeach
                    @error('categories')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="image">Immagine di copertina</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-color">Aggiungi</button>
                </div>
            </div>
        </div>
    </form>
</x-main>