@extends('Layouts.index')

@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-12">
                            <form id="excelUploadForm" method="post" enctype="multipart/form-data">
                                <h5>Add Only Excel File</h5>
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
                                    <input type="file" class="form-control" id="file" name="file" accept=".xlsx">
                                </div>
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
@endsection
    {{-- <script>
         $(document).ready(function() {

            $('#excelUploadForm').submit(function(e) {
                e.preventDefault();
                let fileInput = $('#file')[0];

                if (fileInput.files.length === 0) {
                    alert("Please select a file.");
                    return;
                }

                let fileName = fileInput.files[0].name;
                let fileExtension = fileName.split('.').pop().toLowerCase();

                if (fileExtension !== 'xlsx') {
                    alert("Please select a valid Excel file with .xlsx extension.");
                    return;
                }
            });

        }); 
     
         </script> --}}
</body>
</html>