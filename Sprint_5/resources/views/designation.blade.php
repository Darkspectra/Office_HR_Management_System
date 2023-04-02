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
		</style>

<section id="header">
		<div class="row">
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="http://127.0.0.1:8000/list" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right">
				<a href="http://127.0.0.1:8000/insertDesignation" style="margin-left: 20px;"> Insert </a> 
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Designation Information </div>
		<div class="num">
		</div>
		<table border='1' width="300px" style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
				<th class='deli'> Designation </th>
                <th class='deli'> Seat </th>
				<th class='deli'> Benefits </th>
				<th colspan="3" class='deli'> Action </th>
			</tr>

            @foreach($members as $member)
            <tr class='row' style="padding: 5px;">
                <td class='col-md-3'> {{$member['designation']}} </td>
                <td class='col-md-3'> {{$member['seat']}} </td>
                <td class='col-md-3'> {{$member['benefits']}} </td>
                <td class='del'> <a href={{"updateD/".$member['id']}} data-toggle="tooltip" data-placement="bottom" title="update">Update</a></td>
            </tr>
            @endforeach

		</table>


	</section>

<footer id="footer">

</footer>

</body>