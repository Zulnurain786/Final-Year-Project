@extends('Layouts.index-for-pmo')
@section('content')
<div id="layoutSidenav_content"  style="background-color: #f7fbff;">
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
                    <label class="form-label" for="selectpmo" style="color: #4040a2; font-size: 20px;">Select Session</label>
                    <select name="selectpmo" id="selectpmo" class="form-control" onchange="allpmoreloadPage()" required>
                     <option value="">All PMO</option>
                      @foreach($readsession as $item)
                      <option value="{{$item->Year}}">{{$item->Year}}</option>
                      @endforeach
                    </select>
                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                  </div>
            </Form>
            <h3 class="mt-4" style="color: #4040a2;">PMO's detail</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">PMO</li>
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
                <div class="card-body pmotable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Session</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Session</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($allpmo as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->pnumber}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->session}}</td>
                                <td>
                                    {{-- <a href="Add-student-mid-marks-for-PMO.html" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>Mid Marks</a> --}}
                                    {{-- <a href="Add-student-finel-marks-for-PMO.html" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-file-pen fa-xl"></i>Finel Marks</a> --}}
                                    <a href="{{URL::to('PMO/updatepmo/'.$item->id)}}" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                    <a href="{{URL::to('PMO/deletepmo/'.$item->id)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                    {{-- <a href="{{URL::to('PMO/dactivatepmo/'.$item->id)}}" class="btn btn-sm ?$item->loginstatue=1 : text-info border border-info  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #0dcaf0;"></i>D-Activate</a> --}}
                                    <a href="{{ URL::to('PMO/dactivatepmo/'.$item->id) }}" class="btn btn-sm ms-3 border {{ $item->loginstatus == 1 ? 'text-warning  border-warning' : 'text-success  border-success' }}">{{ $item->loginstatus == 1 ? 'D-Activate' : 'Activate' }}</a>
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