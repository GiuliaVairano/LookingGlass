<x-layout>

    <h1 class="text-center py-3">All our Announcements:</h1>

    <div class="container">
        <div class="row">
            
                @foreach ($announcements as $annuncio)
                <div class="col-12 col-md-3">
                <x-card
                price="{{$annuncio->price}}"
                title="{{$annuncio->title}}"
                body="{{$annuncio->body}}"
                img="{{Storage::url($annuncio->img)}}"
                id="{{$annuncio->id}}"
                />
            </div>
            @endforeach
        </div>
    </div>

</x-layout>