<x-layout>
    <h5 class="text-center pt-5">Sell your items</h5>
    <h1 class="text-center pb-5">Insert Announcement:</h1>


    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

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
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('Ann.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Insert Title:</label>
                        <input type="text" name="title" class="form-control" id="title"
                            aria-describedby="textHelp" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Insert Description:</label>
                        <input type="text" name="body" class="form-control" id="body"
                            aria-describedby="textHelp" value="{{old('body')}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Insert Price:</label>
                        <input type="number" name="price" class="form-control" id="price"
                            aria-describedby="numHelp" value="{{old('price')}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Upload Img:</label>
                        <input type="file" name="img" class="form-control" id="img"
                            aria-describedby="textHelp">
                    </div>
                    <button type="submit" class="btn btnServ">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
