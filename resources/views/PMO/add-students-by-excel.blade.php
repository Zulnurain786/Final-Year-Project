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
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <form id="excelUploadForm" action="{{route('PMO.addstudentbyexcel')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 style="color: #4040a2;">Add Only Excel File</h5>
                        <!-- <div class="form-check mt-3">
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
                        </div> -->
                        <div class="mt-3">
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection