@extends('frontend.master')
@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Posts</h1>
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
                                            <form role="form" action="{{route('add')}}" method="post" enctype="multipart/form-data">
                                              @csrf
                                                <div class="form-group">
                                                    <label>Tittle</label>
                                                    <input class="form-control" name="tittle">
                                                </div>
                                                <div class="form-group">
                                                    <label for="custom-fie-lable">Choose File </label>
                                                    <input type="file" name="image" class="custom-file-input" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="3" name="description"></textarea>
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