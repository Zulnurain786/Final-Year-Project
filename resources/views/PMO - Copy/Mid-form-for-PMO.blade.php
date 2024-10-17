@extends('Layouts.index')

@section('content')
        <div id="layoutSidenav_content">
            <main>
              <section class="section mt-3">
                <div class="container d-flex justify-content-center">
                  <div class="row  w-75">
                    <h2 class="d-flex justify-content-center mb-5">Mid Evaluator Form</h2>
                    <div class="col-lg-12">
                      <form>
                        <div class="mb-4 border rounded">
                          <div class="m-3">
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                <span class="d-flex justify-content-center mb-4 fs-5">Mid Evaluation Form</span>
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span> -->
                                <div class="row ">
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked0" >
                                        <label class="form-check-label" for="flexCheckChecked0">
                                          BSCS
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked01" >
                                        <label class="form-check-label" for="flexCheckChecked01">
                                          BSIT
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked02" >
                                        <label class="form-check-label" for="flexCheckChecked02">
                                          MCS
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>   
                        </div>
                         <div class="mb-4 border rounded">
                            <div class="m-3">
                              <!-- 2 column grid layout with text inputs for the first and last names -->
                              <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example01">ProjectID</label>
                                    <input type="text" id="form6Example01" class="form-control" placeholder="BSCSFAll2020"/>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example02">Date</label>
                                    <!-- <select name="select" id="select" class="form-control" onchange="selectedValue(this.value)">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select> -->
                                    <input type="text" id="form6Example02" class="form-control" pattern="\d{1,2}/\d{1,2}/\d{4}" required/>
                                  </div>
                                </div>
                              </div>
                              <!-- Text input -->
                              <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example03">Time</label>
                                    <input type="text" id="form6Example03" class="form-control" placeholder=""/>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example04">Venue</label>
                                    <input type="text" id="form6Example04" class="form-control" pattern="" required/>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="mb-4 border rounded">
                          <div class="m-3">
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span> -->
                                <div class="row mb-4 mt-2">
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example10">Project Title</label>
                                      <input type="text" id="form6Example10" class="form-control" placeholder="PMS" pattern="" required/>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example20">Superviser Name</label>
                                      <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>   
                        </div>
                        <div class="mb-4 border rounded">
                          <div class="m-3">
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span> -->
                                <div class="row mb-4 mt-2">
                                  <div class="col">
                                   <h3>Instructions</h3>
                                   <p>
                                    -Please give minimum 20 minutes to each group.
                                    <br>
                                    -Evaluate each student individually. 
                                    <br>
                                    -Use back sheet if need to write more comments
                                   </p>
                                  </div>
                                  <div class="col">
                                   <h3>Things to evaluate</h3>
                                   <p>
                                    -UML as per accepted proposal ,Project diagrams, Presentation
                                    <br>
                                    Chapter 1 (Introduction) 
                                    <br>
                                    Chapter 2 (Req. & Analysis)
                                    <br>
                                    Chapter 3 (Design), Viva, , Documentation formatting
                                   </p>
                                  </div>
                                </div>
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
                                  <div class="row mb-4 mt-3">
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.1 <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.2 <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.3 <br> 16 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Front End <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Total <br> 40 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-outline mb-4">
                                <span class="d-flex justify-content-center mb-4 fs-5">Second Member Detail</span>
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
                                  <div class="row mb-4 mt-3">
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.1 <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.2 <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.3 <br> 16 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Front End <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Total <br> 40 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-outline mb-4">
                                <span class="d-flex justify-content-center mb-4 fs-5">Third Member Detail</span>
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
                                  <div class="row mb-4 mt-3">
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.1 <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.2 <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Ch.3 <br> 16 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Front End <br> 8 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-outline">
                                          <label class="form-label" for="form6Example30">Total <br> 40 Marks</label>
                                          <input type="email" id="form6Example30" class="form-control" placeholder=""/>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>   
                        </div>

                        <!-- Email input -->
                        <div class="mb-4 border rounded">
                          <div class="m-3">
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span> -->
                                <div class="mb-4 mt-2">
                                  <span class="d-flex justify-content-center mb-2 fs-5">First Evaluator</span>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example10">Evaluator Name</label>
                                      <input type="text" id="form6Example10" class="form-control" placeholder="" pattern="" required/>
                                    </div>
                                  </div>
                                  <div class="mt-3">
                                    <div class="form-outline">
                                      <label class="form-label" for="exampleFormControlTextarea130">Comments</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea130" rows="3" required></textarea>
                                    </div>
                                  </div>
                                  <div class="w-25 mt-3">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example43">Signature</label>
                                    <span><hr></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-outline mb-4">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span> -->
                                <div class="mb-4 mt-2">
                                  <span class="d-flex justify-content-center mb-2 fs-5">Second Evaluator</span>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example10">Evaluator Name</label>
                                      <input type="text" id="form6Example10" class="form-control" placeholder="" pattern="" required/>
                                    </div>
                                  </div>
                                  <div class="mt-3">
                                    <div class="form-outline">
                                      <label class="form-label" for="exampleFormControlTextarea130">Comments</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea130" rows="3" required></textarea>
                                    </div>
                                  </div>
                                  <div class="w-25 mt-3">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example43">Signature</label>
                                    <span><hr></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-outline mb-4">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">First Member Detail</span> -->
                                <div class="mb-4 mt-2">
                                  <span class="d-flex justify-content-center mb-2 fs-5">Third Evaluator</span>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example10">Evaluator Name</label>
                                      <input type="text" id="form6Example10" class="form-control" placeholder="" pattern="" required/>
                                    </div>
                                  </div>
                                  <div class="mt-3">
                                    <div class="form-outline">
                                      <label class="form-label" for="exampleFormControlTextarea130">Comments</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea130" rows="3" required></textarea>
                                    </div>
                                  </div>
                                  <div class="w-25 mt-3">
                                    <div class="form-outline">
                                      <label class="form-label" for="form6Example43">Signature</label>
                                    <span><hr></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
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
        </div>
@endsection