@extends('master')
@section("content")
<body>
    <div class="title"> <h1> HR Portal</h1> </div>
</body>
<div class="container custom-login">
    <div class="row row justify-content-around">
        <div class="col-sm-4 col-sm-offset-5">
            <form action="/Hlogin" method="POST">
            <div class="mb-3">
                @csrf
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
    
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID</label>
                <input type="password" name="password" class="form-control" id="exampleInputNumber1">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            <div class="col-md-10" style="text-align: right">
				<a href="http://127.0.0.1:8000/Hcred" style="margin-left: 20px;"> Forget ID ? </a> 
			</div>


            </form>
        </div>
    </div>
</div>
@endsection