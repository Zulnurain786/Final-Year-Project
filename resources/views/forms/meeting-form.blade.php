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
<body>
<section>
   <table style="width:90%;">
      <tr>
        <td style="margin-left:33px"><img style="max-width: 150px;" src="Images/images.png" alt="company logo"></td>
        <td class="pname" style="text-align:center;margin-right:20px"><h3>Gujrat Institute of Managment Sciences <br>PMAS-Arid Agriculture University RWP <br> SUPERVISOR MEETING FORM </h3></td>
      </tr>
     </table>
</section>
<br>
<table style="border:1px solid #808080; width:80% ">
        <tr>
           <td style="width:120px; border:1px solid #808080; text-align:center; height:30px"><b>Date:</b> </td>
           <td style="width:90px; border:1px solid #808080; text-align:center"></td>
           <td style=" border:1px solid #808080; text-align:center; width:90px;"><b>Project Id:</b></td>
           <td style="width:80px; border:1px solid #808080; text-align:center">{{$grouprecord->allgrouplogin->projectid}}</td>
           <td style=" border:1px solid #808080; text-align:center;  width:90px;"><b>Meeting#</b></td>
           <td style=" border:1px solid #808080; text-align:center; width:60px;"></td>
        </tr>
        <tr>
           <td rowspan="2" style="width:80px; border:1px solid #808080; text-align:center;  height:20px"><b>Project Title:</b></td>
           <td colspan="5"  style=" border:1px solid #808080; text-align:center; height:20px">{{$grouprecord->PreliminaryProposal->projectname}} </td>
        </tr> 
        <tr>
           <td colspan="5"style=" border:1px solid #808080; text-align:center; height:20px"></td>
        </tr>  
        <tr>
           <td style="width:18px; border:1px solid #808080; text-align:center;  height:20px"><b>Supervisor</b></td>
           <td colspan="5"style=" border:1px solid #808080; text-align:center; height:20px">{{$grouprecord->PreliminaryProposal->supervisor->name}}</td>
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
        <td colspan="2" style=" border:1px solid #808080; text-align:center">{{$grouprecord->studentsrecords->regno}}</td>
           <td style=" border:1px solid #808080; text-align:center">{{$grouprecord->studentsrecords->name}} </td>
           <td colspan="2" style=" border:1px solid #808080; text-align:center"></td>
        </tr>   <tr>
        <td colspan="2" style=" border:1px solid #808080; text-align:center"> {{$grouprecord->studentsrecord1 ? $grouprecord->studentsrecord1->regno : ''}}</td>
           <td style=" border:1px solid #808080; text-align:center">{{$grouprecord->studentsrecord1 ? $grouprecord->studentsrecord1->name : ''}}</td>
           <td colspan="2" style=" border:1px solid #808080; text-align:center"></td>
        </tr>   <tr>
        <td colspan="2" style=" border:1px solid #808080; text-align:center">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : ''}}</td>
           <td style=" border:1px solid #808080; text-align:center">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : ''}}</td>
           <td colspan="2" style=" border:1px solid #808080; text-align:center"></td>
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
</div>
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