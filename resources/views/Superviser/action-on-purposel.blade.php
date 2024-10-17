@extends('Layouts.index-for-supervisor')
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
            <h2 class="d-flex justify-content-center mb-5" style="color: #4040a2;">Preliminary Proposal Form</h2>
            <div class="col-lg-12">
              <form action="{{route('Superviser.supervisoraction')}}" method="POST" >
                @csrf
                 <div class="mb-4 border rounded">
                    <div class="m-3">
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example1">Porgrammer Semester</label>
                            <input type="text" id="form6Example1" class="form-control" placeholder="7th" disabled />
                            <input type="hidden" id="form6Example1" class="form-control" name="id" value="{{$purposel->id}}" />
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example2">No.Of Members</label>
                            {{-- {{$purposel->studentgroup }} --}}
                            @php
                              $count = 0;
                              if(!empty($purposel->studentgroup->m1regno)) {
                                  $count++;
                              }
                              if(!empty($purposel->studentgroup->m2regno)) {
                                  $count++;
                              }
                              if(!empty($purposel->studentgroup->m3regno)) {
                                  $count++;
                              }
                            @endphp
                            <!-- <select name="select" id="select" class="form-control" onchange="selectedValue(this.value)" disabled>
                              <option value="2">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select> -->
                            <input type="text" id="form6Example2" class="form-control" value="{{$count}}" placeholder="No.Of Members" pattern="[1-3]{1}" required disabled/>
                          </div>
                        </div>
                      </div>
                      <!-- Text input -->
                      <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example3">Supervisor Name</label>
                            <input type="text" id="form6Example3" class="form-control" value="{{$purposel->supervisor->name}}" placeholder="ex# sir Bilal" required disabled />
                      </div>
                  </div>
                  </div>
                <div class="mb-4 border rounded">
                  <div class="m-3">
                      <!-- Text input -->
                      <div class="form-outline mb-4">
                        <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span>
                        <div class="row mb-4 mt-2">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example10">Reg.No</label>
                              <input type="text" id="form6Example10" class="form-control" placeholder="ex# 20-Arid-4567" value="{{$purposel->studentgroup->m1regno}}" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example20">Name</label>
                              <input type="text" id="form6Example20" class="form-control" value="{{$purposel->studentgroup->studentsrecords->name}}" placeholder="Name" disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example30">Email</label>
                              <input type="email" id="form6Example30" class="form-control" value="{{$purposel->studentgroup->studentsrecords->email}}" placeholder="Email" disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example40">Phone Number</label>
                              <input type="tel" id="form6Example40" class="form-control" placeholder="ex# 0300-1234567" value="{{$purposel->studentgroup->studentsrecords->pnumber}}" pattern="[0-9]{4}-[0-9]{7}" required disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4" style="{{ $purposel->studentgroup->m2regno ? 'display:block;' : 'display:none;' }}" id="second-member">
                        <span class="d-flex justify-content-center mb-4 fs-5">Second Member Detail</span>
                        <div class="row mb-4 mt-2">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example41">Reg.No</label>
                              <input type="text" id="form6Example41" class="form-control" value="{{$purposel->studentgroup->m2regno ? $purposel->studentgroup->studentsrecord1->regno : '' }}" placeholder="ex# 20-Arid-4567" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example42">Name</label>
                              <input type="text" id="form6Example42" class="form-control" value="{{$purposel->studentgroup->m2regno ? $purposel->studentgroup->studentsrecord1->name : '' }}" placeholder="Name" disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example43">Email</label>
                              <input type="email" id="form6Example43" class="form-control" value="{{ $purposel->studentgroup->m2regno ? $purposel->studentgroup->studentsrecord1->email : '' }}" placeholder="Email" disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example44">Phone Number</label>
                              <input type="tel" id="form6Example44" class="form-control" placeholder="ex# 0300-1234567" value="{{ $purposel->studentgroup->m2regno ? $purposel->studentgroup->studentsrecord1->pnumber : '' }}" pattern="[0-9]{4}-[0-9]{7}" required disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4 thired-member" style="{{ $purposel->studentgroup->m3regno ? 'display:block;' : 'display:none;' }}" id="thired-member">
                        <span class="d-flex justify-content-center mb-4 fs-5">Third Member Detail</span>
                        <div class="row mb-4 mt-2">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example80">Reg.No</label>
                              <input type="text" id="form6Example80" class="form-control" placeholder="ex# 20-Arid-4567" value="{{ $purposel->studentgroup->m3regno ? $purposel->studentgroup->m3regno : '' }}" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example81">Name</label>
                              <input type="text" id="form6Example81" class="form-control" placeholder="Name" value="{{ $purposel->studentgroup->m3regno ? $purposel->studentgroup->studentsrecord2->name : '' }}" disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example82">Email</label>
                              <input type="email" id="form6Example82" class="form-control" placeholder="Email" value="{{ $purposel->studentgroup->m3regno ? $purposel->studentgroup->studentsrecord2->email : '' }}" disabled/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example83">Phone Number</label>
                              <input type="tel" id="form6Example83" class="form-control" placeholder="ex# 0300-1234567" value="{{ $purposel->studentgroup->m3regno ? $purposel->studentgroup->studentsrecord2->pnumber : '' }}" pattern="[0-9]{4}-[0-9]{7}" required disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>   
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4 border rounded">
                  <div class="m-3">
                    <div class="d-flex align-items-center justify-content-center fs-5">
                      <span>(Provide 3 project ideas starting form first priority)</span>
                    </div>
                    <label class="form-label" for="form6Example4">First Prefrence:</label>
                    <input type="email" id="form6Example4" class="form-control" value="{{$purposel->projectname}}" disabled/>
                    {{-- <label class="form-label" for="form6Example5">Scond Prefrence:</label>
                    <input type="email" id="form6Example5" class="form-control" disabled/>
                    <label class="form-label" for="form6Example6">Third Prefrence:</label>
                    <input type="email" id="form6Example6" class="form-control" disabled/> --}}
                  </div>
                </div>
              
                <!-- Number input -->
                <div class="form-outline mb-4 border rounded">
                  <div class="m-3">
                    <div class="d-flex align-items-center justify-content-center fs-5">
                      <span>(Mention here elective courses taken in degree)</span>
                    </div>
                    <label class="form-label" for="exampleFormControlTextarea02">Write Here:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea02" rows="3" disabled>{{$purposel->electivecourses}}</textarea>
                  </div>
                </div>
              
                <!-- Message input -->
                <div class="form-outline mb-4 border rounded">
                  <div class="m-3">
                    <div class="d-flex align-items-center justify-content-center fs-5">
                      <span>(Mention your programming languages,tools you are skilled in)</span>
                    </div>
                    <label class="form-label" for="exampleFormControlTextarea01">Write Here:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea01" rows="3" disabled>{{$purposel->programminglanguagetools}}</textarea>
                  </div>
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4 border rounded">
                  <div class="m-3">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Resaon for reject/which idea is accepted</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center gap-5"> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="approved" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Approved
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="reject" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Reject
                    </label>
                  </div>
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-end mb-4">
                  <button type="submit" class="btn btn-primary me-3">Submit</button>
                    {{-- <button type="submit" class="btn btn-labeled btn-danger"> --}}
                      {{-- <span class="btn-label me-3"><i class="fa fa-remove"></i></span>Reject</button> --}}
                    <!-- <button type="submit" class="btn btn-danger btn-lg m-1 ms-3">Reject</button>
                    <button type="submit" class="btn btn-success btn-lg m-1 ms-3">Accept</button> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection