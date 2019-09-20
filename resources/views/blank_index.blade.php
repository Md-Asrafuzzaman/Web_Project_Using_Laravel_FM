@extends('layouts.master')

@section('content')
<!--Start Sidebar-->
		
		<div class="container margin-top">
			<!--left_menu end-->
			<div class="row">
				<div class="col-md-2">
		<div style="margin:0 auto; text-align:center"> </div>
			<div class="left_menu"><!--archive start-->
				<div class="left_menu_title">Archive News</div>
				<script language="javascript">
		    		var archiveexpanded = 0;
		    		function archiveexpand() {
		        		if (archiveexpanded == 0) {
		           			Effect.BlindDown('archivepane');
		            		archiveexpanded = 1;
		        		}
		        		else if (archiveexpanded == 1) {
		            		Effect.BlindUp('archivepane');
		            		archiveexpanded = 0;
		        		}
		        		return false;
		    		}
				</script>
			<div id="archivepane" style=" display:block; margin-top:10px;margin-bottom:8px">
				<form name="arform" id="arform" method="post" action="{{url('calender')}}">
					<div align="left" style="margin-left:20px;">
			   			<select id="arday" name="arday"
			            style="width: 60px ;FONT-SIZE: 8.5pt; COLOR: #333333; FONT-FAMILY: Arial; TEXT-DECORATION: none; line-height:14pt;">
				        	<option value="0">Day</option>
				            <option value="01" > 01 </option>
				            <option value="02" > 02 </option>
				            <option value="03" > 03 </option>
				            <option value="04" > 04 </option>
				            <option value="05" > 05 </option>
				            <option value="06" > 06 </option>
				            <option value="07" > 07 </option>
				            <option value="08" > 08 </option>
				            <option value="09" > 09 </option>
				            <option value="10" > 10 </option>
				            <option value="11" > 11 </option>
				            <option value="12" > 12 </option>
				            <option value="13" > 13 </option>
				            <option value="14" > 14 </option>
				            <option value="15" > 15 </option>
				            <option value="16" > 16 </option>
				            <option value="17" > 17 </option>
				            <option value="18" > 18 </option>
				            <option value="19" > 19 </option>
				            <option value="20" > 20 </option>
				            <option value="21" > 21 </option>
				            <option value="22" > 22 </option>
				            <option value="23" > 23 </option>
				            <option value="24" > 24 </option>
				            <option value="25" > 25 </option>
				            <option value="26" > 26 </option>
				            <option value="27" > 27 </option>                    
				            <option value="28" > 28 </option>                           
				            <option value="29" > 29 </option>
				            <option value="30" > 30 </option>
				            <option value="31" selected="selected"> 31 </option>    
				    	</select>
			    		<br/>
			    		<select id="armonth" name="armonth"
			            style="width: 60px;FONT-SIZE: 8.5pt; COLOR: #333333; FONT-FAMILY: Arial; TEXT-DECORATION: none; line-height:14pt;">
				        	<option value="0">Month</option>                   
				            <option value="01" > 01 </option>                   
				            <option value="02" > 02 </option>                  
				            <option value="03" > 03 </option>                 
				            <option value="04" > 04 </option>                    
				            <option value="05" > 05 </option>                      
				            <option value="06" > 06 </option>                    
				            <option value="07" selected="selected"> 07 </option>                  
				            <option value="08" > 08 </option>                  
				            <option value="09" > 09 </option>                      
				            <option value="10" > 10 </option>                      
				            <option value="11" > 11 </option>                      
				            <option value="12" > 12 </option>
			    		</select>
			    		<br/>
			    		<select name="aryear" id="aryear"
			            style="width: 60px;FONT-SIZE: 8.5pt; COLOR: #333333; FONT-FAMILY: Arial; TEXT-DECORATION: none; line-height:14pt;">                    
				            <option value="2010" > 2010 </option>                          
				            <option value="2011" > 2011 </option>                          
				            <option value="2012" > 2012 </option>                           
				            <option value="2013" > 2013 </option>                           
				            <option value="2014" > 2014 </option>                           
				            <option value="2015" > 2015 </option>                           
				            <option value="2016" > 2016 </option>                           
				            <option value="2017" > 2017 </option>                        
				            <option value="2018" > 2018 </option>
				            <option value="2019" selected="selected"> 2019 </option>
			    		</select>
			    		<input onClick="goarch()" name="go" type="button" id="go" value="go"
			           style="FONT-SIZE: 8.5pt; COLOR: #333333; FONT-FAMILY: Arial; TEXT-DECORATION: none; line-height:14pt;">
					</div>
			    </form>
			</div>
			<script language="javascript">
		    	function goarch() {

		        // alert(document.getElementById('arday').value);
			        aday = document.getElementById('arday').value;
			        amonth = document.getElementById('armonth').value;
			        ayear = document.getElementById('aryear').value;
			        if (document.getElementById('arday').value != 0 && document.getElementById('armonth').value != 0){
			        $date=' + ayear + '-' + amonth + '-' + aday'
		            window.location = '{{url('calender')}}'
		        }
		    	}
			</script>
		</div>
	</div>
				<div class="row">

				<div class="col-md-4">
					{{$data->links()}}
					<!--   <img src="{{asset('img/ja.gif')}}" height="350" width="250"> -->
					@foreach ($data as $img)
					<div class="card-deck">
					  <div class="img-set1">
					      <img class="fancybox" src="{{asset('img/'.$img->image)}}" title="" height="110" width="935"/>
					    </div>					  
					</div>
					@endforeach
				</div>
			</div>		
</div>

			<div class="row">

				@include('partials.home_sideber')
				
				<div class="col-md-3">
					
				</div>
			</div>
		

			
		</div>
@endsection


