<div class="card">
    <img src="{{$img}}" class="card-img-top mg" alt="img">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Price: {{$price}}</h6>
        <p class="card-text">{{$body}}</p>
        <a href="{{route('Ann.show',['id'=>$id])}}" class="btn btnServ">Wiew</a>
    </div>
</div>
