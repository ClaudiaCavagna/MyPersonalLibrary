<x-main>
    <div class="p-4 container mt-5 shadow text-center">
        <h1 class="text-color text-center text-decoration-underline mt-5">Registrati</h1>
        
        <form action="{{route('register')}}" method="POST">
            @method('POST')
            @csrf
            <div class="d-flex justify-content-center text-center my-5">
                <div class="w-75 ">
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    @error('password_confirmation')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mt-5">
                        <button type="submit" class="btn btn-color">Registrati</button>
                    </div>
                    
                    <p class="mt-3">Hai già un account? 
                        <a href="{{route('login')}}">Accedi qui</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</x-main>