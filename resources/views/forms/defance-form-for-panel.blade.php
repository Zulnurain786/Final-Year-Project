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
<style>

</style>
<body style="width: 100%">
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
<div>
   <table  style=" width:100% ">
<tr>  
   <th>  <label for="">Project Title: </label><input style="width:83%; text-align:center ; border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->PreliminaryProposal->projectname}}"></th>
</tr>
   </table> <br>
 <table style="width:100%">
   <tr>
      <th>  <label for="">Supervisor: </label><input style="width:70% ; text-align:center ; height:20px; border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->PreliminaryProposal->supervisor->name}}"></th>
      <th>  <label for="">Project No: </label><input style="width:63% ; text-align:center ;  border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->allgrouplogin->projectid}}"></th>

   </tr>
 </table>
 <br>
 <table style=" text-align:center; width: 100%" border="1">
   <tr>
      <th style="border:1px solid #808080; text-align:center; height:25px">Sr. no.</th>
      <th style="border:1px solid #808080; text-align:center; height:25px">Registration no.</th>
      <th style="border:1px solid #808080; text-align:center;  height:25px">Student Name</th>
   </tr>
   <tr>
      <td style="border:1px solid #808080;  height:25px">1</td>
      <td style="border:1px solid #808080;  height:25px">{{$grouprecord->studentsrecords ? $grouprecord->studentsrecords->regno : ''}}</td>
      <td style="border:1px solid #808080;  height:25px">{{$grouprecord->studentsrecords ? $grouprecord->studentsrecords->name : ''}}</td>
   </tr>
   <tr>
      <td style="border:1px solid #808080;  height:25px">2</td>
      <td style="border:1px solid #808080;  height:25px">{{$grouprecord->studentsrecord1 ? $grouprecord->studentsrecord1->regno : ''}}</td>
      <td style="border:1px solid #808080;  height:25px">{{$grouprecord->studentsrecord1 ? $grouprecord->studentsrecord1->name : ''}}</td>
   </tr>
   <tr>
      <td style="border:1px solid #808080;  height:25px">3</td>
      <td style="border:1px solid #808080;  height:25px">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : ''}}</td>
      <td style="border:1px solid #808080;  height:25px">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : ''}}</td>
   </tr>
 </table>
 <br>
 <p><b>a. Project Features[Filled by the student] </b></p>
 <table style="width: 100%" border="1">
   <tr>
      <th colspan="2" style="border:1px solid #808080;text-align:center;   height:30px">Proposed Features</th>
      
   </tr>
   <tr>
    <th style="border:1px solid #808080; width:50%; height:30px">i.</th>
    <th style="border:1px solid #808080; width:50%;  height:30px">vi.</th>
 </tr>
 <tr>
    <th style="border:1px solid #808080;  height:30px">ii.</th>
    <th style="border:1px solid #808080;  height:30px">vii.</th>
 </tr>
 <tr>
    <th style="border:1px solid #808080;  height:30px">iii.</th>
    <th style="border:1px solid #808080;  height:30px">viii.</th>
 </tr>
 <tr>
    <th style="border:1px solid #808080;  height:30px">iv.</th>
    <th style="border:1px solid #808080;  height:30px">ix.</th>
 </tr>
 <tr>
    <th style="border:1px solid #808080;  height:30px">v.</th>
    <th style="border:1px solid #808080;  height:30px">x.</th>
   </tr>
 

 </table>
 <p><b>b.Project Evaluation [For evaluators only]:</b></p>
 <table style="width: 100%" border="1">

   <tr>
      <th style="border:1px solid #808080;  text-align:center ;height:30px">Criteria</th>
      <th style="border:1px solid #808080; width:130px; text-align:center; height:30px">Good</th>
      <th style="border:1px solid #808080; width:130px;  text-align:center;  height:30px">Normal</th>
      <th style="border:1px solid #808080; width:130px; text-align:center;  height:30px">Inferior</th>
   </tr>
   <tr>
      <td style="border:1px solid #808080; height:30px">Project Complexity </td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
   </tr>
   <tr>
      <td style="border:1px solid #808080;  height:30px">Technological Aspect</td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>   </tr>
   <tr>
      <td style="border:1px solid #808080;  height:30px">Potential Impact on Society</td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>   </tr>
   <tr>
      <td style="border:1px solid #808080;  height:30px">Benchmarking</td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>   </tr>
      <tr>
         <td style="border:1px solid #808080;  height:30px">Project Features</td>
         <td style="border:1px solid #808080;  height:30px"></td>
         <td style="border:1px solid #808080;  height:30px"></td>
         <td style="border:1px solid #808080;  height:30px"></td>   </tr>
 
 </table>
 <p><b>c. Add/Remove Features [For evaluators only]:</b></p>
 <table style="width: 100%" border="1">
   <tr>
      <th style="border:1px solid #808080; text-align:center; text-align:center; height:30px ; width:50%;">Add</th>
      <th style="border:1px solid #808080; text-align:center; text-align:center; height:30px ; width:50%;">Remove</th>
   </tr>
   <tr>
      <td  style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
   </tr>
     <tr>
      <td  style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
   </tr>
     <tr>
      <td  style="border:1px solid #808080;  height:30px"></td>
      <td style="border:1px solid #808080;  height:30px"></td>
   </tr>
 </table>
 <table style="width:85%">
   <tr>
      <th style=" width:23%">Examiner Decision:</th>
      <td style=" width:19%"><input  type="checkbox" name="" id=""><label for="">Approved</label></td>
      <td style=" width:19%"><input type="checkbox" name="" id=""><label for="">Approved  with changes </label></td>
   </tr>
 </table>
