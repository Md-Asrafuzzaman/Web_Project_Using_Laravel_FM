@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
					<button type="button" class="btn btn-primary active"><a href='{{url('postnews')}}'><h3>PostNews</h3></a></button>
					<button type="button" class="btn btn-primary disabled"><a href='{{url('editor')}}'><h3>Edit News</h3></a></button>     
					<button type="button" class="btn btn-primary active"><a href='{{url('allpost')}}'><h3>AllPostNews</h3></a></button>  
					<button type="button" class="btn btn-primary active"><a href='{{url('postad')}}'><h3>Ad add</h3></a></button>         
                </div>
            </div>
        </div>
	</div>
</div>
@endsection

