@extends('Layouts.index-for-student')

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
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('Student.uplouddocumentation') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 style="color: #4040a2;">Share Project Documentation</h5>
                        {{-- <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                For Superviser
                            </label>
                        </div> --}}
                        <div class="form-outline">
                            <select name="select" id="select" class="form-control" required>
                              <option value="">Select File</option>
                              <option value="purposelabstract">Purposel Abstract</option>
                              <option value="documentation">Documentation</option>
                            </select>
                            <!-- <input type="text" id="form6Example2" class="form-control" placeholder="No.Of Members" pattern="[1-3]{1}" required/> -->
                          </div>
                        <div class="mt-3">
                            <input class="form-control" type="file" id="formFile" name="file">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3">Send</button>
                            {{-- <input type="submit" value="Send" class="btn btn-primary mt-3"> --}}
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('Student.uploudfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 style="color: #4040a2;">Share File</h5>
                        {{-- <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                For Superviser
                            </label>
                        </div> --}}
                        <div class="form-outline">
                            <select name="select" id="select" class="form-control" required>
                              <option value="">Select Person</option>
                              <option value="supervisor">Supervisor</option>
                              <option value="pmo">PMO</option>
                            </select>
                            <!-- <input type="text" id="form6Example2" class="form-control" placeholder="No.Of Members" pattern="[1-3]{1}" required/> -->
                          </div>
                        <div class="mt-3">
                            <input class="form-control" type="file" id="formFile" name="file">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3">Send</button>
                            {{-- <input type="submit" value="Send" class="btn btn-primary mt-3"> --}}
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <main>
                        <div class="container-fluid px-4">
                            <h3 class="mt-4" style="color: #4040a2;">Shared Files</h3>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="index-for-student.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Files</li>
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
                                <div class="card-body">
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
                                            @foreach ($findfile as $item)
                                            <tr>
                                                <td>{{$item->filename}}</td>
                                                <td>{{$item->sharedwith}}</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>
                                                <td>zunu@gamil.com</td> -->
                                                <td class="purposelbutton" style="text-align: center;">
                                                    <a href="{{URL::to('Student/openFile/'.$item->id)}}" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>View</a>
                                                    <a href="{{URL::to('Student/deletefile/'.$item->id)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                                    <!-- <a href="Add-student-for-PMO.html" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> -->
                                                    {{-- <a href="" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                            @if(isset($finddoc))
                                            @if(isset($finddoc->purposelabstract))
                                            <tr>
                                                <td>{{$finddoc->purposelabstract}}</td>
                                                <td>Both</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>
                                                <td>zunu@gamil.com</td> -->
                                                <td class="purposelbutton" style="text-align: center;">
                                                    <a href="{{URL::to('Student/opendoc/'.$finddoc->purposelabstract)}}" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>View</a>
                                                    <a href="{{URL::to('Student/deletedoc/'.$finddoc->purposelabstract)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                                    <!-- <a href="Add-student-for-PMO.html" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> -->
                                                    {{-- <a href="" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> --}}
                                                </td>
                                            </tr>
                                            @endif
                                            @if(isset($finddoc->documentation))
                                            <tr>
                                                <td>{{$finddoc->documentation}}</td>
                                                <td>Both</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>
                                                <td>zunu@gamil.com</td> -->
                                                <td class="purposelbutton" style="text-align: center;">
                                                    <a href="{{URL::to('Student/opendoc/'.$finddoc->documentation)}}" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>View</a>
                                                    <a href="{{URL::to('Student/deletedoc/'.$finddoc->documentation)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                                    <!-- <a href="Add-student-for-PMO.html" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> -->
                                                    {{-- <a href="" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> --}}
                                                </td>
                                            </tr>
                                            @endif
                                            @endif
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