@extends('Layouts.index-for-pmo')

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
        <div class="container-fluid mt-3">
            <form action="{{ route('PMO.fileuploudindividule') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-4 mt-4">
                        <div class="col-md-6">
                           <h5 style="color: #4040a2;">Share File</h5>
                            <div class="form-outline">
                                {{-- <label class="form-label" for="form6Example2">Session</label> --}}
                                {{-- <input type="hidden" name="fileforgroupid" value="{{$item['id']}}" id=""> --}}
                                <select id="form6Example2" class="form-control" name="fileforgroup" >
                                <option value="">Select Group</option>
                                @foreach($allgrouparry as  $item)
                                <option value="{{$item['id']}}">{{$item->allgrouplogin->projectid}}</option>
                                @endforeach
                                </select>
                                <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                            </div>
    
                        </div>
                        <div class="col-md-6">
                            <h5 style="color: #4040a2;">Share File</h5>
                            <div class="form-outline">
                                {{-- <label class="form-label" for="form6Example2">Session</label> --}}
                                {{-- <input type="hidden" name="fileforgroupid" value="{{$val->id}}" id=""> --}}
                                <select id="form6Example2" class="form-control" name="fileforsupervisor" >
                                <option value="">Select Supervisor</option>
                                @foreach($allsupervisor as $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                                </select>
                                <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                            </div>
                        </div>
                        <div class="mt-3">
                            <input class="form-control" type="file" id="formFile" name="filename" />
                        </div>
                        <div class="d-flex justify-content-end">
                            {{-- <button type="submit" class="btn btn-primary mt-3">Send</button> --}}
                            <input type="submit" value="Send" class="btn btn-primary mt-3">
                        </div>
                    </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <form action="{{route('PMO.fileuploud')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 style="color: #4040a2;">Share File</h5>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" name="supervisor" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                For Supervisors
                            </label>
                          </div>
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" name="student" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                                For Groups
                            </label>
                        </div>
                        <div class="mt-3">
                            <input class="form-control" type="file" id="formFile" name="file" />
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3">Send</button>
                        </div>
                    </form>
                    <main>
                        <div class="container-fluid px-4">
                            <h3 class="mt-4" style="color: #4040a2;">Shared Files</h3>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">File's</li>
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
                                    Files
                                </div>
                                <div class="card-body table_custom">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>File Name</th>
                                                <th>Share with</th>
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                <th class="text-center" style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>File Name</th>
                                                <th>Share with</th>
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                <th class="text-center" style="text-align: center;">Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($allfile as $item)
                                            <tr>
                                                <td>{{$item->filename}}</td>
                                                <td>{{$item->sharedwith}}</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>
                                                <td>zunu@gamil.com</td> -->
                                                <td class="purposelbutton" style="text-align: center;">
                                                    <a href="{{URL::to('PMO/openFile/'.$item->id)}}" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>View</a>
                                                    <!-- <a href="" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> -->
                                                    <a href="{{URL::to('PMO/deletefile/'.$item->id)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
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
