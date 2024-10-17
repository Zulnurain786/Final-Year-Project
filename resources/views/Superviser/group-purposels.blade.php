@extends('Layouts.index-for-supervisor')
@section('content')
<div id="layoutSidenav_content" style="background-color: #f7fbff;">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"  style="color: #4040a2;">Proposals</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Proposals</li>
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
                    proposals
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Project Title</th>
                                <th>First Member</th>
                                <th>Second Member</th>
                                <th>Third Member</th>
                                <th>Total Members</th>
                                <th class="text-center" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Project Title</th>
                                <th>First Member</th>
                                <th>Second Member</th>
                                <th>Third Member</th>
                                <th>Total Members</th>
                                <th class="text-center" style="text-align: center;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($allpurposel as $item)
                            <tr>
                                <td>{{$item->projectname}}</td>
                                <td>{{$item->studentgroup->studentsrecords->name ?? ''}}</td>
                                <td>{{$item->studentgroup->studentsrecord1->name ?? ''}}</td>
                                <td>{{$item->studentgroup->studentsrecord2->name ?? ''}}</td>
                                @php
                                    $count = 0;
                                    if(!empty($item->studentgroup->studentsrecords->name)) {
                                        $count++;
                                    }
                                    if(!empty($item->studentgroup->studentsrecord1->name)) {
                                        $count++;
                                    }
                                    if(!empty($item->studentgroup->studentsrecord2->name)) {
                                        $count++;
                                    }
                                @endphp
                                <td>{{$count}}</td>
                                <td class="purposelbutton" style="text-align: center;">
                                    <!-- <a href="purposel-action-for-supervisor.html" class="btn btn-primary btn-sm  ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1 "></i>View</a>     -->
                                    <a href="{{ URL::to('Superviser/action-on-purposel/' . $item->id) }}" class="btn text-info border border-info btn-sm ms-3"><i class="fa-solid fa-book-open-reader fa-lg me-1"></i>View</a>                                        
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