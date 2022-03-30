<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 <style>
  
  </style>

</head>
<body>
<div class="container">
   
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth
     <a href="{{ url('/view-data') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

          @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
          @endif
  @endauth

<div class="container" style=" margin-left: 1125px;">
    <a
        href="{{ route('logout') }}"
        onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out fa-fw"></i>
        {{ __('Logout') }}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
    </a>
</div>    
       
</div>
</div>

 <!-- MOdal Code -->
 @foreach($posts as $post)
<div class="container">

    <h2 style="margin-top:5%;">Profile</h2>
    
    <div class="card" style="width:400px; margin-top:3%;">
      <div class="card-body">
        <h4 class="card-title">{{$post->tittle}} by {{ $post->user->name}}</h4>
        <p class="card-text">{{$post->description}}</p>
        
      </div>
      <img class="card-img-top" src="{{ asset('uploads/images/'.$post->image)}}" alt="Card image" style="width:100%">
         
    </div>


    @php
      $likedUserIds = $post->likes()->pluck('user_id')->toArray();
      $totalLikes= count($post->likes);
    @endphp
    @if(in_array(Auth::user()->id, $likedUserIds))
      <a href="#" > You {{ $totalLikes > 1? 'and '.$totalLikes.' others':'' }} </a><a href="#" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}"> ({{ count($post->likes) }}) </a>
    @else
    <a href="{{route('like.post', $post->id)}}" > Like </a><a href="#" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}"> ({{ count($post->likes) }}) </a>
    
    @endif
    
<div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Likes Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach($post->likes as $like)
         {{$like->user->name}}<br>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    <a href="#" style="margin-left: 25%;"><i class="fas fa-comment"> Comments ({{ count($post->comments) }})</i></a>
    
    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <h1 class="page-header">Comments</h1> -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4" >
                                            <form role="form" action="{{route('comment.post')}}" method="post">
                                              @csrf
                                                <input type="hidden" name="post_id" value="{{$post->id}}"
                                                <div class="form-group">
                                                  @auth
                                                    <label>Comments</label>
                                                    <textarea class="form-control" rows="3" name="comments" required></textarea>
                                                    @endauth
                                                    <button type="submit" class="btn btn-success" style="    margin-top: 14px;">Submit Button</button>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-success" >Submit Button</button> -->
                                                
                                              
                                              </form>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                          
                        </div>
                        
                    </div>
                    
                </div>

    @endforeach

 
  
  </div> 
  
<!-- End Model -->
  
  

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>