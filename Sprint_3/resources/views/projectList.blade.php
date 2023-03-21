
<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/assign" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Employee info </div>

		<form action="assign" class="form_design" method="POST">
            @csrf
            <!-- <input type="hidden" name="id" value="{{$data['id']}}"> -->
			Project Name: <input type="text" name="pro" class="form-control"> <br>
			Project ID: <input type="text" name="idna" class="form-control"> <br>
            Duration: <input type="text" name="dura" class="form-control"> <br>
            Name: <input type="text" name="name" value="{{$data['Name']}}"> <br>
            Email: <input type="text" name="email" value="{{$data['Email']}}"> <br>
			<br>
			<input type="submit" name="submit" value="Assign">
		</form>
	</section>

<footer id="footer">

</footer>

</body>
</html>