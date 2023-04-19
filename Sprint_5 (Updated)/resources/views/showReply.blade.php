@extends('master')
<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/showV"><button style="background-color: #89CFF0; font-size: 40px; color:white;"> Back </button> </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Employee info </div>

		<form action="showV" class="form_design" method="POST">
            @csrf
            <!-- <input type="hidden" name="id" value="{{$data['id']}}"> -->
            Name: <input type="text" name="name" value="{{$data['name']}}"> <br>
            Quaries: <input type="text" name="ques" value="{{$data['quaries']}}"> <br>
            Reply: <input type="text" name="reply" class="form-control"> <br>
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</section>

<footer id="footer">

</footer>

</body>
</html>