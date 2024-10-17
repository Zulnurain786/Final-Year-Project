<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
              <section class="section mt-3">
                <div class="container d-flex justify-content-center">
                  <div class="row  w-75">
                    <h2 class="d-flex justify-content-center mb-5">FYP Proposal Evaluation</h2>
                    <div class="col-lg-12">
                      <form>
                        <div class="mb-4 border rounded">
                          <div class="m-2">
                              <!-- Text input -->
                              <div class="form-outline">
                                <span class="d-flex justify-content-center mb-4 fs-5">FYP Proposal Evaluation</span>
                                <div class="row d-flex justify-content-center align-items-center">
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
                                        <label class="form-label" for="form6Example010">Session</label>
                                        <input type="text" id="form6Example010" class="form-control" placeholder="Fall 2020"/>
                                      <!-- <select name="select" id="select0" class="form-control">
                                        <option value="1">Fall 2019</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select> -->
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
                                </div>
                              </div>
                              <div class="form-outline mb-4" id="second-member">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">Second Member Detail</span> -->
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
                                </div>
                              </div>
                              <div class="form-outline mb-4 thired-member" id="thired-member">
                                <!-- <span class="d-flex justify-content-center mb-4 fs-5">Third Member Detail</span> -->
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
                                    -Please give minimum 51 minutes to each group.
                                    <br>
                                    -Use extra sheet if needed to write more comments. 
                                   </p>
                                  </div>
                                  <div class="col">
                                   <h3>Things to evaluate</h3>
                                   <p>
                                    -Project Idea,Scope
                                    <br>
                                    -Feasibility,Objectives,Proposal Doc                                    <br>
                                   </p>
                                  </div>
                                </div>
                              </div>
                          </div>   
                        </div>
                        <div class="form-outline border rounded">
                          <div class="m-3">
                            <div class="row ms-5 ps-5 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <h6>Evaluation</h6>
                              </div>
                              <div class="col">
                                <h6>Grade/Comment</h6>
                              </div>
                            </div>      
                            <hr>                     
                            <div class="row mb-2 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example20">Problem Identification and Understanding</label>
                                  <!-- <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/> -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <!-- <label class="form-label" for="form6Example20">Superviser Name</label> -->
                                  <input type="text" id="form6Example20" class="form-control" placeholder=""/>
                                </div>
                              </div>
                            </div>                           
                            <div class="row mb-2 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example20">Scope</label>
                                  <!-- <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/> -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <!-- <label class="form-label" for="form6Example20">Superviser Name</label> -->
                                  <input type="text" id="form6Example20" class="form-control" placeholder=""/>
                                </div>
                              </div>
                            </div>                           
                            <div class="row mb-2 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example20">Feasibility Study</label>
                                  <!-- <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/> -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <!-- <label class="form-label" for="form6Example20">Superviser Name</label> -->
                                  <input type="text" id="form6Example20" class="form-control" placeholder=""/>
                                </div>
                              </div>
                            </div>                           
                            <div class="row mb-2 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example20">Objectives</label>
                                  <!-- <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/> -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <!-- <label class="form-label" for="form6Example20">Superviser Name</label> -->
                                  <input type="text" id="form6Example20" class="form-control" placeholder=""/>
                                </div>
                              </div>
                            </div>                           
                            <div class="row mb-2 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example20">Documentation</label>
                                  <!-- <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/> -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <!-- <label class="form-label" for="form6Example20">Superviser Name</label> -->
                                  <input type="text" id="form6Example20" class="form-control" placeholder=""/>
                                </div>
                              </div>
                            </div>                           
                            <div class="row mb-2 d-flex justify-content-center align-items-center">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example20">Commitee's Q/A Defense</label>
                                  <!-- <input type="text" id="form6Example20" class="form-control" placeholder="Bilal"/> -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <!-- <label class="form-label" for="form6Example20">Superviser Name</label> -->
                                  <input type="text" id="form6Example20" class="form-control" placeholder=""/>
                                </div>
                              </div>
                            </div>                                                    
                          </div>
                        </div>
                        <!-- Number input -->
                        <div class="form-outline border rounded">
                          <div class="m-3">
                            <div class="d-flex align-items-center justify-content-center fs-5 mb-3">
                              <span>Approval Decision</span>
                            </div>
                            <div class="">
                              <input class="form-check-input ms-2" type="checkbox" value="" id="form6Example8" />
                              <label class="form-check-label" for="form6Example8"> Approved </label>
                              <input class="form-check-input ms-5" type="checkbox" value="" id="form6Example8" />
                              <label class="form-check-label" for="form6Example8"> Conditionally Approved* </label>
                              <input class="form-check-input  ms-5" type="checkbox" value="" id="form6Example8" />
                              <label class="form-check-label" for="form6Example8"> Defferred**</label>
                              <input class="form-check-input  ms-4" type="checkbox" value="" id="form6Example8" />
                              <label class="form-check-label" for="form6Example8"> Not Approved***</label>
                            </div>
                          </div>
                        </div>
                        <!-- Message input -->
                        <div class="form-outline mb-4 border rounded">
                          <div class="m-3">
                            <p>*Minor changes in the proposal mentioned in the comment section are communicated to the supervisor.Supervisor is responsible for accommodating these changes.
                              once again before the panel.</p>
                            <p>**If major changes are required in the proposal, proposal is deferred and students have to present formally.</p>
                            <p>* students have to present formally once again before the panel with a new proposal idea.</p>
                          </div>
                        </div>
                        <!-- Checkbox -->
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
                        <div class="form-check d-flex justify-content-end mb-4">
                          <div class="w-25 mt-3">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example43">PMO CS&IT-GIMS</label>
                            <span><hr></span>
                            </div>
                          </div>
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
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(document).ready(function() {
         $('.js-example-basic-multiple').select2();
        });
    
      function selectedValue(value) {
                var secondMember = document.getElementById("second-member");
                var thirdMember = document.getElementById("thired-member");
                if (value == 2) {
                  secondMember.style.display = "block";
                  thirdMember.style.display = "none"; // Hide third member if shown
                } else if (value == 3) {
                  thirdMember.style.display = "block";
                  secondMember.style.display = "block";
                } else {
                  secondMember.style.display = "none";
                  thirdMember.style.display = "none";
                }
              }
    </script>
</body>
</html>