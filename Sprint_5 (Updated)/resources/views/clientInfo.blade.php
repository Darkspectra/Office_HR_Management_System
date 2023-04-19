@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row row justify-content-around">
        <div class="col-sm-4 col-sm-offset-5">
            <form action="clientInfo" method="POST">
            <div class="mb-3">
                    @csrf
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="name" name="address" class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Education</label>
                <input type="string" name="education" class="form-control" id="exampleInputNumber1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Skills</label>
                <input type="string" name="skills" class="form-control" id="exampleInputNumber1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection