@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row row justify-content-around">
        <div class="col-sm-4 col-sm-offset-5">
            <form action="insertDesignation" method="POST">
            <div class="mb-3">
                    @csrf
                <label for="exampleInputPassword1" class="form-label">Designation</label>
                <input type="name" name="designation" class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Seat</label>
                <input type="string" name="seat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Benefits</label>
                <input type="string" name="benefits" class="form-control" id="exampleInputNumber1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection