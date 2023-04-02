@extends('master')
@section("content")
<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/designation" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Designation info </div>

		<form action="/updateD" class="form_design" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
			Designation: <input type="text" name="Designation" value="{{$data['designation']}}"> <br>
			Seat: <input type="text" name="Seat" value="{{$data['seat']}}"> <br>
			Benefits: <input type="text" name="Benefits" value="{{$data['benefits']}}"> <br>
			<br>
			<input type="submit" name="submit" value="Update">
		</form>
	</section>

<footer id="footer">

</footer>

</body>
</html>