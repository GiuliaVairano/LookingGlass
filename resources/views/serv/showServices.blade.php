<x-layout>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row">
                <div class="col12 col.md-6">
                    <h1>Service {{$service['title']}} Details: </h1>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card" >
                        <img src="{{$service['img']}}" class="card-img-top" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">{{$service['title']}}</h5>
                            <p class="card-text">{{$service['type']}}</p>
                            <h6>Price:</h6>
                            <a href="" class="btn btnServ">{{$service['price']}}</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    </x-layout>
    