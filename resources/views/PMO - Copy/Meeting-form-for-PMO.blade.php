@extends('Layouts.index')

@section('content')
        <div id="layoutSidenav_content">
            <main>
              <section class="section mt-3">
                <div class="container d-flex justify-content-center">
                  <div class="row  w-75">
                    <h2 class="d-flex justify-content-center mb-5">SUPERVISOR MEETING FORM </h2>
                    <div class="col-lg-12">
                      <form>
                         <div class="mb-4 border rounded">
                            <div class="m-3">
                              <!-- 2 column grid layout with text inputs for the first and last names -->
                              <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example1">Project ID:</label>
                                    <!-- <input type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" name="date" value="" /> -->
                                    <input type="text" id="form6Example1" class="form-control"  placeholder="FAll202015" />
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example91">Date:</label>
                                    <!-- <input type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" name="date" value="" /> -->
                                    <input type="text" id="form6Example91" class="form-control" pattern="\d{1,2}/\d{1,2}/\d{4}" required/>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example2">Meeting No:</label>
                                    <input type="text" id="form6Example2" class="form-control" pattern="" placeholder="" required/>
                                    <!-- <select name="select" id="select" class="form-control" onchange="selectedValue(this.value)">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select> -->
                                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="No.Of Members" pattern="[1-3]{1}" required/> -->
                                  </div>
                                </div>
                              </div>
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                    <label class="form-label" for="form6Example3">Project Title</label>
                                    <input type="text" id="form6Example3" class="form-control" placeholder="PMS" required />
                              </div>
                              <div class="form-outline mb-4">
                                    <label class="form-label" for="form6Example0">Superviser Name</label>
                                    <input type="text" id="form6Example0" class="form-control" placeholder="Sir Bilal" required />
                              </div>
                          </div>
                          </div>
                        <div class="mb-4 border rounded">
                          <div class="m-3">
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                <span class="d-flex justify-content-center mb-4 fs-5">Current Phase</span>
                                <div class="row mb-4 mt-2">
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Requirement Engineering</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Designing</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                        <label class="form-check-label" for="exampleCheck3">Coding</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                        <label class="form-check-label" for="exampleCheck4">Testing</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                        <label class="form-check-label" for="exampleCheck5">Deployment</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                        <label class="form-check-label" for="exampleCheck6">Other</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>   
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="form-outline mb-4" id="second-member">
                              <span class="d-flex justify-content-center mb-4 fs-5">ATTENDEES</span>
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
                                    <label class="form-label" for="form6Example43">Signatures</label>
                                    <span><hr></span>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-4 mt-2">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example444">Reg.No</label>
                                    <input type="text" id="form6Example444" class="form-control" placeholder="ex# 20-Arid-4567" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required/>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example424">Name</label>
                                    <input type="text" id="form6Example424" class="form-control" placeholder="Name"/>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example434"> Signatures</label>
                                    <span><hr></span>
                                  </div>
                                </div>
                              </div>
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
                                    <label class="form-label" for="form6Example43">Signatures</label>
                                    <span><hr></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <!-- Number input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5">
                              <span>(TOPICS DISCLOSED)</span>
                            </div>
                            <label class="form-label" for="exampleFormControlTextarea120">Write Here:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea120" rows="3" required></textarea>
                          </div>
                        </div>
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5">
                              <span>(ISSUES FROM LAST MEETING)</span>
                            </div>
                            <label class="form-label" for="exampleFormControlTextarea122">Write Here:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea122" rows="3" required></textarea>
                          </div>
                        </div>
                      
                        <!-- Message input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5">
                              <span>(ANY FEEDBACK FROM SUPERVISOR)</span>
                            </div>
                            <label class="form-label" for="exampleFormControlTextarea13">Write Here:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea13" rows="3" required></textarea>
                          </div>
                        </div>
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <div class="form-outline mb-4" id="second-member">
                              <span class="d-flex justify-content-center mb-4 fs-5">Next Meeting</span>
                              <div class="row mb-4 mt-2">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example41">Date</label>
                                    <input type="text" id="form6Example91" class="form-control" pattern="\d{1,2}/\d{1,2}/\d{4}" required/>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example43">Superviser Signatures</label>
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