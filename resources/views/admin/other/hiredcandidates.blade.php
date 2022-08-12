@extends('layout.apptheme')
@section('hr-HRM')

<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Joined Candidates List</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/mainDashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Joined Candidates List</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card mb-0">
								<!-- <div class="card-header">
									<h4 class="card-title mb-0">Default Datatable</h4>
									<p class="card-text">
										This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
									</p>
								</div> -->
								<div class="card-body">

									<div class="table-responsive">
										<table class="table table-striped custom-table datatable" id="hc">
											<thead>
												<tr style="text-align: center;">
													<th>Action</th>
													<th>Offer Letter</th>
													<th>Resume</th>
													<th>First Name</th>
													<th>Email</th>
													<th>Contact No</th>
													<th>Experience</th>
													<th>Department</th>
													<th>Designation</th>
													<th>View</th>
												</tr>
											</thead>
											<tbody>
												<tr style="text-align: center;">
													<td class="text-center">
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-info"></i> Move
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Awaiting</a>
															</div>
														</div>
													</td>
													<td><a href="#" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</a></td>
													<td><a href="#" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</a></td>
													<td>Test</td>
													<td>test@gmail.com</td>
													<td>03001234567</td>
													<td>1 Year</td>
													<td>Web Department</td>
													<td>Senior</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#" data-toggle="modal" data-target="#view_employee"><i class="fa fa-clock-o m-r-5"></i> View Details</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>	
				<!-- View Employee Modal -->
				<div id="view_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">View Details</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Manager Comment <span class="text-danger">*</span></label>
												<textarea rows="4" cols="5" class="form-control" name="managercomment" placeholder="XYZ" readonly=""></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">COO Comment <span class="text-danger">*</span></label>
												<textarea rows="4" cols="5" class="form-control" name="managercomment" placeholder="XXYYZZ" readonly=""></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Add Comment <span class="text-danger">*</span></label>
												<textarea rows="4" cols="5" class="form-control" name="managercomment" placeholder="XXXYYYZZZ" readonly=""></textarea>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Salary <span class="text-danger">*</span></label>
												<input class="form-control" value="20000" type="number" readonly="">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Designation <span class="text-danger">*</span></label>
												<input class="form-control" value="Officer" type="text" readonly="">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /View Employee Modal -->		
			</div>
			<!-- /Page Wrapper -->		
		
@endsection