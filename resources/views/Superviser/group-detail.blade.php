@extends('Layouts.index-for-supervisor')
@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4" style="color: #4040a2;">Group Detail</h3>
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
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Reg.No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($studentregnos as $item)
                            <tr>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['regno']}}</td>
                                <td>{{$item['pnumber']}}</td>
                                <td>{{$item['email']}}</td>
                                <!-- <td>
                                    <a href="" class="btn btn-success btn-sm  ms-3">Update</a>
                                    <a href="" class="btn btn-danger btn-sm  ms-3">Delete</a>
                                </td> -->
                            </tr>
                            @endforeach
{{-- 
                            <tr>
                                <td>Ali</td>
                                <td>20-Arid-1747</td>
                                <td>03137898012</td>
                                <td>Zunu@gmial.com</td>
                                <!-- <td>
                                    <a href="" class="btn btn-success btn-sm  ms-3">Update</a>
                                    <a href="" class="btn btn-danger btn-sm  ms-3">Delete</a>
                                </td> -->
                            </tr>
                            <tr>
                                <td>Ali</td>
                                <td>20-Arid-1747</td>
                                <td>03137898012</td>
                                <td>Zunu@gmial.com</td>
                                <!-- <td>
                                    <a href="" class="btn btn-success btn-sm  ms-3">Update</a>
                                    <a href="" class="btn btn-danger btn-sm  ms-3">Delete</a>
                                </td> -->
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    @endsection