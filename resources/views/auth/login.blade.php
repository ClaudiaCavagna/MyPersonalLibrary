<x-main>
    <div class="p-4 container mt-5 shadow text-center">
        <h1 class="text-color text-center text-decoration-underline mt-5">Accedi</h1>
    
        <form action="{{route('login')}}" method="POST">
            @method('POST')
            @csrf
            <div class="d-flex justify-content-center text-center my-5">
                <div class="w-75 ">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    @error('password')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mt-5">
                        <button type="submit" class="btn btn-color">Accedi</button>
                    </div>
                    
                    <p class="mt-3">Non sei ancora registrato? 
                        <a href="{{route('register')}}">Registrati qui</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</x-main>
        