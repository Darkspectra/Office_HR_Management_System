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
				<a href="http://127.0.0.1:8000/vlogin"><button style="background-color: #89CFF0; font-size: 40px; color:white;"> Back </button> </a>
			</div>
		</div>
        <form action ="" class="col-9" style="text-align: right">
			<div class="form-group">
				<input type="search" name="search" id="" class="form-control" placeholder="search" value="{{$search}}"/>
			</div>
				<button class="btn-btn-primary">Search</button>
		</form>
</section>

	<section id="section1">
		<div class="title" style="font-size: 40px;color:#F2674A; text-align: center;"> Previous Answers </div>
		<div class="num">
		</div>
		<table border='1' width="300px" style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
				<th class='deli'> Name </th>
                <th class='deli'> Questions </th>
				<th class='deli'> Answer </th>
			</tr>

            @foreach($members as $member)
            <tr class='row' style="padding: 5px;">
                <td class='col-md-3'> {{$member['Name']}} </td>
                <td class='col-md-3'> {{$member['Question']}} </td>
                <td class='col-md-3'> {{$member['Answer']}} </td>
            </tr>
            @endforeach

		</table>


	</section>

<footer id="footer">

</footer>

</body>