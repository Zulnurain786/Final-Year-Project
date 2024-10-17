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
                        {{-- <Form class="mt-2 mb-5">
                            <div class="form-outline w-25">
                                <label class="form-label" for="form6Example2" style="color: #4040a2; font-size: 20px;">Select Session</label>
                                <select name="select" id="selectgrouplogin" class="form-control" onchange="" required>
                                  @foreach($session as $item)
                                    <option value="{{$item->Year}}">{{$item->Year}}</option>
                                  @endforeach
                                </select>
                                <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                              </div>
                        </Form> --}}
                        <h3 class="mt-4" style="color: #4040a2;">Group Member</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Group Member</li>
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
                                Group Member
                            </div>
                            <div class="card-body grouplogins">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Reg NO</th>
                                            <th>Department</th>
                                            {{-- <th class="text-center" style="text-align: center;">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Reg NO</th>
                                            <th>Department</th>
                                            {{-- <th class="text-center" style="text-align: center;">Action</th> --}}
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($studentregnos as $item)
                                        <tr>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td>{{$item['regno']}}</td>
                                            <td>{{$item['department']}}</td>
                                            {{-- <td class="purposelbutton" style="text-align: center;">
                                                <!-- <a href="Add-student-for-PMO.html" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>View</a> -->
                                                <a href="{{URL::to('PMO/updategrouplogin/'.$item->id)}}" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                                <a href="{{URL::to('PMO/deletegrouplogin/'.$item->id)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a>
                                                <!-- <a href="Add-student-login-for-PMO.html" class="btn btn-success btn-sm m-1 ms-3">Update</a>
                                                <a href="" class="btn btn-danger btn-sm m-1 ms-3">Delete</a> -->
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <h2 class="d-flex justify-content-center mb-5" style="color: #4040a2;">Submited Items</h2>
                            <div class="col-lg-12">
                              {{-- {{ route('submitForm', ['id' => 7]) }} --}}
                              <form action="{{route('PMO.groupsubmiteditem')}}" method="POST">
                                @csrf
                                 <div class="mb-4 border rounded">
                                    <div class="m-3">
                                      <!-- 2 column grid layout with text inputs for the first and last names -->
                                      <div class="row mb-4">
                                        <input type="hidden" name="id" value="{{$grouprecord->id}}">
                                        {{-- <div class="col">
                                          <div class="form-outline">
                                            <label class="form-label" for="form6Example1">ProjectID</label>
                                            <input type="text" id="form6Example1" class="form-control" name="projectid" placeholder="Fall20212" required/>
                                          </div>
                                        </div> --}}
                                        <div class="col mt-3">
                                          <div class="form-outline">
                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox"  {{ $submiteditems ? $submiteditems->booklet == 1 ? 'checked' : '' : '' }} id="form6Example8" name="booklet" />
                                                <label class="form-check-label" for="form6Example8"> Booklet </label>
                                            </div> 
                                          </div>
                                        </div>
                                        <div class="col mt-3">
                                          <div class="form-outline">
                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" name="flex" {{ $submiteditems ? $submiteditems->flex == 1 ? 'checked' : '' : '' }} />
                                                <label class="form-check-label" for="form6Example8">Flex </label>
                                            </div> 
                                          </div>
                                        </div>
                                        <div class="col mt-3">
                                          <div class="form-outline">
                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" id="form6Example8" name="cds" {{$submiteditems ? $submiteditems->CD == 1 ? 'checked' : '' : '' }} />
                                                <label class="form-check-label" for="form6Example8">CD's </label>
                                            </div> 
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Text input -->
                                      {{-- <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example3email">Student Recovery Email</label>
                                            <input type="email" id="form6Example3email" class="form-control" placeholder="ex# zunu@gmail.com" required />
                                      </div> --}}
                                  </div>
                                  </div>
                                
                              
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                              </form>
                            </div>
                          </div>

     </div>
  </main>
@endsection