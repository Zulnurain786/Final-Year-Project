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
      <section class="section mt-3">
        <div class="container d-flex justify-content-center">
          <div class="row  w-75">
            <h2 class="d-flex justify-content-center mb-5" style="color: #4040a2;">Group login</h2>
            <div class="col-lg-12">
              <form action="{{route('PMO.addgrouplogin')}}" method="POST">
                @csrf
                 <div class="mb-4 border rounded">
                    <div class="m-3">
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example1">ProjectID</label>
                            <input type="text" id="form6Example1" class="form-control" name="projectid" pattern="GIMS-(BSCS|BSIT)-[A-Za-z]\d{5,6}" placeholder="GIMS-BSCS-F202015" required/> 
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example2">Password</label>
                            <!-- <select name="select" id="select" class="form-control" onchange="selectedValue(this.value)">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select> -->
                            <input type="password" id="form6Example2" class="form-control" name="password" placeholder="ex# ********" required/>
                          </div>
                        </div>
                          <div class="form-outline mt-3">
                            <label class="form-label" for="form6Example2">Year</label>
                            <select id="select" class="form-control" name="session">
                              @foreach($allsession as $item)
                              <option value="{{$item->Year}}">{{$item->Year}}</option>
                              @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="yearInput" name="year" pattern="20[2-9][5-9]|[3-9][0-9]{3}" title="Please enter a year greater than 2024 (e.g., 2025, 2030, etc.)" required> --}}
                            {{-- <input type="password" id="form6Example2" class="form-control" name="password" placeholder="ex# ********" required/> --}}
                          </div>
                      </div>
                      <!-- Text input -->
                      {{-- <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example3email">Student Recovery Email</label>
                            <input type="email" id="form6Example3email" class="form-control" placeholder="ex# zunu@gmail.com" required />
                      </div> --}}
                  </div>
                  </div>
                <!-- Checkbox -->
                <!-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" />
                  <label class="form-check-label" for="form6Example8"> Group leader? </label>
                </div> -->
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection