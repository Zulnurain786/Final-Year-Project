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
            <Form class="mt-2 mb-5">
                <div class="form-outline w-25">
                    <label class="form-label" for="form6Example2" style="color: #4040a2; font-size: 20px;">Select Session</label>
                    <select name="selectstudentrecordnotingroup" id="selectstudentrecordnotingroup" class="form-control" onchange="allstudentnotingroupreloadPage()" required>
                        <option value="">All Students</option>
                        @foreach($session as $item)
                        <option value="{{$item->Year}}">{{$item->Year}}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                  </div>
            </Form>
            <h3 class="mt-4" style="color: #4040a2;">Student's detail</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Students</li>
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
                    detail
                </div>
                <div class="card-body studentrecordtable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Reg.No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Session</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Reg.No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Session</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($allstudentrecord as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->regno}}</td>
                                <td>{{$item->pnumber}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->session}}</td>
                                <td>
                                     <!-- Default dropend button -->
                                     <div class="dropdown-center d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle dynamicbuttonstudent" id="dropdownButtonn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Option
                                        </button>
                                        <ul class="dropdown-menu" style="display: none;">
                                         <li><span class="dropdown-item-text text-secondary">Action</span></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/updatestudentrecord/'.$item->id)}}"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Update</a></li>
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-regular fa-file fa-lg me-2" style="color: #53637f;"></i>Meeting Form</a></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-solid fa-pager fa-lg me-2"></i>Mid Evaluation Form</a></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-solid fa-file fa-lg me-2"></i>Finel Evalution Form</a></li> --}}
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-danger" href="{{URL::to('PMO/deletestudentrecord/'.$item->id)}}"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                    {{-- <a href="{{URL::to('PMO/Mid-Marks')}}" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>Mid Marks</a>
                                    <a href="{{URL::to('PMO/Finel-Marks')}}" class="btn text-success border border-success btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>Finel Marks</a>
                                    <a href="{{URL::to('PMO/add-student')}}" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                    <a href="" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> --}}
                                    <!-- <a href="Add-student-for-PMO.html" class="btn btn-primary btn-sm m-1 ms-3">Update</a>
                                    <a href="" class="btn btn-danger btn-sm m-1 ms-3">Delete</a>
                                    <a href="Add-student-Marks-for-PMO.html" class="btn btn-success btn-sm m-1 ms-3">Add Marks</a> -->
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