@extends('frontend.master')

@section('content')

<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tables</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    View Data
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Tittle</th>
                                                    <th>Images</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            @foreach($select as $value)
                                            <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->tittle}}</td>
                                            <td>{{$value->image}}</td>
                                            <td>{{$value->description}}</td>
                                            
                                            <td>
                                            <a href="delete-data/{{$value->id}}">Delete</a>
                                            <a href="{{route('cr.edit',$value->id)}}">Edit</a>
    
                                            </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    
                    <!-- /.row -->
                    
                    <!-- /.row -->
                    
                    <!-- /.row -->
                </div>

@endsection
