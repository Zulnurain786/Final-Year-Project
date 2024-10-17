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
                <div class="col-12">
                    <!-- <form action="">
                        <h5>Select To Share File</h5>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                For Superviser
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                                For Student
                            </label>
                        </div>
                        <div class="mt-3">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mt-3">Send</button>
                        </div>
                    </form> -->
                    <main>
                        <div class="container-fluid px-4">
                            <h3 class="mt-4" style="color: #4040a2;">Project Status</h3>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item"><a href="index-for-student.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Project</li>
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
                                    Project
                                </div>
                                <div class="card-body table_custom ">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Prject Title</th>
                                                <th>Supervisor</th>
                                                <th>Comments</th>
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                <th class="text-center" style="text-align: center;">Status</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Prject Title</th>
                                                <th>Supervisor</th>
                                                <th>Comments</th>
                                                <!-- <th>Reg.No</th>
                                                <th>Phone</th>
                                                <th>Email</th> -->
                                                <th class="text-center" style="text-align: center;">Status</th>
                                                <th>Progress</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($purposel as $item)
                                            <tr>
                                                <td>purposel Form</td>
                                                <td>{{$item->projectname}}</td>
                                                <td>{{$item->supervisor->name}}</td>
                                                <td>{{$item->purposelreason ? $item->purposelreason : 'Pending' }}</td>
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td>-->
                                                <td>{{$item->purposelstatus}}</td> 
                                                <!-- <td class="purposelbutton" style="text-align: center;">
                                                    <a href="" class="btn btn-primary btn-sm  ms-3">View</a>
                                                </td> -->
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
                                            </tr>
                                            @endforeach
                                            
                                            <!-- <tr> -->
                                                <!-- <td>Zunu</td> -->
                                                <!-- <td>Finel Evaluation</td> -->
                                                <!-- <td>20-Arid-1747</td>
                                                <td>03137898012</td> -->
                                                <!-- <td>9</td> -->
                                                <!-- <td class="purposelbutton" style="text-align: center;">
                                                    <a href="" class="btn btn-primary btn-sm  ms-3">View</a>
                                                </td> -->
                                            <!-- </tr> -->
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