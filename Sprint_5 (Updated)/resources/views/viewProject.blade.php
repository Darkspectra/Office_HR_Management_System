

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
			body  {
  				background-image: url("https://images.hdqwalls.com/wallpapers/white-cube-pattern-4k-bu.jpg");
  				background-color: #cccccc;
			}
		</style>

<section id="header">
		<div class="row">
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/home"><button style="background-color: #f44336; font-size: 40px; color:white;"> Log out </button> </a>
			</div>
		</div>

        <div class="col-md-2" style="font-size: 30px;color:#F2674A; text-align: right;">
			<a href="http://127.0.0.1:8000/clientInfo" style="margin-left: 20px;"><button style="background-color: #4CAF50; font-size: 20px; color:white;"> Add Personal Information </button> </a>
		</div>
        <form action ="" class="col-9">
			<div class="form-group" style="text-align: right">
				<input type="search" name="search" id="" class="form-control" placeholder="search" value="{{$search}}"/>
				<button class="btn-btn-primary">Search</button>
            </div>
		</form>
</section>

	<section id="section1">
		<div class="title" style="font-size: 40px;color:#F2674A; text-align: center;"> Tasks </div>
		<div class="num">
		</div>
		<table border='1' width="300px" style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
                <th class='deli'> Project Name </th>
                <th class='deli'> Project ID </th>
                <th class='deli'> Duration </th>
				<th class='deli'> Name </th>
				<th class='deli'> Email </th>
			</tr>

            @foreach($membrane as $member)
            <tr class='row' style="padding: 5px;">
                <td class='col-md-3'> {{$member['ProjectName']}} </td>
                <td class='col-md-3'> {{$member['ProjectID']}} </td>
                <td class='col-md-3'> {{$member['Duration']}} </td>
                <td class='col-md-3'> {{$member['Name']}} </td>
                <td class='col-md-3'> {{$member['Email']}} </td>
            </tr>
            @endforeach

		</table>


	</section>

<footer id="footer">

</footer>

</body>