<br>
   <b>Remarks:____________________________________________________________________________</b>
   <b>____________________________________________________________________________________</b>
   <b>____________________________________________________________________________________</b>
   <b>____________________________________________________________________________________</b>
   <b>____________________________________________________________________________________</b>
<br> <br>
<table style="width:100%">
<tr>
   <td><div><b><input style="width:60%; text-align:center ; border-top: none; border-left: none; border-right: none;" type="text" value="{{$grouprecord->PreliminaryProposal->supervisor->name}}"></b><br>Name of Supervisor </td>
   {{-- <td><div><b>{{$grouprecord->PreliminaryProposal->supervisor->name}}</b></div>__________________<br>Name of Supervisor </td> --}}
   <td>__________________<br>Date </td>
   <td>__________________<br>Signature </td>
</tr>
</table>
<br><br>
<div style="width: 100%">
   <p style="text-align: justify;
   margin-left: auto;
   margin-right: auto;
   max-width: 86%;">
    <b>  Definition of Terms:</b><br> <br>
<b>i.Project Complexity:</b>  The project complexity is referred to as the degree of significant
contribution that a group of students will put in the design and development of project,
spanning over two academic semesters. Secondly, determine if the domain of the project
marks the standard of complexity required from a bachelor’s student degree, asthisproject
will determine the skills they learnt throughout the degree. <br><br>
<b>ii. Technological Aspects:</b> Technological aspects of the project means tools/technologies and
language(s) used to develop it <br> <br>
<b>iii. Potential Impact on Society:</b> Determine how much impact the product could have in its
stated strategy for a society or community/focused group. <br> <br>
<b>iv. Benchmarking:</b> The proposed project should be compared with existing similar type of
works. A comparison table is more helpful for comparative view, listing features of existing
works and proposed project. <br> <br>
<b>v.  Project Features:</b> Verify that the features mentioned are complete and significant enough
for an FYP project
   </p>
</div>
</div>


