@extends('master')
<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/list"><button style="background-color: #89CFF0; font-size: 40px; color:white;"> Back </button> </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Employee info </div>

		<form action="/update" class="form_design" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
			Name: <input type="text" name="name" value="{{$data['Name']}}"> <br>
			Designation: <input type="text" name="designation" value="{{$data['Designation']}}"> <br>
			Email: <input type="text" name="email" value="{{$data['Email']}}"> <br>
			<br>
			<input type="submit" name="submit" value="Update">
		</form>
	</section>

<footer id="footer">

</footer>

</body>
</html>