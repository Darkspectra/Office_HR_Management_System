


<body>

		<style>
			table {
  			border-collapse: collapse;
  			width: 80%;
			}
			tr:hover {background-color: greenyellow;}

			.del {
				background-color: white;
			}
			.deli {
				background-color: coral;
			}
			#tx {
				width: 35%;
				margin-left: 20px;	
			}
			#cs {
				margin-left: 195px;
			}
			.num {
				margin-left: 800px;	
			}
			a.btn {
    			-webkit-appearance: button;
    			-moz-appearance: button;
    			appearance: button;

    			text-decoration: none;
    			color: initial;
			}
			body  {
  				background-image: url("https://images.hdqwalls.com/wallpapers/white-cube-pattern-4k-bu.jpg");
  				background-color: #cccccc;
			}
		</style>

<section id="header">
		<div class="row">
			<div class="col-md-2" style="font-size: 40px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/home"><button style="background-color: #f44336; font-size: 40px; color:white;"> Log out </button> </a>
			</div>
			<div class="btn" style="text-align: right">
				<a href="http://127.0.0.1:8000/showV" role="button"><button style="background-color: #4CAF50; font-size: 20px; color:white;"> Visitor's Inbox </button> </a>
				<a href="http://127.0.0.1:8000/assign" style="margin-left: 20px;"><button style="background-color: #4CAF50; font-size: 20px; color:white;"> Assign Projects </button> </a>
				<a href="http://127.0.0.1:8000/designation" style="margin-left: 20px;"> <button style="background-color: #4CAF50; font-size: 20px; color:white;"> Edit Designation </button> </a>
				<a href="http://127.0.0.1:8000/pdf" style="margin-left: 20px;"> <button style="background-color: #4CAF50; font-size: 20px; color:white;"> Download Employee Information </button> </a>
				<a href="http://127.0.0.1:8000/showCinfo" style="margin-left: 20px;"> <button style="background-color: #4CAF50; font-size: 20px; color:white;"> Client Info Details </button>  </a>
				
				<form action ="" class="col-9">
					<div class="form-group">
						<input type="search" name="search" id="" class="form-control" placeholder="search" value="{{$search}}"/>
					</div>
						<button class="btn-btn-primary">Search</button>
				</form>

			</div>
		</div>
</section>

	<section id="section1">
		<div class="title" style="font-size: 40px;color:#F2674A; text-align: center;"> Employee Number: {{ $co }} </div>
		<div class="num">
		</div>


		<table border='1' width="300px" style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
				<th class='deli'> Name </th>
                <th class='deli'> Designation </th>
				<th class='deli'> Email </th>
				<th colspan="3" class='deli'> Action </th>
			</tr>

            @foreach($membrane as $membrane)
            <tr class='row' style="padding: 5px;">
                <td class='col-md-3'> {{$membrane['Name']}} </td>
                <td class='col-md-3'> {{$membrane['Designation']}} </td>
                <td class='col-md-3'> {{$membrane['Email']}} </td>
                <td class='del'> <a href={{"update/".$membrane['id']}} data-toggle="tooltip" data-placement="bottom" title="update"><button style="background-color: #4CAF50; font-size: 20px; color:white;"> Update </button></a></td>
                <td class='del'> <a href={{"deleto/".$membrane['id']}} data-toggle="tooltip" data-placement="bottom" title="delete"><button style="background-color: #f44336; font-size: 20px; color:white;"> Delete </button> </a></td>
            </tr>
            @endforeach
        



		</table>

		<form action="/upload" id="cs" method="post" enctype="multipart/form-data">
			@csrf
			Insert employee data as .CSV file: <input type="file" name="mycsv" id="mycsv">
        	<input type="submit" value="Upload">
		</form>

	</section>

<footer id="footer">

</footer>

</body>