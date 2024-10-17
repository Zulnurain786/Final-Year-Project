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

<body >
  <section>
    <table style="width:100%;">
       <tr>
         <td style="margin-left:33px"><img style="width: 70px;height:70px" src="Images/images.png" alt="company logo"></td>
         <td class="pname" style="text-align:center;margin-right:20px"><h3>Pir Mehr Ali Shah </h3><<h2>Arid Agriculture University Rawalpindi</h2> <h3>University Institute of Information Technology </h3></td>
         <td style="margin-left:33px"><img style="width: 70px;height:70px" src="Images/images.png" alt="company logo"></td>
       </tr>
      </table>
 </section>
<br>

<br>
<form>
  <table  style=" width:100% ">
    <tr>  
       <th>  <label for="">Project Title: </label><input style="width:86%; text-align:center ; border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->PreliminaryProposal->projectname}}"></th>
    </tr>
       </table> <br>
     <table style="width:100%">
       <tr>
          <th>  <label for="">Supervisor: </label><input style="width:70% ; text-align:center ; height:20px; border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->PreliminaryProposal->supervisor->name}}"></th>
          <th style="margin-left: 17px">  <label for="">Project no.: </label><input style="width:67% ; text-align:center ;  border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->allgrouplogin->projectid}}"></th>
    
       </tr>

     </table>
     <br>
     <p><b>Project Evaluation:</b></p>
     
<table style="width:100%">
  <tr>
    <th rowspan="2" style="border:1px solid #808080; width:25%; text-align:center ;height:30px">Arid Number</th>
    <th rowspan="2" style="border:1px solid #808080; width:33%; text-align:center; height:30px">Student Name</th>
    <th colspan="4" style="border:1px solid #808080;   text-align:center;  height:30px">Marks</th>
  </tr>
  <tr>
    <td style="border:1px solid #808080;  height:30px; text-align:center">Evaluator 1 <br> (6)</td>
    <td style="border:1px solid #808080;  height:30px; text-align:center">Evaluator 2 <br> (6)</td>
    <td style="border:1px solid #808080;  height:30px; text-align:center">Supervisor <br> (8)</td>
    <td style="border:1px solid #808080;  height:30px; text-align:center">Total <br> (20)</td>
  </tr>
  <tr> 
    <td style="border:1px solid #808080;  height:30px">{{$grouprecord->studentsrecords ? $grouprecord->studentsrecords->regno : ''}}</td>
    <td style="border:1px solid #808080;  height:30px">{{$grouprecord->studentsrecords ? $grouprecord->studentsrecords->name : ''}}</td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td></tr>
  <tr> <td style="border:1px solid #808080;  height:30px">{{$grouprecord->studentsrecord1 ? $grouprecord->studentsrecord1->regno : ''}}</td>
    <td style="border:1px solid #808080;  height:30px">{{$grouprecord->studentsrecord1 ? $grouprecord->studentsrecord1->name : ''}}</td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td></tr>
  <tr>  <td style="border:1px solid #808080;  height:30px">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : ''}}</td>
    <td style="border:1px solid #808080;  height:30px">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : '' }}</td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td>
    <td style="border:1px solid #808080;  height:30px"></td></tr>
</table>
<br> 
     <p><b>Note: </b><br>
      i.	Code: 40% of the project should be developed. The code should be in working state. <br>
      <p style="color: red">ii.	 Report: First 3 chapters of the report should be written which include Introduction, Literature Review and SRS.</p> 
      </p>
  <br>
  <b>Remarks:____________________________________________________________________________</b>
  <b>____________________________________________________________________________________</b>
  <b>____________________________________________________________________________________</b>
  <b>____________________________________________________________________________________</b>
  <b>____________________________________________________________________________________</b>
<br> <br>

  <table style="width:100%" >
    <tr >
      <td >__________________<br>Name of Examiner </td>       {{-- <td><div><b>{{$grouprecord->PreliminaryProposal->supervisor->name}}</b></div>__________________<br>Name of Supervisor </td> --}}
       <td >__________________<br>Date </td>
       <td >__________________<br>Signature </td>
    </tr>
    </table>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>