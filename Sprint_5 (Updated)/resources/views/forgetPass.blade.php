
<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/Hlogin" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> HR info </div>

		<form action="/forgetPass" class="form_design" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
			ID: <input type="text" name="ID_no" value="{{$data['ID_no']}}"> <br>
			Email: <input type="text" name="Email" value="{{$data['Email']}}"> <br>
			Password: <input type="text" name="Password" value="{{$data['Password']}}"> <br>
			<br>
			<input type="submit" name="submit" value="Change">
		</form>
	</section>
    

<footer id="footer">

</footer>

</body>
</html>