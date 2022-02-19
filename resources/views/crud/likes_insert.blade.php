@extends('frontend.master')
@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Likes</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add New
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6" >
                                            <form role="form" action="{{route('add-likes')}}" method="get" >
                                              @csrf
                                                <div class="form-group">
                                                    <label>USER ID</label>
                                                    <input class="form-control" name="user_id">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>POST ID</label>
                                                    <textarea class="form-control" rows="3" name="post_id"></textarea>
                                                </div>
                                                
                                                
                                               
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                              </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
@endsection