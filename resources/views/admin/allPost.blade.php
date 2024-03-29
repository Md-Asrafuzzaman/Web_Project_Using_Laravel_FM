@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center><h2>ALL POST NEWS</h2></center>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped"> 
          <thead>            
            <th><input type="checkbox" id="checkall"></th>
            <th>Id</th>
            <th>Date</th>
            <th>Page No</th>
            <th>Category</th>
            <th>Image</th>
            <th>Edit</th>   
            <th>Delete</th>
          </thead>
          <tbody>
            @foreach($data as $value)
              <tr>
                <td><input type="checkbox" class="checkthis" /></td> -->
                <td>{{$value->id}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->pageno}}</td>
                <td>{{$value->category}}</td>
                <td>{{$value->image}}</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>  
             @endforeach 
          </tbody>  
        </table>  
        {{$data->links()}}              
      </div>          
    </div>
  </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Posting</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="">
        </div>
        <div class="form-group">
          <input class="form-control " type="text" placeholder="">
        </div>
        <div class="form-group">
          <textarea rows="2" class="form-control" placeholder=""></textarea>    
        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
</div>
    
    
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
        </div>    
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
</div>
@endsection
