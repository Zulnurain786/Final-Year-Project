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
                    <form action="{{URL::to('Student/creategroup')}}" id="studentselect" method="POST">
                        @csrf
                            <h5 style="color: #4040a2;">Select Group Member</h5>
                            <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple" required>
                                @foreach ($allstudent as $item)
                                    <option value="{{ $item->regno }}">{{ $item->name }} , {{ $item->regno }}</option>
                                @endforeach
                            </select>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mt-3 me-3">Save</button>
                            </div>
                    </form>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4" style="color: #4040a2;">Group detail</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('Student/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Member's</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Detail
                            </div>
                            <div class="card-body table_custom">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reg.No</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reg.No</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($studentregnos as $item)
                                        <tr>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['regno'] }}</td>
                                            <td>{{ $item['pnumber'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection