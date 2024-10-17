@extends('Layouts.index-for-pmo')

@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <form action="{{URL::to('PMO/addsession')}}" method="POST">
                        @csrf
                        <h5 style="color: #4040a2;">Enter Year</h5>
                        <div class="mt-3">
                            <input type="text" class="form-control" id="yearInput" name="year" pattern="20[2-9][3-9]|[3-9][0-9]{3}" title="Please enter a year greater than 2024 (e.g., 2025, 2030, etc.)" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </div>
                    </form>
                    <main>
                        <div class="container-fluid px-4">
                            <h3 class="mt-4" style="color: #4040a2;">Session's</h3>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Sessions</li>
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
                                    Session's
                                </div>
                                <div class="card-body table_custom">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Session</th>
                                                <!-- <th>Share with</th> -->
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                <th class="text-center" style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Session's</th>
                                                <!-- <th>Share with</th> -->
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                <th class="text-center" style="text-align: center;">Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($readsession as $key=>$val)
                                            <tr>
                                                <td>{{$val->Year}}</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>
                                                <td>zunu@gamil.com</td> -->
                                                <td class="purposelbutton" style="text-align: center;">
                                                    <!-- <a href="" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>View</a> -->
                                                    <!-- <a href="" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> -->
                                                    <a href="{{ route('PMO.deletesession', $val->id) }}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
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
