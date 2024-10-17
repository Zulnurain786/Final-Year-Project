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
            <h2 class="d-flex justify-content-center mb-5" style="color: #4040a2;">WORK DONE</h2>
            <div class="col-lg-12">
                 <div class="mb-4 border rounded">
                  <div class="m-3">
                    <form action="{{route('Superviser.saveassignvalues')}}" method="POST">
                      @csrf
                      <input name="id" type="hidden" class="form-control" value="{{ $id }}"  />
                      <div class="form-outline mb-4">
                        <span class="d-flex justify-content-center mb-4 fs-5">Add Values</span>
                        <div class="row mb-4 mt-2">
                          <div class="col-md-12">
                            <div class="form-outline">
                              <div class="" id="dynamicinput-first">
                                @if(@isset($data))
                                  @foreach ($data as $key => $value)
                                  @php $randomNumber = rand(100, 999); @endphp
                                  <div class="mt-3">
                                      {{-- <label for="change-password-form-3" id="{{$randomNumber}}" class="form-label"> {!! str_replace('_', ' ', $key) !!}</label> --}}
                                      {{-- <input id="{{$randomNumber}}" name="{{$key}}" type="text" class="form-control" value="{{$value}}"  />
                                      <a href="javascript:void(0);" id="{{$randomNumber}}" onclick="deleteElement('{{ $randomNumber }}')" class="btn btn-danger btn-sm mt-4 mb-4 inputclass">delete</a> --}}
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="form6Example2">{!! str_replace('_', ' ', $key) !!}</label>
                                    <select name="{{$key}}" id="value" class="form-control" required>
                                      <option value="0">Select percentage</option>
                                      <option value="10" {{ $value == 10 ? 'selected' : '' }}>10%</option>
                                      <option value="20" {{ $value == 20 ? 'selected' : '' }}>20%</option>
                                      <option value="30" {{ $value == 30 ? 'selected' : '' }}>30%</option>
                                      <option value="40" {{ $value == 40 ? 'selected' : '' }}>40%</option>
                                      <option value="50" {{ $value == 50 ? 'selected' : '' }}>50%</option>
                                      <option value="60" {{ $value == 60 ? 'selected' : '' }}>60%</option>
                                      <option value="70" {{ $value == 70 ? 'selected' : '' }}>70%</option>
                                      <option value="80" {{ $value == 80 ? 'selected' : '' }}>80%</option>
                                      <option value="90" {{ $value == 90 ? 'selected' : '' }}>90%</option>
                                      <option value="100" {{ $value == 100 ? 'selected' : '' }}>100%</option>
                                    </select>
                                    <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                                  </div>
                                  @endforeach
                                  @endif
                              </div>
                              <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                            </div>
                            {{-- <div class="form-outline">
                              <label class="form-label" for="form6Example10">Reg.No</label>
                              <input type="text" id="form6Example10" class="form-control" placeholder="ex# 20-Arid-4567" name="regno" pattern="[0-9]{2}-[a-rA-R]{4}-[0-9]{4}" required/>
                            </div> --}}
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline">
                              <div class="" id="dynamicinput-second">

                              </div>
                              <!-- <input type="text" id="form6Example2" class="form-control" placeholder="ex# Fall-2020" required/> -->
                            </div>
                            {{-- <div class="form-outline">
                              <label class="form-label" for="form6Example20">Phone Number</label>
                              <input type="tel" id="form6Example20" class="form-control" placeholder="ex# 03001234567" name="pnumber" pattern="[0-9]{4}[0-9]{7}" required/>
                            </div> --}}
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
<script>
  let count=0,display_div=0;
  function deleteElement(id)
  {
    document.getElementById(id).remove(); // Remove label element
        document.getElementById(id).remove(); // Remove input element
        document.getElementById(id).remove(); 
  }
  function addInput() {
    
    var labelofinput=document.getElementById("addinput").value;
    var value=document.getElementById("value").value;
    var inputContainer1 = document.getElementById("dynamicinput-first");
    var inputContainer2 = document.getElementById("dynamicinput-second");

    if(labelofinput!="" && labelofinput!="id" && labelofinput!="name" && value!="0"){
          var modifylable = labelofinput.replace(/ /g, "_");
          
          count++;
          var lable = document.createElement("lable");
          lable.id = "input" + count;
          lable.className = "form-lable";
          lable.textContent = labelofinput;

          var inputElement = document.createElement("input");
          inputElement.id = "input" + count;
          // inputElement.type = "number";
          // // inputElement.min = "10";
          // // inputElement.max = "100";
          // // inputElement.step = "0.01"; // Optionally add step attribute for decimal values
          inputElement.className = "form-control mt-2";
          // inputElement.required = true;
          inputElement.name = modifylable;
          inputElement.value = value;

          var a = document.createElement("a");
          a.id = "input" + count;
          a.className = "btn btn-danger btn-sm mt-4 mb-4 inputclass";
          a.textContent = "delete";
          a.addEventListener("click", function() {
              var id = this.id;
              $("#" + id).remove();
              $("#" + id).remove();
              $("#" + id).remove();
          });
          var br = document.createElement("br");
          // Append the input element to a container (in this case, a div)
          if(display_div==0){

              inputContainer1.appendChild(lable);
              inputContainer1.appendChild(inputElement);
              inputContainer1.appendChild(a);
              inputContainer1.appendChild(br);
              display_div=1;
              document.getElementById("addinput").value = "";
          }
          else{
              inputContainer2.appendChild(lable);
              inputContainer2.appendChild(inputElement);
              inputContainer2.appendChild(a);
              inputContainer2.appendChild(br);
              display_div=0;
              document.getElementById("addinput").value = "";
          }
       }
  }

</script>