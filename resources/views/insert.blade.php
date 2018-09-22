<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
	body
	{
		background:url('images/img1.jpg')no-repeat center center fixed;
	}
		input[type="file"]
		{
			display: inline-block;
		}
		.design
		{
			margin:auto;
			padding-top: 170px;
		}
	</style>
</head>
<body>
	<form role="form" class="design container text-center" action="store" method="post" enctype="multipart/form-data">
		<label for="name">Name</label>
		<input type="text" name="name" value="" id="name" autocomplete="off">
		<br>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email" value="" id="email" autocomplete="off">
		<br>

		Country&nbsp;&nbsp;<select name="country" id="country">
			<option value="USA">USA</option>
			<option value="ENGLAND">ENGLAND</option>
			<option value="EGYPT">EGYPT</option>
			<option value="JAPAN">JAPAN</option>
		</select>
		<br>
		<br>
		Gender&nbsp;&nbsp;<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<br>
		<br>
		<input type="checkbox" name="favorite[]" value="south">South
		<input type="checkbox" name="favorite[]" value="north">North
		<input type="checkbox" name="favorite[]" value="east">East
		<input type="checkbox" name="favorite[]" value="west">West
		<br>
		<br>
		<input class="btn"  type="file" name="image">
		<br>
		<label for="submit"></label>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
