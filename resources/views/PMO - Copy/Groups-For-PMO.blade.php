@extends('Layouts.index')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">All Groups Details</h3>
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
                                <i class=" me-1"></i>
                                Groups
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Group Leader Name</th>
                                            <th>Superviser Name</th>
                                            <th>Reg.No</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th class="text-center" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Group Leader Name</th>
                                            <th>Superviser Name</th>
                                            <th>Reg.No</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th class="text-center" style="text-align: center;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Ali</td>
                                            <td>Bilal</td>
                                            <td>20-Arid-1747</td>
                                            <td>03137898012</td>
                                            <td>zunu@gamil.com</td>
                                            <td class="purposelbutton">
                                                <!-- Default dropend button -->
                                                <!-- <div class="dropdown-center">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                                      Option
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-book-open-reader fa-lg me-2"></i>View</a></li>
                                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div> -->
                                                <a href="singel-group-detail-for-PMO.html" class="btn text-info border border-info btn-sm"><i class="fa-solid fa-book-open-reader fa-lg me-1 "></i>View</a>
                                                <a href="test.html" class="btn text-secondary border border-secondary btn-sm "><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                                <a href="" class="btn btn-sm text-danger border border-danger"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection