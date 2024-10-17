@extends('Layouts.index')

@section('content')
  <div id="layoutSidenav_content">
    <main>
              <section class="section mt-3">
                <div class="container d-flex justify-content-center">
                  <div class="row  w-75">
                    <h2 class="d-flex justify-content-center mb-5">Student login</h2>
                    <div class="col-lg-12">
                      <form>
                         <div class="mb-4 border rounded">
                            <div class="m-3">
                              <!-- 2 column grid layout with text inputs for the first and last names -->
                              <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example1">Login GroupID</label>
                                    <input type="text" id="form6Example1" class="form-control" placeholder="BSCSFall202012" required/>
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
                                    <input type="text" id="form6Example2" class="form-control" placeholder="ex# ********" required/>
                                  </div>
                                </div>
                              </div>
                              <!-- Text input -->
                              <div class="form-outline mb-4">
                                    <label class="form-label" for="form6Example3email">Student Recovery Email</label>
                                    <input type="email" id="form6Example3email" class="form-control" placeholder="ex# zunu@gmail.com" required />
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