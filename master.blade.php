```<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/preadmin/hr/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 12:18:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
        <title>HRMS</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

        
        
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
       
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <img src="/assets/img/logo.png" width="40" height="40" alt="">
                    </a>
                </div>
                <a id="toggle_btn" href="javascript:void(0);"><i class="la la-bars"></i></a>
                <div class="page-title-box pull-left">
                    <h3>NWARA</h3>
                </div>
                <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <ul class="nav navbar-nav navbar-right user-menu pull-right">
                    <li class="dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span>Notifications</span>
                            </div>
                            <div class="drop-scroll">
                                <ul class="media-list">
                                    <li class="media notification-message">
                                        <a href="activities.html">
                                            <div class="media-left">
                                                <span class="avatar">
                                                    <img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                <p class="m-0"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </a>
                                    </li>
                                   
                                    
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
                    </li>   
                    <li class="dropdown">
                        <a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
                            <span class="user-img"><img class="img-circle" src="/assets/img/user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                            <span>{{ Auth::user()->name }}</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile">My Profile</a></li>
                            <li><a href="edit-profile">Edit Profile</a></li>
                            <li><a href="settings">Settings</a></li>
                            <li> <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" target="_blank" class="btn btn-primary btn-label-brand btn-sm btn-bold">Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                                {{ csrf_field() }}
                            </form>          
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="profile">My Profile</a></li>
                        <li><a href="edit-profile">Edit Profile</a></li>
                        <li><a href="settings">Settings</a></li>
                        <li><a href="login">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li> 
                                <a href="index"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="/employee.employees">All Employees</a></li>
                                    <li><a href="/holiday.holidays">Holidays</a></li>
                                    <li><a href="/leave.leaves">Leave Requests <span class="badge bg-primary pull-right">1</span></a></li>
                                    <li><a href="/attendance.attendance">Attendance</a></li>
                                    <li><a  href="/department.departments">Departments</a></li>
                                    <li><a href="/designation.designations">Designations</a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="clients"><i class="la la-users"></i> <span>Clients</span></a>
                            </li>
                            <li> 
                                <a href="projects"><i class="la la-rocket"></i> <span>Projects</span></a>
                            </li>
                            <li> 
                                <a href="tasks"><i class="la la-tasks"></i> <span>Tasks</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-phone"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="voice-call">Voice Call</a></li>
                                    <li><a href="video-call">Video Call</a></li>
                                    <li><a href="incoming-call">Incoming Call</a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="contacts"><i class="la la-book"></i> <span>Contacts</span></a>
                            </li>
                            <li> 
                                <a href="leads"><i class="la la-user-secret"></i> <span>Leads</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="estimates">Estimates</a></li>
                                    <li><a href="invoices">Invoices</a></li>
                                    <li><a href="payments">Payments</a></li>
                                    <li><a href="expenses">Expenses</a></li>
                                    <li><a href="provident-fund">Provident Fund</a></li>
                                    <li><a href="taxes">Taxes</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="salary"> Employee Salary </a></li>
                                    <li><a href="salary-view"> Payslip </a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="worksheet"><i class="la la-clock-o"></i> <span>Timing Sheet</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-building"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="jobs"> Manage Jobs </a></li>
                                    <li><a href="job-applicants"> Applied Candidates </a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="tickets"><i class="la la-ticket"></i> <span>Tickets</span></a>
                            </li>
                            <li> 
                                <a href="events"><i class="la la-calendar"></i> <span>Events</span></a>
                            </li>
                            <li> 
                                <a href="inbox"><i class="la la-at"></i> <span>Email</span></a>
                            </li>
                            <li> 
                                <a href="chat"><i class="la la-comments"></i> <span>Chat</span> <span class="badge bg-primary pull-right">5</span></a>
                            </li>
                            <li> 
                                <a href="assets"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                            </li>
                            <li> 
                                <a href="activities"><i class="la la-bell"></i> <span>Activities</span></a>
                            </li>
                            <li> 
                                <a href="users"><i class="la la-user-plus"></i> <span>Users</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="expense-reports"> Expense Report </a></li>
                                    <li><a href="invoice-reports"> Invoice Report </a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="settings"><i class="la la-cog"></i> <span>Settings</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="login"> Login </a></li>
                                    <li><a href="register"> Register </a></li>
                                    <li><a href="forgot-password"> Forgot Password </a></li>
                                    <li><a href="profile"> Profile </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> <span>Level 1</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
      <section class="content container-fluid">
        @yield('content')
    
    </section>
            
        </div>


        <div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
       
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="/assets/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="/assets/js/app.js"></script>



<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.productcategory',function(){
            // console.log("hmm its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            
             var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id':cat_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>Choose Step</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].p_step+'</option>';
                   }

                   div.find('.productname').html(" ");
                   div.find('.productname').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','.productname',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findPrice')!!}',
                data:{'id':prod_id},
                dataType:'json',//return data will be json
                success:function(data){
                    console.log("p_salary");
                    console.log(data.p_salary);

                    // here price is coloumn name in products table data.coln name

                    a.find('.prod_price').val(data.p_salary);

                },
                error:function(){

                }
            });


        });

    });
</script> 

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.contractcategory',function(){
            // console.log("hmm its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            
             var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findContractName')!!}',
                data:{'id':cat_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>Choose Step</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].c_step+'</option>';
                   }

                   div.find('.contractname').html(" ");
                   div.find('.contractname').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','.contractname',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findcontract')!!}',
                data:{'id':prod_id},
                dataType:'json',//return data will be json
                success:function(data){
                    console.log("c_salary");
                    console.log(data.c_salary);

                    // here price is coloumn name in products table data.coln name

                    a.find('.contract_price').val(data.c_salary);

                },
                error:function(){

                }
            });


        });

    });
</script> 

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.department',function(){
            // console.log("hmm its change");

            var id=$(this).val();
            // console.log(cat_id);
            
             var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findDepartmentName')!!}',
                data:{'id':id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>Choose Designation</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].des_name+'</option>';
                   }

                   div.find('.product').html(" ");
                   div.find('.product').append(op);
                },
                error:function(){

                }
            });
        });

       

    });
</script> 
    

<script type="text/javascript">

     /** Education addmore  */
   
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<div class="card-box"><h3 class="card-title">Education Informations</h3><div class="row"><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Complete Date</label><input type="text" name="addmore['+i+'][university]" class="form-control floating datetimepicker" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Complete Date</label><input type="text" name="addmore['+i+'][subject]" class="form-control floating datetimepicker" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Complete Date</label><input type="text" name="addmore['+i+'][degree]" class="form-control floating datetimepicker" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Complete Date</label><input type="text" name="addmore['+i+'][uni_province]" class="form-control floating datetimepicker" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Complete Date</label><input type="text" name="addmore['+i+'][start_date]" class="form-control floating datetimepicker" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Complete Date</label><input type="text" name="addmore['+i+'][end_date]" class="form-control floating datetimepicker" /></div></div></div><div class="add-more"><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-cancel"></i>X Remove </button></div></div></div>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('.card-box').remove();
    });  
   
</script>


    <script type="text/javascript">

        /** Experience addmore  */
   
    var i = 0;
       
    $("#adds").click(function(){
   
        ++i;
   
        $("#dynamic").append('<div class="card-box"><h3 class="card-title">Experience Informations</h3><div class="row"><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Company Name</label><input type="text" name="more['+i+'][company_name]" class="form-control floating " /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Positon</label><input type="text" name="more['+i+'][positon]" class="form-control floating" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Period from</label><input type="text" name="more['+i+'][period_from]" class="form-control floating datetimepicker" /></div></div><div class="col-md-6"><div class="form-group form-focus"><label class="control-label">Period To</label><input type="text" name="more['+i+'][period_to]" class="form-control floating datetimepicker" /></div></div></div><div class="add-more"><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-cancel"></i>X Remove </button></div></div></div>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('.card-box').remove();
    });  
   
</script>



<script>
    /** Permanenr checkbox */
$(function () {
        $("#permanent").click(function () {
            if ($(this).is(":checked")) {
                $(".dvcontract").hide();
                $(".AddPermanent").show();
            } else {
                $(".dvcontract").hide();
                $(".AddPermanent").hide();
            }
        });
    });


/** contract checkbox */
$(function () {
        $("#contract").click(function () {
            if ($(this).is(":checked")) {
                $(".dvcontract").show();
                $(".AddPermanent").hide();
            } else {
                $(".dvcontract").hide();
                $(".AddPermanent").hide();
            }
        });
    });

</script>




         @yield('page-script')

    </body>

<!-- Mirrored from dreamguys.co.in/preadmin/hr/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 12:18:51 GMT -->
</html>```
