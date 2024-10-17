@extends('Layouts.index-for-student')

@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-12">
                            <form action="" id="studentselect">
                                <h5>Select Group Member</h5>
                                <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple" required>
                                    <option value="Alabama">Alabama</option>
                                    <option value="ALi">ALi</option>
                                    <option value="Ahmad">Ahmad</option>
                                </select>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mt-3 me-3">Save</button>
                                </div>
                            </form>
                            <div class="container-fluid px-4">
                                <h3 class="mt-4">Group Detail</h3>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Tables</li>
                                </ol>
                                <!-- <div class="card mb-4">
                                    <div class="card-body">
                                        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                        .
                                    </div>
                                </div> -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Detail
                                    </div>
                                    <div class="card-body table_custom">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Reg.No</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Reg.No</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Ali</td>
                                                    <td>20-Arid-1747</td>
                                                    <td>03137898012</td>
                                                    <td>Zunu@gmial.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Ali</td>
                                                    <td>20-Arid-1747</td>
                                                    <td>03137898012</td>
                                                    <td>Zunu@gmial.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Ali</td>
                                                    <td>20-Arid-1747</td>
                                                    <td>03137898012</td>
                                                    <td>Zunu@gmial.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
@endsection
 
