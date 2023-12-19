<x-layout>

<div class="container d-flex align-items-center justify-content-center">
    <div class="row justify-content-center">
        <div>
                <h1 class="mx-2 my-3">Our Services for you:</h1>
        </div>
        @foreach ($services as $service)
            <div class="col-12 col-md-3 p-5">
                <div class="card">
                    <img src="{{$service['img']}}" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">{{$service['title']}}</h5>
                        <p class="card-text">{{$service['type']}}</p>
                        <h6>Price:</h6>
                        <a href="{{route('servicesShow',['serviceId' => $service['id']])}}" class="btn btnServ">{{$service['price']}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>
