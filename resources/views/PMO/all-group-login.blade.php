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
                                <select name="select" id="selectgrouplogin" class="form-control" onchange="allloginsreloadPage()" required>
                                  <option value="">All Student</option>
                                  @foreach($session as $item)
                                    <option value="{{$item->Year}}">{{$item->Year}}</option>
                                  @endforeach
                                </select>
                                <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                              </div>
                        </Form>
                        <h3 class="mt-4" style="color: #4040a2;">All Login's</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">logins</li>
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
                                Group Logins
                            </div>
                            <div class="card-body grouplogins">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ProjectID</th>
                                            <th>Password</th>
                                            <th>Session</th>
                                            <th class="text-center" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Session</th>
                                            <th class="text-center" style="text-align: center;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($allgrouplogin as $item)
                                        <tr>
                                            <td>{{$item->projectid}}</td>
                                            <td>{{$item->password}}</td>
                                            <td>{{$item->session}}</td>
                                            <td class="purposelbutton" style="text-align: center;">
                                                <!-- <a href="Add-student-for-PMO.html" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>View</a> -->
                                                <a href="{{URL::to('PMO/updategrouplogin/'.$item->id)}}" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                                <a href="{{URL::to('PMO/deletegrouplogin/'.$item->id)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                                <a href="{{ URL::to('PMO/dactivategrouplogin/'.$item->id) }}" class="btn btn-sm ms-3 border {{ $item->loginstatus == 1 ? 'text-warning  border-warning' : 'text-success  border-success' }}">{{ $item->loginstatus == 1 ? 'D-Activate' : 'Activate' }}</a>
                                                <!-- <a href="Add-student-login-for-PMO.html" class="btn btn-success btn-sm m-1 ms-3">Update</a>
                                                <a href="" class="btn btn-danger btn-sm m-1 ms-3">Delete</a> -->
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