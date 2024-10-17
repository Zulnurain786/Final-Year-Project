<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <link rel="icon" href="../Images/nav-logo.png" type="image/x-icon">
        <meta name="author" content="" />
        <link href="{{URL::to('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{URL::to('css/styles.css')}}">
        <link href="{{URL::to('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{URL::to('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />
        <title>Student</title>
        <style>
            .navbar-dropdown > li > .dropdown-item{
                padding-bottom:0px !important;
                padding-top: 0px !important; 
            }
            .navbar-dropdown > li > .dropdown-item:active {
                color: var(--bs-dropdown-link-active-color);
                text-decoration: none !important;
                background-color: #2a446c !important;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        @if(session('success'))
            <div class="notify">
                <div class="alert alert-success alert-dismissible show d-flex align-items-center mb-2" style="margin-top:67px;" role="alert"> 
                    <i class="fa-solid fa-check me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                </div> 
            </div>
        @endif
        
        @if(session('error'))
            <div class="notify">
                <div class="alert alert-danger alert-dismissible show d-flex align-items-center mb-2" style="margin-top:67px;" role="alert"> 
                    <i class="fa-solid fa-triangle-exclamation me-2" ></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                </div> 
            </div>
        @endif
        
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="notify">
                    <div class="alert alert-danger alert-dismissible show d-flex align-items-center mb-2" style="margin-top:67px;" role="alert"> 
                        <i class="fa-solid fa-triangle-exclamation me-2" ></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                    </div> 
                </div>
            @endforeach
        @endif

        <div class="my-notify">
            <div class="alert alert-success my-alert"></div>
            <div class="alert alert-danger my-alert"></div>
        </div>
        @include('alert.confirm')
        <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color: #2a446c;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="font-size:29px;" href="{{URL::to('Student/home')}}" >
                <img src="{{URL::to('Images/nav-logo.png')}}" alt="" style="height: 45px;width: 55px;" class="">
                <b style="font-size:29px;">GIMS</b> 
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-0 order-lg-0 me-5 me-lg-0 side-btn pe-5" style="color: white;" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline  me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Button trigger modal -->
            <div class="ms-auto ps-sm-5 me-3">
          <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalstudent" class="mx-2" onclick="addnewsinmodel()">
              <i class="icon fa-solid fa-bell  fa-xl " style="color: white;"></i>
          </a>
      </div>
            {{-- <div class="navbar-nav ms-auto ms-md-0 me-3 ">
                <a href="{{URL::to('Student/logout')}}" class="me-lg-3 ms-sm-auto ps-sm-5 ms-auto">
                    <i class="fa-solid fa-right-from-bracket fa-lg" style="color: white;"></i>
                </a>
            </div> --}}
             <!-- Navbar -->
             <ul class="navbar-nav ms-auto ms-md-0 me-3">
                <li>
                    <a href=""></a>
                </li>
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw fa-lg" style="color: white;"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end navbar-dropdown" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Settings</a></li> -->
                        <li><a class="dropdown-item" href="{{URL::to('Student/profile')}}" style="font-weight:300;"><i class="fa-solid fa-user fa-sm me-2"  style="color: #63656d;"></i></i>Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li> <a class="dropdown-item" href="{{URL::to('Student/logout')}}" style="font-weight:300"><i class="fa-solid fa-right-from-bracket fa-sm me-2" style="color: #63656d;"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="{{URL::to('Student/home')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house fa-beat"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Student</div>
                            <a class="nav-link" href="{{URL::to('Student/select-group-member')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group fa-lg"></i></div>
                                Select Member
                            </a>
                            <a class="nav-link" href="{{URL::to('Student/Preliminary-Purposel')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pager fa-lg"></i></div>
                                Preliminary Purposel
                            </a>
                            <a class="nav-link" href="{{URL::to('Student/project-status')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-check-to-slot fa-lg"></i></div>
                                Project Status
                            </a>
                            <a class="nav-link" href="{{URL::to('Student/meeting-slote')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-handshake fa-lg"></i></div>
                                Meeting Slots
                            </a>
                            <a class="nav-link" href="{{URL::to('Student/share-file')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file fa-lg"></i></div>
                                Share File
                            </a>
                            <a class="nav-link" href="{{URL::to('Student/view-file')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-pdf fa-lg"></i></div>
                                View Files
                            </a>
                            {{-- <a class="nav-link" href="{{URL::to('Student/addprogress')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-pdf fa-lg"></i></div>
                                Add Progress
                            </a> --}}
                            {{-- <a class="nav-link" href="{{URL::to('Student/view-marks')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-m fa-lg"></i></div>
                                View Marks
                            </a> --}}
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePanel" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                For Panel
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePanel" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Groups-for-panel.html">All Groups</a>
                                </nav>
                            </div> -->
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStudent" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                For Students
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseStudent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="select_member_page.html">Select Group Member</a>
                                    <a class="nav-link" href="test.html">Proposal Form</a>
                                    <a class="nav-link" href="Student-file-share.html">Share File</a>
                                    <a class="nav-link" href="view-project-status-as-student.html">Project Status</a>
                                    <a class="nav-link" href="view-shared-file-as-student.html">View File</a>
                                    <a class="nav-link" href="view-marks-as-student.html">View Marks</a>
                                </nav>
                            </div> -->
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsesupervisor" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                For Superviser
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsesupervisor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="all-groups-for-supervisor.html">Groups Purposel Form</a>
                                    <a class="nav-link" href="supervisor-file-share.html">Share File</a>
                                    <a class="nav-link" href="view-shared-file-as-superviser.html">View File</a>
                                    <a class="nav-link" href="groups-under-supervisor.html">Superviser of Groups</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePMO" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                For PMO
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePMO" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Groups-For-PMO.html">All Groups</a>
                                    <a class="nav-link" href="PMO-file-share.html">File Share</a>
                                    <a class="nav-link" href="purposel-form-for-PMO.html">Purposel Form</a>
                                    <a class="nav-link" href="defance-form-for-panel.html">Defance Form</a>
                                    <a class="nav-link" href="Add-student-for-PMO.html">Add Student</a>
                                    <a class="nav-link" href="add-student-by-excel-for-pmo.html">Add Student by Excel</a>
                                    <a class="nav-link" href="Add-student-login-for-PMO.html">Add Student login</a>
                                    <a class="nav-link" href="Add-supervisor-for-PMO.html">Add Superviser</a>
                                    <a class="nav-link" href="All Supervoiser.html">All Superviser</a>
                                    <a class="nav-link" href="All Panels.html">All Panel</a>
                                    <a class="nav-link" href="All group login.html">All Groups Logins</a>
                                    <a class="nav-link" href="all-students-record.html">All Student Record</a>
                                    <a class="nav-link" href="Meeting-form-for-PMO.html">Meeting Form</a>
                                    <a class="nav-link" href="Mid-form-for-PMO.html">Mid Form</a>
                                    <a class="nav-link" href="Finel-form-for-PMO.html">Finel Form</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div> -->
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer d-none">
                        <div class="small">Logged in as:</div>
                        Student
                    </div>
                </nav>
            </div>
            @yield('content')
                <footer class="py-3 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center small">
                            <img src="{{URL::to('Images/nav-logo.png')}}" alt="" style="height: 50px;width: 57px;" class="me-2">
                            <div class="text-muted"> 
                                Gujrat Institute of Management and Sciences is formed in Gujrat under the Affiliation arrangement with PMAS-Arid Agriculture University Rawalpindi.
                            </div>
                            <!-- <div class="text-muted">Copyright &copy; GIMS PMS 2023</div> -->
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalstudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">News From PMO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2" placeholder="Type message">
                            <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                            <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                            <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                        </div> -->
                        <div id="newsstudent" style="overflow: auto; max-height:300px;">
                                <div>
                                  {{-- <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim ad minima veniam,
                                    quis
                                    nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                                    commodi
                                    consequatur?</p>
                                  <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13<button id="" class="" type="button"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i></button></p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;"> --}}
                               </div>
                            {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                              <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Neque porro
                                quisquam
                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                numquam
                                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                              <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><a href=""><i class="fas fa-paper-plane"></i></a></span>
                        </div>
                        <button type="button" class="btn btn-danger">Clear Chat</button> -->
                    </div>
                </div>
            </div>
        </div>
        <script src="{{URL::to('https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js')}}"></script>
        <script src="{{URL::to('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}"></script>
        <script src="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js')}}" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{URL::to('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{URL::to('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>
        <script src="{{URL::to('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{URL::to('js/scripts.js')}}"></script>
        <script src="{{URL::to('js/datatables-simple-demo.js')}}"></script>
        <script>
            $(document).ready(function() {
                setInterval(NewNews, 10000);
                document.addEventListener('click', function(event) {
                    const customDropdownContainer = $('#customDropdownContainer');
                    customDropdownContainer.empty();
                });
                // $('#datatablesSimple').DataTable({
                //     "lengthMenu": [ ] 
                // })
                // $("#datatable-dropdown").css("display", "none");
                $('.js-example-basic-multiple').select2({
                    maximumSelectionLength: 3, // Maximum number of selections allowed
                });
                // $('#studentselect').submit(function(e) {
                //      e.preventDefault();
                //      var selectedValue = $(".js-example-basic-multiple").val();
                //      console.log(selectedValue);
                //      $.ajax({
                //         type: 'POST',
                //         url: $('#studentselect').attr('action'), // URL to your controller method
                //         data: formData,
                //         success: function(response) {
                //             // Handle success response
                //             console.log(response);
                //             addnewsinmodel();
                //             $('#news-textbox').val('');
                //             // You can perform actions after successful submission here
                //         },
                //         error: function(xhr, status, error) {
                //             // Handle error
                //             console.error(xhr.responseText);
                //         }
                //     });
                //      $('.js-example-basic-multiple').select2().val(null).trigger('change');
    
    
                //      // If the file is valid, you can proceed with form submission.
                //      // Uncomment the following line to submit the form:
                //      // $(this).unbind('submit').submit();
                // });             
            });
        </script>
        <Script>
            function NewNews()
            {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('Student.NewNews') }}",
                    success: function(response) {
                        // Handle success response
                        // console.log(response);
                        if(response.totalviewnews == 1) {
                            if (!$('.icon').hasClass('fa-bounce')) {
                                $('.icon').addClass('fa-bounce');
                            }
                        }
                        // Example: Displaying the news in the console
                        // You can perform actions after successful retrieval of data here
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
               
            }
            function allnewsreaded()
            {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('Student.allnewsreaded') }}",
                    success: function(response) {
                        // Handle success response
                        // console.log(response);
                           // Log the entire response to check its structure
                        // console.log(response.totalviewnews);

                        // Check if totalviewnews is 1 and remove fa-bounce class
                        // var totalViewNewsValue = parseInt(response.totalviewnews); // Convert to integer
                            if ($('.icon').hasClass('fa-bounce')) {
                                $('.icon').removeClass('fa-bounce');
                                console.log("fa-bounce class removed");
                            }
                        // console.log(response.message);
                        // Example: Displaying the news in the console
                        
                        // You can perform actions after successful retrieval of data here
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });

            }
            function addnewsinmodel() {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('Student.readnews') }}",
                    success: function(response) {
                        allnewsreaded();
                        // Handle success response
                        // console.log(response);
                        $('#newsstudent').empty();
                         var data="";
                        // Example: Displaying the news in the console
                        for (let i = 0; i < response.length; i++) {
                            // console.log("News Title: " + response[i].news);
                            // console.log("News Content: " + response[i].id);
                           data += `<div class="d-flex justify-content-start mt-2">
                           <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                              alt="avatar 1" style="width: 45px; height: 100%; margin-top:-9px;margin-bottom:10px;">
                            <div style="overflow-wrap:anywhere;">
                              <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;"> ${response[i].news}</p>
                            </div>
                        </div>`;                                     
                        }
                        $('#newsstudent').append(data);
                        var container = document.getElementById('newsstudent');
                        container.scrollTop = container.scrollHeight;
                        // You can perform actions after successful retrieval of data here
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            }
        </Script>
    </body>
</html>
