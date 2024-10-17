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
  body{
    width:80%;
  }
  .pname{
    width:80%;
    text-align:center;
  }
  .thl{
    border:1px solid #808080; 
    margin-left:15px;
    padding:13px;
  }
  .tdl{
    border:1px solid #808080; 
    width:80px;
    font-size:12px;
  }
 #span{
    
 }

</style>
<body>
<section>
 <table style="width:90%;">
  <tr>
    <td style="margin-left:33px"><img style="max-width: 150px;" src="Images/images.png" alt="company logo"></td>
    <th class="pname" style="text-align:center">Gujrat Institute of Managment Sciences PMAS <br>Arid Agriculture University Rawalpindi <br> Final Evaluation Form</th>
  </tr>
 </table> 
</section>
<br>
  <form action="">
    <div style="text-align:center;">
    <div style=" display:inline;">
    <div style=" display:inline;"><input  type="checkbox" style="font-size:13px; "> <label for=""style="font-size:14px;"><b>BSCS</b></label></div>
    <div style="  display:inline;"><input  type="checkbox" style="font-size:13px; "> <label for=""style="font-size:14px;"><b>BSIT</b> </label></div>
    <div style=" display:inline;"><input  type="checkbox" style="font-size:13px; "> <label for=""style="font-size:14px;"><b>MCI</b></label></div>
    </div>
    <div style="display:inline; margin-left:60px;">
    <div style=" display:inline;"> <label for=""style="font-size:16px;"><b>Status:</b></label></div>
    <div style=" display:inline;"><input  type="checkbox" style="font-size:13px; "> <label for=""style="font-size:14px;">Passed</label></div>
    <div style=" display:inline;"><input  type="checkbox" style="font-size:13px; "> <label for=""style="font-size:14px;">Deffered</label></div>
    </div>
    </div>
  </form>
