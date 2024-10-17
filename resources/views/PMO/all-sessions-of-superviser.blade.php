@extends('Layouts.superviserindex-for-pmo')
@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        <div class="container-fluid px-4">
            <Form class="mt-2 mb-5">
                {{-- <div class="form-outline w-25">
                    <label class="form-label" for="form6Example2" style="color: #4040a2; font-size: 20px;">Select Session</label>
                    <select name="select" id="selectsuperviser" class="form-control" onchange="" required>
                        <option value="">Select Session</option>
                        @foreach($session as  $key=>$val)
                        <option value="{{$val->Year}}">{{$val->Year}}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                  </div> --}}
            </Form>
            <h3 class="mt-4" style="color: #4040a2;">All Superviser</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Superviser</li>
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
                    Superviser
                </div>
                <div class="card-body supervisertable">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Superviser Name</th>
                                <th>Session</th>
                                <th class="text-center" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Superviser Name</th>
                                <th>Session</th>
                                <th class="text-center" style="text-align: center;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($superviser as  $index => $item)
                            {{-- @if($index === 0)
                                @continue
                            @endif --}}
                            <tr>
                                <td>{{$item->superviser->name}}</td>
                                <td>{{$item->session}}</td>
                                <td>
                                    <a class=" delete flex items-center btn btn-sm border border-danger text-danger mt-1" href="{{URL::to('PMO/deletesuperviserfromsession/'.$item->id)}}" data-bs-toggle="modal" data-bs-target="#delete-modal-preview">
                                        <i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete
                                    </a>
                                </td>
                                {{-- <td>{{$item->pnumber}}</td>
                                <td>{{$item->email}}</td> --}}
                                {{-- <td>{{$item->supervisersessions->first()->session}}</td> --}}
                                {{-- <td>{{$item->superviserSessions}}</td> --}}
                                {{-- <td class="purposelbutton" style="text-align: center;">
                                      <!-- Default dropend button -->
                                      <div class="dropdown-center d-flex justify-content-center">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle dynamicbutton" id="dropdownButtonn" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                            Option
                                            </button>
                                            <ul class="dropdown-menu" style="display:none;">
                                                <li><span class="dropdown-item-text text-secondary">Action</span></li>
                                                <li><hr class="m-0"></li>
                                                <li><a href="{{URL::to('PMO/updatesuperviser/'.$item->id)}}" class="dropdown-item btn text-secondary btn-sm"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a></li>
                                                <li><a href="{{URL::to('PMO/dactivatesuperviser/'.$item->id)}}" class="dropdown-item btn btn-sm text-secondary"><i class="fa-solid {{ $item->loginstatus == 1 ? 'fa-handshake-slash' : 'fa-handshake-simple' }} fa-lg me-1"></i>{{ $item->loginstatus == 1 ? 'D-Activate' : 'Activate' }}</a></li>
                                                {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/deletesuperviser/'.$item->id)}}"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Update</a></li> --}}
                                                {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-regular fa-file fa-lg me-2" style="color: #53637f;"></i>Meeting Form</a></li> --}}
                                                {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-solid fa-pager fa-lg me-2"></i>Mid Evaluation Form</a></li> --}}
                                                {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-solid fa-file fa-lg me-2"></i>Finel Evalution Form</a></li> --}}
                                                {{-- <li><hr class="m-0"></li>
                                                <li><a class="dropdown-item btn btn-sm text-danger mt-1" href="{{URL::to('PMO/deletesuperviser/'.$item->id)}}"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a></li>
                                            </ul>
                                       </div>
                                    <a href="{{URL::to('PMO/addagainsuperviser/'.$item->id)}}" class="btn text-primary border border-primary btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>Add Again</a> --}}
                                    {{-- <a href="{{URL::to('PMO/updatesuperviser/'.$item->id)}}" class="btn text-secondary border border-secondary btn-sm ms-3"><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a> --}}
                                    {{-- <a href="{{URL::to('PMO/deletesuperviser/'.$item->id)}}" class="btn btn-sm text-danger border border-danger  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> --}}
                                    {{-- <a href="{{URL::to('PMO/dactivatesuperviser/'.$item->id)}}" class="btn btn-sm ?$item->loginstatue=1 : text-info border border-info  ms-3"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #0dcaf0;"></i>D-Activate</a> --}}
                                    <!-- <a href="Add-supervisor-for-PMO.html" class="btn btn-success btn-sm m-1 ms-3">Update</a>
                                     <a href="" class="btn btn-danger btn-sm m-1 ms-3">Delete</a>
                                </td> --}}
                                <td>
                                    @php
                                        $enrolledSessions = [];
                                        foreach ($supervisersession as $Ssession) {
                                            if ($Ssession->superviserid == $item->id) {
                                                $enrolledSessions[] = $Ssession->session;
                                            }
                                        }
                                     @endphp
                                     @if(!in_array(now()->format('Y'), $enrolledSessions))
                                        <a href="{{ URL::to('PMO/enrollagainsuperviser/'.$item->id.'/'.now()->format('Y')) }}" class="btn text-primary border border-primary btn-sm ms-3">Enroll In {{ now()->format('Y')}}</a>
                                     @else
                                     <a href="javascript:void(0);" class="btn text-primary border border-primary btn-sm ms-3">AlreadyEnroll {{ now()->format('Y')}}</a>
                                     @endif
                                      Default dropend button -->
                                    {{-- <div class="dropdown-center d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownButtonn" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                            Add Again
                                        </button>
                                        <ul class="dropdown-menu" style="display:;">
                                         <li><span class="dropdown-item-text text-secondary">Enroll Again</span></li>
                                          <li><hr class="m-0"></li>
                                          ////enroll current year
                                            <li><a class="dropdown-item btn btn-sm text-secondary" href="{{ URL::to('PMO/enrollagainsuperviser/'.$item->id.'/'.now()->format('Y')) }}">{{ now()->format('Y') }}</a></li>
                                             @php
                                                $enrolledSessions = [];
                                                foreach ($supervisersession as $Ssession) {
                                                    if ($Ssession->superviserid == $item->id) {
                                                        $enrolledSessions[] = $Ssession->session;
                                                    }
                                                }
                                            @endphp
                                            @foreach($session as $key => $val)
                                                @if(!in_array($val->Year, $enrolledSessions))
                                                   @if(!(now()->format('Y') > $val->Year))
                                                   ////all remining year in wich you can enroll
                                                    <li><a class="dropdown-item btn btn-sm text-secondary" href="{{ URL::to('PMO/enrollagainsuperviser/'.$item->id.'/'.$val->Year) }}">{{ $val->Year }}</a></li>
                                                    @endif
                                                @endif
                                            @endforeach --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/Finel-Marks')}}"><i class="fa-regular fa-pen-to-square fa-lg  me-2" style="color: #6c757d;"></i>Finel Marks</a></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/add-student')}}"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Update</a></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-regular fa-file fa-lg me-2" style="color: #53637f;"></i>Meeting Form</a></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-solid fa-pager fa-lg me-2"></i>Mid Evaluation Form</a></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-secondary" href="ali"><i class="fa-solid fa-file fa-lg me-2"></i>Finel Evalution Form</a></li> --}}
                                          {{-- <li><hr class="m-0"></li> --}}
                                          {{-- <li><a class="dropdown-item btn btn-sm text-danger" href=""><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a></li> 
                                        </ul>
                                    </div>--}}
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
