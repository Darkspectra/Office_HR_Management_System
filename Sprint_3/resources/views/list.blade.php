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
			<div class="col-md-2" style="font-size: 40px;color:#F2674A;">
				<a href="/"> Log out </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="http://127.0.0.1:8000/showV"> Visitor's_Inbox </a> 
				<a href="http://127.0.0.1:8000/assign" style="margin-left: 20px;"> Assign_Projects </a>
				<a href="http://127.0.0.1:8000/designation" style="margin-left: 20px;"> Edit_Designation </a>
				<a href="/" style="margin-left: 20px;"> Insert  </a>
				<form action ="/" method="POST">
						<input type="text" id="tx" name="search"> <br>
						<input type="submit" value="Search">
				</form>

			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Employee Information </div>
		<div class="num">
		</div>
		<table border='1' width="300px" style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
				<th class='deli'> Name </th>
                <th class='deli'> Designation </th>
				<th class='deli'> Email </th>
				<th colspan="3" class='deli'> Action </th>
			</tr>

            @foreach($members as $member)
            <tr class='row' style="padding: 5px;">
                <td class='col-md-3'> {{$member['Name']}} </td>
                <td class='col-md-3'> {{$member['Designation']}} </td>
                <td class='col-md-3'> {{$member['Email']}} </td>
                <td class='del'> <a href={{"update/".$member['id']}} data-toggle="tooltip" data-placement="bottom" title="update">Update</a></td>
                <td class='del'> <a href={{"delete/".$member['id']}} data-toggle="tooltip" data-placement="bottom" title="delete">Delete</a></td>
            </tr>
            @endforeach
        



		</table>

		<form action="/" id="cs" method="post" enctype="multipart/form-data">
			Insert employee data as .CSV file: <input type="file" name="file">
			<button type="submit" name="csv"> Import</button>
		</form>

	</section>

<footer id="footer">

</footer>

</body>