{{-- <table style="border:1px solid #808080; width:80% ">
        <tr>
         
        </tr>
        <tr>
           <td rowspan="2" style="width:80px; border:1px solid #808080; text-align:center;  height:20px"><b>Project Title:</b></td>
           <td colspan="5"  style=" border:1px solid #808080; text-align:center; height:20px">{{$grouprecord->PreliminaryProposal->projectname}} </td>
        </tr> 
        <tr>
         
        </tr>  
        <tr>
          
        </tr>  
        <tr>
           <td style="width:18px; border:1px solid #808080; text-align:center;  height:20px;"><b>Current Phase</b></td>
           <td colspan="5"style="  border:1px solid #808080; text-align:center; height:20px">
           <input type="checkbox"  style="font-size:13px;margin-right:5px;"><label style="font-size:15px;" for="">Requirnment Engineering</label>
           <input type="checkbox" style="left-margine:20px; font-size:13px;margin-right:5px;"><label style="font-size:15px" for="">Designing</label>
           <input type="checkbox" style="left-margine:20px; font-size:13px;margin-right:5px;"><label style="font-size:15px" for="">Coding</label>
           <input type="checkbox" style="left-margine:70px; font-size:13px;margin-right:5px;"><label style="font-size:15px" for="">Testing</label><br>
           <input type="checkbox" style="left-margine:70px; font-size:13px;margin-right:5px;"><label style="font-size:15px" for="">Deployment</label>
           <input type="checkbox" style="left-margine:70px;font-size:13px;margin-right:5px;"><label style="font-size:15px" for="">Others</label>
         </td>
       </tr>
       <tr style="height:20px;">
           <td rowspan="4"style="width:18px; border:1px solid #808080;text-align:center;  height:90px;"><b>Attendees</b></td>
           <td colspan="2" style=" border:1px solid #808080; text-align:center; width:10px;"><b>Registration No.</b></td>
           <td style=" border:1px solid #808080; text-align:center; width:200px;"><b>Name</b></td>
           <td colspan="2" style=" border:1px solid #808080; text-align:center"><b>Signature</b></td>
        </tr>
           <tr>
       
        </tr>   <tr>
       
        </tr>   <tr>
        
        </tr> 
    </table> 
<br><br>
<form action="">
    <table style="border:1px solid #808080; width:90%; ">
        <tr>
           <th style="width:35px; border:1px solid #808080;height:30px"><b>No.</b></th>
           <th style=" border:1px solid #808080; text-align:center"><b>Topic Disclosed</b></th>
        </tr>
        <tr>
           <th style="width:18px; border:1px solid #808080; height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr> <tr>
           <th style="width:18px; border:1px solid #808080;  height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr>
        <tr>
         <th style="width:18px; border:1px solid #808080;  height:39px"></th>
         <th style=" border:1px solid #808080; text-align:center"></th>
      </tr>
    </table>
    <br>
    <table style="border:1px solid #808080; width:90%; ">
        <tr>
           <th style="width:35px; border:1px solid #808080;height:30px"><b>No.</b></th>
           <th style=" border:1px solid #808080; text-align:center"><b>Issues From Last Meeting</b></th>
           <th style=" border:1px solid #808080; text-align:center; width:130px;"><b>Status</b></th>
           <th style=" border:1px solid #808080; text-align:center; width:130px;"><b>New Date</b></th>
        </tr>
        <tr>
           <th style="width:18px; border:1px solid #808080; height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr> <tr>
           <th style="width:18px; border:1px solid #808080;  height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr>
    </table>
    <br>
    <table style="border:1px solid #808080; width:90%; ">
        <tr>
           <th style="width:35px; border:1px solid #808080;height:30px"><b>No.</b></th>
           <th style=" border:1px solid #808080; text-align:center"><b>Any Feedback From Supervisor</b></th>
        </tr>
        <tr>
           <th style="width:18px; border:1px solid #808080; height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr> 
        <tr>
           <th style="width:18px; border:1px solid #808080;  height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr>
        <tr>
           <th style="width:18px; border:1px solid #808080;  height:39px"></th>
           <th style=" border:1px solid #808080; text-align:center"></th>
        </tr>
    </table>
    <br>
   <div style="float:left">
<label for=""><b>Next Meeting:</b> </label>
<br>
<label for=""><b>Date & Time :</b> </label>
<input value="" type="text" style="border-top:0px; border-left:0px; border-right:0px; border-bottom:1px dotted black; width:90px">,<input value="" type="text" style="border-top:0px; border-left:0px; border-right:0px; border-bottom:1px dotted black; width:80px; margin-left:10px">
</div>
<br>
<div style="float:left; margin-left:80px;">
<label for=""><b> Supervisor Signature :-----------------------------</b></label><br>
</div> --}}
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
