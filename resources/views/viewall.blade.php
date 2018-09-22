<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>View All Customers</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
	body
	{
		background:url('images/img5.jpg')no-repeat center center fixed;
	}
	.fo
	{
		color:white;
	}
	a
	{
		overflow: hidden;
	}
	.tab
	{
		padding-top: 50px;
	}
	table,th,tr,td
	{
		border:1px solid black;
		border-collapse: collapse;
	}
	</style>
</head>
<body>
	<div class="text-center">
	<h1><a class="cent" href="insert">Insert Customer</a></h1>
	</div>
	<br>
	<br>
	<br>
	<div class="text-center">
	<table class="container">
		<tr class="fo">
			<th class="text-center">Name</th>
			<th class="text-center">Email</th>
			<th class="text-center">Country</th>
			<th class="text-center">Gender</th>
			<th class="text-center">Favorites</th>
			<th class="text-center">Image</th>
			<th class="text-center">Show By Id</th>
			<th class="text-center">Update</th>
			<th class="text-center">Delete</th>
		</tr>
		<tbody>
		@foreach($user as $users)
			<tr class="fo">
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				<td>{{$users->country}}</td>
				<td>{{$users->gender}}</td>
				<td>{{$users->favorite}}</td>
				<td><img src="{{URL::to('/image/'.$users->image)}}" alt="" width="70px" height="70px"></td>
				<td><a class="fo" href="customer/{{$users->name}}">View By Id</a></td>
				<td><a class="fo" href="edit/{{$users->name}}">Update</a></td>
				<td><a class="fo" href="delete/{{$users->id}}">Delete</a></td>
			</tr>
		@endforeach
		</tbody>
	</table>
	</div>
</body>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>