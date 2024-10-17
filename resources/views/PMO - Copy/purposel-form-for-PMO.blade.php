@extends('Layouts.index')

@section('content')
        <div id="layoutSidenav_content">
            <main>
              <section class="section mt-3">
                <div class="container d-flex justify-content-center">
                  <div class="row  w-75">
                    <h2 class="d-flex justify-content-center mb-5">Preliminary Proposal Form</h2>
                    <div class="col-lg-12">
                      <form>
                         <div class="mb-4 border rounded">
                            <div class="m-3">
                              <!-- 2 column grid layout with text inputs for the first and last names -->
                              <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example1">Porgrammer Semester</label>
                                    <input type="text" id="form6Example1" class="form-control" placeholder="7th" disabled />
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example2">No.Of Members</label>
                                    <select name="select" id="select" class="form-control" onchange="selectedValue(this.value)">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="No.Of Members" pattern="[1-3]{1}" required/> -->
                                  </div>
                                </div>
                              </div>
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                    <label class="form-label" for="form6Example3">Supervisor Name</label>
                                    <input type="text" id="form6Example3" class="form-control" placeholder="ex# sir Bilal" required />
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
                                      <input type="text" id="form6Example10" class="form-control" placeholder="ex# 20-Arid-4567" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required/>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example20">Name</label>
                                      <input type="text" id="form6Example20" class="form-control" placeholder="Name"/>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example30">Email</label>
                                      <input type="email" id="form6Example30" class="form-control" placeholder="Email"/>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example40">Phone Number</label>
                                      <input type="tel" id="form6Example40" class="form-control" placeholder="ex# 0300-1234567" pattern="[0-9]{4}-[0-9]{7}" required/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-outline mb-4" style="display: none;" id="second-member">
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
                              </div>
                          </div>   
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5">
                              <span>(Provide project idea)</span>
                            </div>
                            <label class="form-label" for="form6Example56">First Prefrence:</label>
                            <input type="email" id="form6Example56" class="form-control"/>
                            <!-- <label class="form-label" for="form6Example57">Scond Prefrence:</label>
                            <input type="email" id="form6Example57" class="form-control"/>
                            <label class="form-label" for="form6Example58">Third Prefrence:</label>
                            <input type="email" id="form6Example58" class="form-control"/> -->
                          </div>
                        </div>
                      
                        <!-- Number input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5">
                              <span>(Mention here elective courses taken in degree)</span>
                            </div>
                            <label class="form-label" for="exampleFormControlTextarea12">Write Here:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea12" rows="3" required></textarea>
                          </div>
                        </div>
                      
                        <!-- Message input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5">
                              <span>(Mention your programming languages,tools you are skilled in)</span>
                            </div>
                            <label class="form-label" for="exampleFormControlTextarea13">Write Here:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea13" rows="3" required></textarea>
                          </div>
                        </div>
                      
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" />
                          <label class="form-check-label" for="form6Example8"> Group leader? </label>
                        </div>
                      
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </section>
            </main>
        </div>
@endsection
