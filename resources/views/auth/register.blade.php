<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center pb-5">Register to be actively part of our community</h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" aria-label="Username" placeholder="username" aria-describedby="basic-addon1" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btnServ">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
