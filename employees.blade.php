@extends('layouts.master')

@section('content')
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee</h4>
						</div>
						<div class="col-xs-8 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
							<div class="view-icons">
								<a href="employee.employees" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="employee.employees-list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
						<form method="get">
                           <div class="col-sm-3 col-xs-6">  
								<div class="form-group form-focus">
									<label class="control-label">Employee ID</label>
									<input type="text" name="id_card" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">  
								<div class="form-group form-focus">
									<label class="control-label">Employee Name</label>
									<input type="text" name="name" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6"> 
								<div class="form-group form-focus select-focus">
									<label class="control-label">Designation</label>
									<select class="select floating"> 
										<option value="">Select Designation</option>
										<option value="">Web Developer</option>
										
									</select>
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">  
                                <button  class="btn btn-success btn-block"> Search </button> 
                           </div>     
                           </form>
                           
                    </div>
                   
                   @if($searchemp)
                    <div class="row staff-grid-row">
						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							@foreach($searchemp as $searchemplpyee)
							<div class="profile-widget">
								
								<div class="profile-img">
									<a href="employee.profile"><img class="avatar" src="{{ URL::to('/') }}/images/{{ $searchemplpyee->image }}" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a onclick="editEmployee({{ $searchemplpyee->id}})"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a onclick="deleteEmployee({{ $searchemplpyee->id}})"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="employee.profile">{{ $searchemplpyee->name }}</a></h4>
								<div class="small text-muted">Web Designer</div>
								
							</div>
							@endforeach
						</div> 
					</div>
                     @else
					
					<div class="row staff-grid-row">
						@foreach($employee as $emp)
						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								
								<div class="profile-img">
									 <a  href="{{route('employee/profile', ['id' => $emp->id])}}">
									<img class="avatar" src="{{ URL::to('/') }}/images/{{ $emp->image }}" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a onclick="editEmployee({{ $emp->id}})"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a onclick="deleteEmployee({{ $emp->id}})"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis">
                                     <a  href="{{route('employee/profile', ['id' => $emp->id])}}">{{ $emp->name }}</a>
								<div class="small text-muted">Web Designer</div>
								
							</div>
						</div>
						@endforeach
					</div>
                </div>
                @endif
				
            </div>

            <div id="delete_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
						</div>
						<div class="modal-body card-box">
							<p>Are you sure want to delete this?</p>
							<form method="post" id="delete-form">
								 @csrf
								 @method('delete')

								 <div class="m-t-20 text-left">
									<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="add_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Employee</h4>
						</div>
						<div class="modal-body">
							<form action="{{url('employee.store')}}" method="post" enctype="multipart/form-data">
								@csrf
						<div class="card-box">
							<h3 class="card-title">Basic Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
										<img class="inline-block" src="/assets/img/user.jpg" alt="user">
										<div class="fileupload btn btn-default">
											<span class="btn-text">Add Image</span>
											<input class="upload" type="file" name="image">
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">First Name</label>
													<input type="text" name="name" class="form-control floating" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Last Name</label>
													<input type="text" name="lname" class="form-control floating" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Father Name</label>
													<input type="text" name="fname" class="form-control floating" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Birth Date</label>
													<div class="cal-icon">
													<input class="form-control floating datetimepicker" type="text" name="birth_date"></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus select-focus">
													<label class="control-label"></label>
													<select class="select form-control" name="gender">
														
														<option value="">Select Gendaer</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">ID</label>
										<input type="text" name="id_card" class="form-control floating" />
									</div>
								</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Contact Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group form-focus">
										<label class="control-label">Address</label>
										<input type="text" name="address" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Province</label>
										<input type="text" name="province" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Email</label>
										<input type="text" name="email" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Phone Number</label>
										<input type="text" name="phone" class="form-control floating" />
									</div>
								</div>
								
							</div>
						</div>


						<div id="dynamicTable"> 
						<div class="card-box">
							<h3 class="card-title">Education Informations</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Institution</label>
										<input type="text" name="addmore[0][university]" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Subject</label>
										<input type="text" name="addmore[0][subject]" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Degree</label>
										<input type="text" name="addmore[0][degree]" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Province Of Education</label>
										<input type="text" name="addmore[0][uni_province]" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Starting Date</label>
										<input type="text" name="addmore[0][start_date]" class="form-control floating datetimepicker" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Complete Date</label>
										<input type="text" name="addmore[0][end_date]" class="form-control floating datetimepicker" />
									</div>
								</div>
                                </div>
							
								<div class="add-more">
								<button class="btn btn-primary" type="button" name="add" id="add"><i class="fa fa-plus"></i> Add More Institute</button>
							</div>
							</div>
							
						</div>
						</div>
						<div id="dynamic"> 
						<div class="card-box">
							<h3 class="card-title">Experience Informations</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Company Name</label>
										<input type="text" name="more[0][company_name]" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Job Position</label>
										<input type="text" name="more[0][position]" class="form-control floating" />
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Period From</label>
										<input type="text" name="more[0][period_from]" class="form-control floating datetimepicker" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Period To</label>
										<input type="text" name="more[0][period_to]" class="form-control floating datetimepicker" />
									</div>
								</div>
							</div>
							<div class="add-more">
								
								<button class="btn btn-primary" type="button" name="adds" id="adds"><i class="fa fa-plus"></i> Add More Experience</button>
							</div>
						</div>
						</div>
<!--
						   <div class="card-box">
							<h3 class="card-title">Upload Documents</h3>
							<div class="row">
								<div class="col-md-6">
									<label class="control-label"> Edocation Document</label>
									<div class="form-group form-focus">
										
										<input type="file" name="education_document" class="form-control floating" />
									</div>
								</div>
								<div class="col-md-6">
									<label class="control-label">Experience Document</label>
									<div class="form-group form-focus">
										<input type="file" name="experience_document" class="form-control floating" />
									</div>
								</div>
								
							</div>
							
</div>
!-->
						<div class="m-t-20 text-center">
						    <button class="btn btn-primary">Create Employee</button>
					    </div>
					
					</form>
						</div>
					</div>
				</div>
			</div>

			<div id="edit_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Employee</h4>
						</div>
						<div class="modal-body" id="edit-modal-body">
							 
						</div>
					</div>
				</div>
			</div>
			
		@endsection

		@section('page-script')

		<script type="text/javascript">
			function editEmployee(id){
				$.ajax({
					  url: 'employee.employees/'+id,
					  success: function(view){
					  	$('#edit-modal-body').html(view);
					  	$('#edit_employee').modal('show');
					  }
					});
			}


			function deleteEmployee(id){
				$('#delete-form').attr('action', 'employee.delete/'+id);
				$('#delete_employee').modal('show');
			}
		</script>
	@stop