<br>
<form>
  <table style="width:118%;">
    <tr>
      <td >
        <div style="">
          <label for="fname">Project Id:</label><br>
          <input type="text" id="fname" name="fname" value="{{$grouprecord->allgrouplogin->projectid}}" style="height:26px; width:230px">
        </div>
      </td>
      <td class="tdd" >
          <div style="margin-left:29px;">
              <label for="fname">Date:</label><br>
              {{-- <input type="text" id="fname" value="20-10-20" name="fname" value="{{$currentDate}}" style="height:26px; width:90px"> --}}
              <input type="text" id="fname" name="fname" value="" style="height:26px; width:90px">
          </div>
      </td>
      <td>
         <div style="margin-left:29px;">
              <label for="fname">Time:</label><br>
              {{-- <input type="text" id="fname" name="fname" value="{{$currentTime}}" style="height:26px; width:90px"> --}}
              <input type="text" id="fname" name="fname" value="" style="height:26px; width:90px">
          </div>
        </td>
       <td>
       <div style="margin-left:29px;">
              <label for="fname">Venue:</label><br>
              <input type="text" id="fname" value="" name="fname" style="height:26px; width:90px">
          </div>
       </td>
    </tr>
    <tr>
    <td >
         <div style="">
            <label for="fname">Project Title:</label><br>
            <input type="text" id="fname" name="fname" value="{{$grouprecord->PreliminaryProposal->projectname}}" style="height:26px; width:230px">
         </div>
      </td>
    <td class="tdd" colspan="3" >

         <div style="margin-left:29px;">
            <label for="fname">Supervisor:</label><br>
            <input type="text" id="fname" name="fname" value="{{$grouprecord->PreliminaryProposal->supervisor->name}}" style="height:26px; width:280px">
         </div>
      </td>
    
  </tr>
      
  </table>
  <br>
  <br>
  <table style="width:118%;">
     <tr style="border:1px solid #808080; ">
         <th rowspan="2" style="border:1px solid #808080; text-align:center;">Sr#</th>
         <th rowspan="2" style="border:1px solid #808080; text-align:center;">Student Reg#</th>
         <th rowspan="2" style="border:1px solid #808080; text-align:center;">Student Name</th>
         <th style="border:1px solid #808080; ">Ch.4</th>
         <th style="border:1px solid #808080; ">Ch.5</th>
         <th colspan="3" style="border:1px solid #808080; text-align:center;">Functional/Non Functional <br> Requirements--80 marks</th>
         <th rowspan="2" style="border:1px solid #808080; text-align:center;">Total 80</th>
         
        
     </tr>
     <tr style="border:1px solid #808080; ">
         <td colspan="2" style="border:1px solid #808080; font-size:14px">10 Marks </td>
         <td style="border:1px solid #808080; font-size:14px">Code(35)</td>
         <td style="border:1px solid #808080; font-size:14px">Viva(25)</td>
         <td style="border:1px solid #808080; font-size:14px">Demo(10)</td>
     </tr>  
     <tr>
      <th colspan="9" style="border:1px solid #808080; " >Evaluator:1</th>
     </tr>
     
     <tr >
     <td style="border:1px solid #808080; height:25px">1</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecords->regno}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecords->name}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr >
     <td style="border:1px solid #808080; height:25px">2</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->regno}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->name}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr >
     <td style="border:1px solid #808080; height:25px">3</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : ''}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : ''}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr>
      <th colspan="9" style="border:1px solid #808080; " >Evaluator:2</th>
     </tr>
     
     <tr >
     <td style="border:1px solid #808080; height:25px">1</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecords->regno}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecords->name}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr >
     <td style="border:1px solid #808080; height:25px">2</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->regno}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->name}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr >
     <td style="border:1px solid #808080; height:25px">3</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : '' }}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : ''}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr>
      <th colspan="9" style="border:1px solid #808080; " >Evaluator:3</th>
     </tr>
     
     <tr >
     <td style="border:1px solid #808080; height:25px">1</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecords->regno}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecords->name}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr >
     <td style="border:1px solid #808080; height:25px">2</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->regno}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->name}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     <tr >
     <td style="border:1px solid #808080; height:25px">3</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : ''}}</td>
     <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : ''}}</td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     <td style="border:1px solid #808080; "></td>
     </tr>
     
     
     
     
  </table>
  <br> <br>
  <table style="width:100%">
    <tr>
      <th colspan="3" style="border:1px solid #808080; height:30px; text-align:center;">Aggrigated Result by PMO</th>
      <th  style="border:1px solid #808080; width:100px; text-align:center;">Aggrigated marks</th>
    </tr>
    <tr>
      <td style="border:1px solid #808080;  height:25px; width:60px">1</td>
      <td style="border:1px solid #808080;  width:90px ">{{$grouprecord->studentsrecords->regno}}</td>
      <td style="border:1px solid #808080;  width:140px">{{$grouprecord->studentsrecords->name}}</td>
      <td style="border:1px solid #808080; "></td>
    </tr>
     <tr>
      <td style="border:1px solid #808080;  height:25px">2</td>
      <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->regno}}</td>
      <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord1->name}}</td>
      <td style="border:1px solid #808080; "></td>
    </tr>
     <tr>
      <td style="border:1px solid #808080;  height:25px">3</td>
      <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->regno : ''}}</td>
      <td style="border:1px solid #808080; ">{{$grouprecord->studentsrecord2 ? $grouprecord->studentsrecord2->name : '' }}</td>
      <td style="border:1px solid #808080; "></td>
    </tr>
  </table>
        <br>
        <br>
        <br>
        <table style="border:1px solid #808080; ; width:120%;">
          <tr>
            <th style="border:1px solid #808080;  width:190px ;text-align:center;"> Evaluator-Name</th>
            <th style="border:1px solid #808080;  text-align:center;">Comments</th>
            <th style="border:1px solid #808080;  width:150px;text-align:center;">Signature</th>
          </tr>
          <tr>
            <td style="border:1px solid #808080;  height:35px"></td>
            <td style="border:1px solid #808080;  "></td>
            <td style="border:1px solid #808080; "></td>
          </tr> <tr>
             <td style="border:1px solid #808080;  height:35px"></td>
            <td style="border:1px solid #808080; "></td>
            <td style="border:1px solid #808080; "></td>
          </tr> <tr>
          <td style="border:1px solid #808080;  height:35px"> </td>
            <td style="border:1px solid #808080; "></td>
            <td style="border:1px solid #808080; "></td>
          </tr>
        </table>
        <br> <br>
         
   <br>
<div style="float:left">
<label for="">-----------------------------<br> Pmo CS/IT GIMS :</label><br>
</div>
<div style="float:left; margin-left:290px;">
<label for="">-----------------------------<br> Campus Head GIMS :</label><br>
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