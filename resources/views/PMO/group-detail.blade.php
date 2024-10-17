@extends('Layouts.studentindex-for-pmo')

@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}
        <div class="container-fluid px-4">
            <h3 class="mt-4" style="color: #4040a2;">Group Detail</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="sindex.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Member</li>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Reg.No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($studentregnos as $item)
                            <tr>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['regno']}}</td>
                                <td>{{$item['pnumber']}}</td>
                                <td>{{$item['email']}}</td>
                                <td>
                                    <!-- <a href="Add-student-for-PMO.html" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>View</a> -->
                                    {{-- <a href="{{URL::to('PMO/add-student')}}" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> --}}
                                    <a href="{{URL::to('PMO/deletefromgroup/'.$item['id'].'/'.$item['regno'])}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete from group</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection