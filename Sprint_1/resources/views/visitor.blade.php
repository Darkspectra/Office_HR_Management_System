@extends('master')
@section("content")
<body>
    <div class="title"> <h1> Visitor Portal</h1> </div>
</body>
<div class="container custom-visitor">
    <div class="row row justify-content-around">
        <div class="col-sm-4 col-sm-offset-5">
            <form action="login" method="POST">
            <div class="mb-3">
                    @csrf
                <label for="exampleInputPassword1" class="form-label">Your quaries</label>
                <input type="name" name="name" class="form-control" id="exampleInputName1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection