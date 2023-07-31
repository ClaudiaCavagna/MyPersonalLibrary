<x-main>
    <div class="my-3 text-center text-color">
        <h1 class="text-decoration-underline mb-3">Autori</h1>
        @foreach ($authors as $author)
            <li>{{$author->name}} {{$author->surname}} - {{$author->nation}}, {{$author->birth_date}}</li>
        @endforeach
    </div>
</x-main>