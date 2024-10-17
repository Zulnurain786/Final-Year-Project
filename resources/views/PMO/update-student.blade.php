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
            <h2 class="d-flex justify-content-center mb-5" style="color: #4040a2;">Update Student</h2>
            <div class="col-lg-12">
              <form action="{{route('PMO.saveupdatestudentrecord')}}" method="POST">
                @csrf
                 <div class="mb-4 border rounded">
                    <div class="m-3">
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example3">Student Name</label>
                            <input type="hidden" id="form6Example3" class="form-control" value="{{$studentrecord->id}}" name="id" required />
                            <input type="text" id="form6Example3" class="form-control" value="{{$studentrecord->name}}" name="name" required />
                           </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example30">Email</label>
                            <input type="email" id="form6Example30" class="form-control" value="{{$studentrecord->email}}" name="email" required/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example2">Departemnt</label>
                            <select name="department" id="form6Example2" class="form-control"  required>
                              <option value="{{$studentrecord->department}}" >{{$studentrecord->department}} </option>
                              <option value="CS">CS</option>
                              <option value="IT">IT</option>
                            </select>
                            <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form6Example2">Session</label>
                            <select name="session" id="form6Example2" class="form-control" required>
                              <option value="{{$studentrecord->session}}" >{{$studentrecord->session}}</option>
                              @foreach($session as $item)
                              <option value="{{$item->Year}}">{{$item->Year}}</option>
                              @endforeach
                            </select>
                            <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                          </div>
                        </div>
                      </div>
                  </div>
                 </div>
                 <div class="mb-4 border rounded">
                  <div class="m-3">
                      <div class="form-outline mb-4">
                        <span class="d-flex justify-content-center mb-4 fs-5">Detail</span>
                        <div class="row mb-4 mt-2">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example10">Reg.No</label>
                              <input type="text" id="form6Example10" class="form-control" placeholder="ex# 20-Arid-4567" value="{{$studentrecord->regno}}" name="regno" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example20">Phone Number</label>
                              <input type="tel" id="form6Example20" class="form-control" placeholder="ex# 03001234567" value="{{$studentrecord->pnumber}}" name="pnumber" pattern="[0-9]{4}[0-9]{7}" required/>
                            </div>
                          </div>
                          <!-- <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example30">Email</label>
                              <input type="email" id="form6Example30" class="form-control" placeholder="Email"/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example40">Password</label>
                              <input type="password" id="form6Example40" class="form-control" placeholder="********" pattern="" required/>
                            </div>
                          </div> -->
                        </div>
                      </div>
                      <!-- <div class="form-outline mb-4" style="display: none;" id="second-member">
                        <span class="d-flex justify-content-center mb-4 fs-5">Second Member Detail</span>
                        <div class="row mb-4 mt-2">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example41">Reg.No</label>
                              <input type="text" id="form6Example41" class="form-control" placeholder="ex# 20-Arid-4567" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example42">Name</label>
                              <input type="text" id="form6Example42" class="form-control" placeholder="Name"/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example43">Email</label>
                              <input type="email" id="form6Example43" class="form-control" placeholder="Email"/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example44">Phone Number</label>
                              <input type="tel" id="form6Example44" class="form-control" placeholder="ex# 0300-1234567" pattern="[0-9]{4}-[0-9]{7}" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4 thired-member" style="display: none;" id="thired-member">
                        <span class="d-flex justify-content-center mb-4 fs-5">Third Member Detail</span>
                        <div class="row mb-4 mt-2">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example80">Reg.No</label>
                              <input type="text" id="form6Example80" class="form-control" placeholder="ex# 20-Arid-4567" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example81">Name</label>
                              <input type="text" id="form6Example81" class="form-control" placeholder="Name"/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example82">Email</label>
                              <input type="email" id="form6Example82" class="form-control" placeholder="Email"/>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example83">Phone Number</label>
                              <input type="tel" id="form6Example83" class="form-control" placeholder="ex# 0300-1234567" pattern="[0-9]{4}-[0-9]{7}" required/>
                            </div>
                          </div>
                        </div>
                      </div> -->
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