<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
	<form class="container text-center" action="update/{{$user->id}}" method="post" enctype="multipart/form-data">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value="{{$user->name}}">
		<br>
		{{method_field('patch')}}
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<br>	
		<label for="">Email</label>
		<input type="text" name="email" id="email" value="{{$user->email}}">
		<br>
		<br>

		
		<select name="country" id="country">
			<?php if($user->country=='USA'): ?>
			<option value="USA">{{$user->country}}</option>
			<option value="ENGLAND">ENGLAND</option>
			<option vlaue="EGYPT">EGYPT</option>
			<option vlaue="JAPAN">JAPAN</option>

			<?php elseif($user->country=='ENGLAND'): ?>
			<option value="ENGLAND">{{$user->country}}</option>
			<option value="USA">USA</option>
			<option vlaue="EGYPT">EGYPT</option>
			<option vlaue="JAPAN">JAPAN</option>

			<?php elseif($user->country=='EGYPT'): ?>
			<option value="EGYPT">{{$user->country}}</option>
			<option value="USA">USA</option>
			<option vlaue="ENGLAND">ENGLAND</option>
			<option vlaue="JAPAN">JAPAN</option>

			<?php elseif($user->country=='JAPAN'): ?>
			<option value="JAPAN">{{$user->country}}</option>
			<option value="USA">USA</option>
			<option vlaue="ENGLAND">ENGLAND</option>
			<option vlaue="EGYPT">EGYPT</option>
			<?php endif ?>
		</select>
		<br>
		<?php $result =explode(',' , $user->favorite);?>
		<input type="checkbox" name="favorite[]" value="south" <?php if(in_array('south',$result)): echo "checked";?>>South
		<?php endif; ?>
		<input type="checkbox" name="favorite[]" value="north" <?php if(in_array('north',$result)): echo "checked";?>>North
		<?php endif; ?>
		<input type="checkbox" name="favorite[]" value="west" <?php if(in_array('west',$result)): echo "checked";?>>West
		<?php endif; ?>
		<input type="checkbox" name="favorite[]" value="east" <?php if(in_array('east',$result)): echo "checked";?>>East
		<?php endif; ?>	

		<br>
		<br>

		<input type="file" name="image">
		<br>
		<img src="{{URL::to('/image/' .$user->image)}}" alt="" width="100px" height="100px">
		<br>
		<label for=""></label>
		<input type="submit" name="submit" id="submit" value="Submit">
	</form>	
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>