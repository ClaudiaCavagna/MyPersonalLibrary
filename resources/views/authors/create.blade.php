<x-main>
    <h1 class="text-center text-color text-decoration-underline mt-3">Aggiungi autore</h1>

    <form action="{{route('authors.store')}}" method="POST">
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
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    @error('name')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Cognome</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="{{old('surname')}}">
                    @error('surname')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nation" class="form-label">Nazionalità</label>
                    <input type="text" class="form-control" id="nation" name="nation" value="{{old('nation')}}">
                    @error('nation')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Data di nascita</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{old('birth_date')}}">
                    @error('birth_date')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-color">Aggiungi</button>
                </div>
            </div>
        </div>
    </form>
</x-main>