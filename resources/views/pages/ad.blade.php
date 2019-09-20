@extends('layouts.master')

@section('content')
<!--Start Sidebar-->
		<div class="container margin-top">
			<div class="row">
				 @include('partials.home_sideber')
				<div class="col-md-3">
					<div class="">
					    <div class="img-set1">
					      <img class="fancybox" src="{{asset('img/today.jpg')}}" height="500" width="800">
					    </div>
					    <br>
					    <div class="img-set1">
					      <img class="fancybox" src="{{asset('img/inter.jpg')}}" height="500" width="800">
					    </div>
					</div>				  
				</div>

			</div>

		</div>
@endsection


