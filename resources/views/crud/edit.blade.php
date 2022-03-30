<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h1 style="margin-top: 5%; text-align: center;">Login</h1>
	<div class="mt-5">
<div class="m-auto w-50 ">
	<form action="{{route('cr.update',$edit)}}" method="get" enctype="multipart/form-data">
	 @csrf
    <input type="hidden" name="id" value="{{$edit->id}}">
  <div class="form-group">
    <label for="exampleInputtittle1">Tittle</label>
    <input type="tittle" class="form-control" value="{{$edit->tittle}}" id="exampleInputtittle1" aria-describedby="tittleHelp" placeholder="Enter tittle" name="tittle">
    <small id="tittleHelp" class="form-text text-muted">We'll never share your title with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="description" class="form-control" value="{{$edit->description}}" id="exampleInputdescription1" placeholder="description" name="description">
  </div>

  <div class="form-group">
    <label for="custom-fie-lable">Image</label>
    <input type="file" class="custom-fie-input" value="{{$edit->image}}" name="image" class="form-control">
    <img src="{{asset('uploads/images/'.$edit->image')}}" style="height:60px;width:60px"  alt="">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

