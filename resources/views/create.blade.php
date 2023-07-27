<x-main>
    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-center text-center my-5">
            <div class="w-75 ">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-check-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="year">Anno di pubblicazione</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{old('year')}}">
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="pages">Numero di pagine</label>
                    <input type="number" class="form-control" id="pages" name="pages" value="{{old('pages')}}">
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="category_id">Genere</label>
                    <select class="form-select" aria-label="Default select example" name="category_id" value="{{old('category_id')}}">
                        <option selected>Seleziona un genere...</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                        @endforeach
                    </select>
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