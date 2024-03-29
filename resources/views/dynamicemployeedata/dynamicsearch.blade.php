
@if(empty($data->all()))
	
	<h2>No Task Found</h2>
	
@else   
<center>
<div class="row">
	<div class="col-md-4">
		{{ $data->links() }}
	</div>
</div>
</center>

<!-- Candidates Tab -->
<div class="tab-pane show active">
	<!-- Candidates List Table -->
	<div class="payroll-table card">
		<div class="row">
			<div class="col-md-12">
			
			@foreach ($data as $val)
					<div class="row staff-grid-row">
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3" style="float: left;">
							<div class="profile-widget">
								<div class="profile-img">
									@if( session()->get("role") <=	 2)
									<a href="{{url('/employeeprofile')}}/{{$val->elsemployees_empid}}" target="_blank" class="avatar">
										<img src="{{URL::to('public/img/')}}/{{$val->elsemployees_image}}"  alt="" title="Click To View Profile">
									</a>
									@else
										<img class="avatar" src="{{URL::to('public/img/')}}/{{$val->elsemployees_image}}"  alt="" title="Click To View Profile">
									@endif
								</div>
								@if( session()->get("role") <=	 2)
								<div class="dropdown profile-action">
									<a href="#" class="fa fa-ellipsis-v dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" onclick="getedit({{'"'.$val->elsemployees_empid.'"'}})" ><i class="fa fa-pencil m-r-5"></i> Edit</a>
									</div>
								</div>
								@endif
								<h4 class="user-name m-t-10 mb-0 text-ellipsis">{{$val->elsemployees_name}}</h4>
								<hr>
								<h6 class="text-left mt-" style="color: black"><span><i class="fa fa-user" style="color: ##9A192E"></i></span> <span> {{$val->DESG_NAME}}</span></h6>
								<h6 class="text-left" style="color: black"><span><i class="fa fa-at" style="color: ##9A192E"></i></span> {{$val->elsemployees_emailaddress}}</h6>
								<h6 class="text-left" style="color: black"><span><i class="fa fa-phone" style="color: ##9A192E"></i></span> {{$val->elsemployees_ext}}</h6>
							</div>
						</div>
					</div>
			@endforeach
			
			</div>
		</div>
	</div>
</div>
@endif


