@extends('Layouts.studentindex-for-pmo')

@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        <div class="container-fluid px-4">
            <Form class="mt-2 mb-5">
                <div class="form-outline w-25">
                    <label class="form-label" for="form6Example2" style="color: #4040a2; font-size: 20px;">Select Session</label>
                    <select name="selectgroupaccordingsession" id="selectgroupaccordingsession" class="form-control" onchange="allgroupreloadPage()" required>
                      <option value="">All Student</option>
                      @foreach ($session as $item)
                      <option value="{{$item->Year}}">{{$item->Year}}</option>
                      @endforeach
                    </select>
                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                    {{-- <a href="{{URL::to('download-pdf')}}">ddd</a> --}}
                  </div>
            </Form>
            <h3 class="mt-4" style="color: #4040a2;">Group's</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{URL::to('PMO/home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">groups</li>
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
                    groups
                </div>
                <div class="card-body studentgrouptable">
                    <table id="datatablesSimple" >
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Group Leader Name</th>
                                <th>Reg.No</th>
                                <th>Phone</th>
                                <th>Superviser Name</th>
                                <th>Clearance Status</th>
                                <th>Progress</th>
                                <th class="text-center" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Project ID</th>
                                <th>Group Leader Name</th>
                                <th>Reg.No</th>
                                <th>Phone</th>
                                <th>Superviser Name</th>
                                <th>Clearance Status</th>
                                <th>Progress</th>    
                                <th class="text-center" style="text-align: center;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if(isset($allgrouprecord))
                            @foreach ($allgrouprecord as $item)
                             <tr>
                                <td>{{$item->studentgroup->allgrouplogin->projectid}}</td>
                                <td>{{$item->studentgroup->studentsrecords->name}}</td>
                                <td>{{$item->studentgroup->studentsrecords->regno}}</td>
                                <td>{{$item->studentgroup->studentsrecords->pnumber}}</td>
                                <td>{{$item->supervisor->name}}</td>
                                <td>{{$item->studentgroup->submiteditems ? $item->studentgroup->submiteditems->booklet !== 0 && $item->studentgroup->submiteditems->CD !== 0 && $item->studentgroup->submiteditems->flex !== 0 ? 'Clear' : 'Pending' : 'Pending'}}</td>
                                @php
                                    $record=\App\Models\projectweightage::where('purposelid',$item->id)->first();
                                    if($record)
                                    {
                                        $weightedTopics=json_decode($record->keyNvalue,true);
                                        $personProgress=json_decode($record->valuesofweighatage,true);
                                        $totalWeightedProgress = 0;
                                        $totalWeight = array_sum($weightedTopics);

                                        // Calculate weighted progress for the person
                                        foreach ($weightedTopics as $topic => $weight) {
                                            if (isset($personProgress[$topic])) {
                                                // Calculate weighted progress for each topic
                                                $weightedProgress = ($personProgress[$topic] / 100) * $weight;
                                                $totalWeightedProgress += $weightedProgress;
                                            }
                                        }
                                        // Calculate overall progress percentage
                                        if ($totalWeight > 0) {
                                            $overallProgress = ($totalWeightedProgress / $totalWeight) * 100;
                                        } else {
                                            $overallProgress = 0; // Default value if total weight is zero
                                        }
                                    }else {
                                            $overallProgress = 0; // Default value if total weight is zero
                                    }
                                    // Display overall progress
                                    //  round($overallProgress, 2);
                                @endphp
                                <td>
                                    <div class="progress mt-3" style="height: 14px">
                                        @php
                                            $roundedProgress = round($overallProgress, 2);
                                            $colorClass = '';
                                            
                                            if ($roundedProgress <= 30) {
                                                $colorClass = '#ec0707';
                                            } elseif ($roundedProgress <= 50) {
                                                $colorClass = '#177dc7';
                                            } else {
                                                $colorClass = '#077a59';
                                            }
                                        @endphp

                                        <div class="progress-bar" role="progressbar" style="width: {{ $roundedProgress }}%; background-color: {{ $colorClass }};" aria-valuenow="{{ $roundedProgress }}" aria-valuemin="0" aria-valuemax="100">
                                            {{ $roundedProgress }}%
                                        </div>
                                    </div>
                                </td>
                                <td class="purposelbutton">
                                    <!-- Default dropend button -->
                                    <div class="dropdown-center d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle dynamicbuttongroup" id="dropdownButton" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                          Option
                                        </button>
                                        <ul class="dropdown-menu" style="display: none;">
                                         <li><span class="dropdown-item-text text-secondary">Action</span></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/group-detail/'.$item->studentgroup->id)}}"><i class="fa-solid fa-book-open-reader fa-lg me-2" style="color: #6c757d;"></i>View</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/purposel-update/'.$item->id)}}"><i class="fa-regular fa-pen-to-square fa-lg  me-2" style="color: #6c757d;"></i>Update Purposel</a></li>
                                          @if($item->studentgroup->groupmembers<3)
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/updategroup/'.$item->studentgroup->id)}}"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Update Group</a></li>
                                          @else
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="#" id="prevent"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Group Completed</a></li>
                                          @endif
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/studentsubmiteditems/'.$item->studentgroup->id)}}"><i class="fa-solid fa-list-check fa-lg me-2"></i>Submited Items</a></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/defanceform/'.$item->studentgroup->id)}}"><i class="fa-regular fa-file-lines fa-lg me-2" style="color: #53637f;"></i>Preliminary Form</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/meetingform/'.$item->studentgroup->id)}}"><i class="fa-regular fa-file fa-lg me-2" style="color: #53637f;"></i>Meeting Form</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/midEvaform/'.$item->studentgroup->id)}}"><i class="fa-solid fa-pager fa-lg me-2"></i>Mid Evaluation Form</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/finalform/'.$item->studentgroup->id)}}"><i class="fa-solid fa-file fa-lg me-2"></i>Finel Evalution Form</a></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" {{ $item->studentgroup->studentdoc ? $item->studentgroup->studentdoc->purposelabstract ? "href=".URL::to('PMO/studentdocopen/'.$item->studentgroup->studentdoc->purposelabstract) : 'href=javascript:void(0);' : 'href=javascript:void(0);' }} ><i class="fa-solid fa-paperclip fa-lg me-2"></i>{{$item->studentgroup->studentdoc ? $item->studentgroup->studentdoc->purposelabstract ? 'Purposel Uplouded' : 'Purposel Not Uploud' : 'Purposel Not Uploud'}}</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" {{ $item->studentgroup->studentdoc ? $item->studentgroup->studentdoc->documentation ? "href=".URL::to('PMO/studentdocopen/'.$item->studentgroup->studentdoc->documentation) : 'href=javascript:void(0);' : 'href=javascript:void(0);' }}><i class="fa-solid fa-book fa-lg me-2"></i>{{$item->studentgroup->studentdoc ? $item->studentgroup->studentdoc->documentation ? 'Doc Uplouded' : 'Doc NotUploud'  : 'Doc NotUploud'}}</a></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-danger" href=""><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                    <!-- <a href="singel-group-detail-for-PMO.html" class="btn text-info border border-info btn-sm"><i class="fa-solid fa-book-open-reader fa-lg me-1 "></i>View</a>
                                    <a href="test.html" class="btn text-secondary border border-secondary btn-sm "><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                    <a href="" class="btn btn-sm text-danger border border-danger"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> -->
                                </td>
                             </tr>
                                
                            @endforeach
                            {{-- @foreach ($allgrouprecord as $item)
                            @if ($item->PreliminaryProposal && $item->PreliminaryProposal->supervisor && $item->PreliminaryProposal->supervisor->name)
                            <tr>
                                    @if ($item->studentsrecords && $item->studentsrecords->name)
                                        <td>{{$item->allgrouplogin->projectid}}</td>
                                        <td>{{$item->studentsrecords->name}}</td>
                                        <td>{{$item->studentsrecords->regno}}</td>
                                        <td>{{$item->studentsrecords->pnumber}}</td>
                                    @else
                                        <td>Select Group Member</td>
                                        <td>Select Group Member</td>
                                        <td>Select Group Member</td>
                                        <td>Select Group Member</td>
                                    @endif
                                    <td>{{$item->PreliminaryProposal->supervisor->name}}</td>
                                <td class="purposelbutton">
                                    <!-- Default dropend button -->
                                    <div class="dropdown-center d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle dynamicbuttongroup" id="dropdownButton" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                          Option
                                        </button>
                                        <ul class="dropdown-menu" style="display: none;">
                                         <li><span class="dropdown-item-text text-secondary">Action</span></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/group-detail/'.$item->id)}}"><i class="fa-solid fa-book-open-reader fa-lg me-2" style="color: #6c757d;"></i>View</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/purposel-update/'.$item->preliminaryProposal->id)}}"><i class="fa-regular fa-pen-to-square fa-lg  me-2" style="color: #6c757d;"></i>Update Purposel</a></li>
                                          @if($item->groupmembers<3)
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/updategroup/'.$item->id)}}"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Update Group</a></li>
                                          @else
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="#" id="prevent"><i class="fa fa-refresh fa-lg me-2" style="color: #6c757d;" aria-hidden="true"></i>Group Completed</a></li>
                                          @endif
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/meetingform/'.$item->id)}}"><i class="fa-regular fa-file fa-lg me-2" style="color: #53637f;"></i>Meeting Form</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/midEvaform/'.$item->id)}}"><i class="fa-solid fa-pager fa-lg me-2"></i>Mid Evaluation Form</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/finalform/'.$item->id)}}"><i class="fa-solid fa-file fa-lg me-2"></i>Finel Evalution Form</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" {{ $item->studentdoc ? $item->studentdoc->purposelabstract ? "href=".URL::to('PMO/studentdocopen/'.$item->studentdoc->purposelabstract) : 'href=javascript:void(0);' : 'href=javascript:void(0);' }} ><i class="fa-solid fa-paperclip fa-lg me-2"></i>{{$item->studentdoc ? $item->studentdoc->purposelabstract ? 'Purposel Uplouded' : 'Purposel Not Uploud' : 'Purposel Not Uploud'}}</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" {{ $item->studentdoc ? $item->studentdoc->documentation ? "href=".URL::to('PMO/studentdocopen/'.$item->studentdoc->documentation) : 'href=javascript:void(0);' : 'href=javascript:void(0);' }}><i class="fa-solid fa-book fa-lg me-2"></i>{{$item->studentdoc ? $item->studentdoc->documentation ? 'Doc Uplouded' : 'Doc NotUploud'  : 'Doc NotUploud'}}</a></li>
                                          <li><a class="dropdown-item btn btn-sm text-secondary" href="{{URL::to('PMO/studentsubmiteditems/'.$item->id)}}"><i class="fa-solid fa-list-check fa-lg me-2"></i>Submited Items</a></li>
                                          <li><hr class="m-0"></li>
                                          <li><a class="dropdown-item btn btn-sm text-danger" href=""><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                    <!-- <a href="singel-group-detail-for-PMO.html" class="btn text-info border border-info btn-sm"><i class="fa-solid fa-book-open-reader fa-lg me-1 "></i>View</a>
                                    <a href="test.html" class="btn text-secondary border border-secondary btn-sm "><i class="fa-regular fa-pen-to-square fa-lg  me-1" style="color: #6c757d;"></i>Update</a>
                                    <a href="" class="btn btn-sm text-danger border border-danger"><i class="fa-regular fa-trash-can fa-lg  me-1" style="color: #df0707;"></i>Delete</a> -->
                                </td>
                            </tr>
                            @endif
                            @endforeach --}}
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    @endsection