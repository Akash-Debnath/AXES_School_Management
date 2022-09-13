<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


<table id="customers">
  <tr>
   <td><h2>
  <?php $image_path = '/upload/easyschool.png'; ?>
  <img src="{{ public_path() . $image_path }}" width="200" height="100">

    </h2></td>
    <td><h2>Easy School ERP</h2>
<p>School Address</p>
<p>Phone : 01705645150</p>
<p>Email : anamit08@gmail.com</p>

    </td> 
  </tr>
  
   
</table>



<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">Student Details</th>
    <th width="45%">Student Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Student Name</b></td>
    <td><b>{{$data->firstname}}  {{$data->lastname}}</b></td>
    
    
  </tr>
  <tr>
    <td>2</td>
    <td><b>Student ID No</b></td>
    <td><b>{{$data->sid}}</b></td>
    
  </tr>

  
  <tr>
    <td>3</td>
    <td><b>Mobile Number </b></td>
    <td><b>{{$data->phone}}</b></td>

  </tr>
  <tr>
    <td>4</td>
    <td><b>Gender</b></td>
    <td><b>{{$data->gender}}</b></td>
  
  </tr>
  <tr>
    <td>5</td>
    <td><b>Application For</b></td>
    <td><b>{{$data->applicantion_for}}</b></td>
  
  </tr>
  <tr>
    <td>6</td>
    <td><b>Program</b></td>
    @php 
    $program=DB::table('programs')->where('id',$data->program)->first();

    @endphp
    <td><b>{{$program->name}}</b></td>
  
  </tr>

  <tr>
    <td>7</td>
    <td><b>Reference</b></td>
    <td><b>{{$data->reference}}</b></td>
  
  </tr>
  <tr>
    <td>8</td>
    <td><b>Email</b></td>
    <td><b>{{$data->email}}</b></td>
  
  </tr>
  <tr>
    <td>9</td>
    <td><b>DOB</b></td>
    <td><b>{{$data->dob}}</b></td>
  
  </tr>
  <tr>
    <td>10</td>
    <td><b>Blood Group</b></td>
    <td><b>{{$data->bloodgroup}}</b></td>
  
  </tr>
  <tr>
    <td>11</td>
    <td><b>Father Name</b></td>
    <td><b>{{$data->fname}}</b></td>
  
  </tr>
  <tr>
    <td>12</td>
    <td><b>Father Phone</b></td>
    <td><b>{{$data->fmobile}}</b></td>
  
  </tr>
  <tr>
    <td>13</td>
    <td><b>Mother Name</b></td>
    <td><b>{{$data->mname}}</b></td>
  
  </tr>
  <tr>
    <td>14</td>
    <td><b>Mother Phone</b></td>
    <td><b>{{$data->mmobile}}</b></td>
  
  </tr>
  <tr>
    <td>15</td>
    <td><b>Local Guradian</b></td>
    <td><b>{{$data->lgurdian}}</b></td>
  
  </tr>
  <tr>
    <td>16</td>
    <td><b>Local Guradian Phone</b></td>
    <td><b>{{$data->lgurdian_mobile}}</b></td>
  
  </tr>
  <tr>
    <td>17</td>
    <td><b>Present Address</b></td>
    <td><b>{{$data->pre_house}}, {{$data->pre_road}}, {{$data->pre_post_office}}, {{$data->pre_police_station}}, {{$data->pre_district}}</b></td>
  
  </tr>
  <tr>
    <td>18</td>
    <td><b>Permament Address</b></td>
    <td><b>{{$data->per_house}}, {{$data->per_road}}, {{$data->per_post_office}}, {{$data->per_police_station}}, {{$data->per_district}}</b></td>
  
  </tr>
  <tr>
    <td>20</td>
    <td><b>Status</b></td>
    <td>
      <b>  
          @php
            if($data->status == '1'){
                echo'Pending';
            }elseif($data->status == '2'){
                echo'Approve';
            }elseif($data->status == '4'){
                echo'Enroll';
            }else{
                echo'Reject';
            }
        @endphp
      </b>
    </td>
  
  </tr>

   
   
</table>

<br><br>

<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">SSC Details</th>
    <th width="45%">SSC Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Passing Year </b></td>
    <td><b>{{$data->sscpassyear}}</b></td>
    
  </tr>
  <tr>
    <td>2</td>
    <td><b>Grade</b></td>
    <td><b>{{$data->sscgrade}}</b></td>
    
  </tr>

  <tr>
    <td>3</td>
    <td><b>Roll number</b></td>
    <td><b>{{$data->sscroll}}</b></td>
  
  </tr>

    <tr>
    <td>4</td>
    <td><b>Registration number</b></td>
    <td><b>{{$data->sscregno}}</b></td>
  
  </tr>
  <tr>
    <td>5</td>
    <td><b>Board</b></td>
    <td><b>{{$data->sscboard}}</b></td>
  
  </tr>


  
    
   
</table>

<br><br>

<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">HSC Details</th>
    <th width="45%">HSC Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Passing Year </b></td>
    <td><b>{{$data->hscpassyear}}</b></td>
    
  </tr>
  <tr>
    <td>2</td>
    <td><b>Grade</b></td>
    <td><b>{{$data->hscgrade}}</b></td>
    
  </tr>

  <tr>
    <td>3</td>
    <td><b>Roll number</b></td>
    <td><b>{{$data->hscroll}}</b></td>
  
  </tr>

    <tr>
    <td>4</td>
    <td><b>Registration number</b></td>
    <td><b>{{$data->hscregno}}</b></td>
  
  </tr>
  <tr>
    <td>5</td>
    <td><b>Board</b></td>
    <td><b>{{$data->hscboard}}</b></td>
  
  </tr>
   
</table>

<br><br>



<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">BSC Details</th>
    <th width="45%">BSC Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Subject Name</b></td>
    <td><b>{{$data->bachelor_degree_name}}</b></td>
    
  </tr>
 

    <tr>
    <td>2</td>
    <td><b>Instituation Name</b></td>
    <td><b>{{$data->bachelor_degree_institute	}}</b></td>
    
  </tr>
  <tr>
    <td>3</td>
    <td><b>CGPA</b></td>
    <td><b>{{$data->bachelor_degree_result}}</b></td>
    
  </tr>
  <tr>
    <td>4</td>
    <td><b>Roll Number</b></td>
    <td><b>{{$data->bachelor_degree_roll}}</b></td>

  </tr>
    <tr>
    <td>5</td>
    <td><b>Passing Year</b></td>
    <td><b>{{$data->bachelor_degree_passyear}}</b></td>
  
  </tr>
    
   
</table>

<br><br>

<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">MSC Details</th>
    <th width="45%">MSC Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Subject Name</b></td>
    <td><b>{{$data->masters_degree_name}}</b></td>
    
  </tr>
 

    <tr>
    <td>2</td>
    <td><b>Instituation Name</b></td>
    <td><b>{{$data->masters_degree_institute	}}</b></td>
    
  </tr>
  <tr>
    <td>3</td>
    <td><b>CGPA</b></td>
    <td><b>{{$data->masters_degree_result}}</b></td>
    
  </tr>
  <tr>
    <td>4</td>
    <td><b>Roll Number</b></td>
    <td><b>{{$data->masters_degree_roll}}</b></td>

  </tr>
    <tr>
    <td>5</td>
    <td><b>Passing Year</b></td>
    <td><b>{{$data->masters_degree_passyear}}</b></td>
  
  </tr>
    
   
</table>



<br> <br>
  <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>

</body>
</html>
