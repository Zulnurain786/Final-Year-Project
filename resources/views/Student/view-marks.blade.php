@extends('Layouts.index-for-student')

@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <!-- <form action="">
                        <h5>Select To Share File</h5>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                For Superviser
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                                For Student
                            </label>
                        </div>
                        <div class="mt-3">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mt-3">Send</button>
                        </div>
                    </form> -->
                    <main>
                        <div class="container-fluid px-4">
                            <h3 class="mt-4" style="color: #4040a2;">Marks</h3>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="index-for-student.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Mark's</li>
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
                                    Marks
                                </div>
                                <div class="card-body table_custom">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Ch 1</th>
                                                <th>Ch 2</th>
                                                <th>Ch 3</th>
                                                <th>Front End</th>
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                {{-- <th class="text-center" style="text-align: center;">Marks</th> --}}
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Ch 1</th>
                                                <th>Ch 2</th>
                                                <th>Ch 3</th>
                                                <th>Front End</th>
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                {{-- <th class="text-center" style="text-align: center;">Marks</th> --}}
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Zunu</td>
                                                <td>8</td>
                                                <td>8</td>
                                                <td>8</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>-->
                                                <td>16</td> 
                                                <!-- <td class="purposelbutton" style="text-align: center;">
                                                    <a href="" class="btn btn-primary btn-sm  ms-3">View</a>
                                                </td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                                                                                                              
                    </main>
                </div>
            </div>
        </div>
    </main>
@endsection