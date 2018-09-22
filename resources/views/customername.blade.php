<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View By Id</title>
</head>

<body>
<p>Name: {{$user->name}} </p><br> 
<p>Email: {{$user->email}} </p><br>
<p>Gender: {{$user->gender}} </p><br>
<p>Country: {{$user->country}} </p><br>
<p>Favorite: {{$user->favorite}} </p><br>
<img src="{{URL::to('/image/'.$user->image)}}" alt="" width="70px" height="70px">

</body>

</html>