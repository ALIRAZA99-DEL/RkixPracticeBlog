<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Comment</title>
</head>
<body>
    <h1 style="margin-top:40px; text-align:center;">Comments Here</h1>
<div class="d-flex justify-content-center">
    
    <textarea class="form-control" rows="2" name="comments"  style="width:20%;margin-top:2%;" required ></textarea>
    
 </div>
 <a href="{{route('index')}}" type="submit" class="btn btn-success" style="margin-left: 40%; margin-top: 2%;">Submit</a>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>