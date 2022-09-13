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
  <?php $image_path = 'public/upload/easyschool.png'; ?>
  <img src="{{ public_path() . $image_path }}" width="200" height="100">

    </h2></td>
    <td><h2>University  ERP</h2>
<p>Court Para </p>
<p>Phone : 343434343434</p>
<p>Email : support@rmuuniversity.com</p>

    </td> 
  </tr>
  
   
</table>



<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">Teacher Details</th>
    <th width="45%">Teacher Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Teacher Name</b></td>
    <td>{{ $details['name'] }}</td>
  </tr>
  <tr>
    <td>2</td>
    <td><b>Teacher ID No</b></td>
    <td>{{ $details['id_no'] }}</td>
  </tr>

    <tr>
    <td>3</td>
    <td><b>Teacher  Role</b></td>
    <td>{{ $details->roll }}</td>
  </tr>

  <tr>
    <td>4</td>
    <td><b>Father's Name</b></td>
    <td>{{ $details['fname'] }}</td>
  </tr>
  <tr>
    <td>5</td>
    <td><b>Mother's Name</b></td>
    <td>{{ $details['mname'] }}</td>
  </tr>
  <tr>
    <td>6</td>
    <td><b>Mobile Number </b></td>
    <td>{{ $details['mobile'] }}</td>
  </tr>
  <tr>
    <td>7</td>
    <td><b>Address</b></td>
    <td>{{ $details['address'] }}</td>
  </tr>
  <tr>
    <td>8</td>
    <td><b>Gender</b></td>
    <td>{{ $details['gender'] }}</td>
  </tr>

    <tr>
    <td>9</td>
    <td><b>Religion</b></td>
    <td>{{ $details['religion'] }}</td>
  </tr>


    <tr>
    <td>10</td>
    <td><b>Date of Birth</b></td>
    <td>{{ $details['dob'] }}</td>
  </tr>
    
    <tr>
      <td>11</td>
      <td><b>Year </b></td>
      <td>{{ $details['teacher_year']['name'] ?? ''}}</td>
    </tr>
    <tr>
    <td>12</td>
    <td><b>Class  </b></td>
    <td>{{ $details['teacher_class']['name'] ?? ''}}</td>
  </tr>
    <tr>
    <td>14</td>
    <td><b>Group </b></td>
    <td>{{ $details['group']['name'] ?? '' }}</td>
  {{-- </tr>
    <tr>
    <td>15</td>
    <td><b>Shift </b></td>
    <td>{{ $details['shift']['name'] ?? ''}}</td>
  </tr> --}}
  <tr>
    <td>16</td>
    <td><b>Faculty </b></td>
    <td>{{ $details['faculty']['name'] ?? ''}}</td>
  </tr>
  <tr>
    <td>17</td>
    <td><b>Department </b></td>
    <td>{{ $details['department']['name'] ?? ''}}</td>
  </tr>
  {{-- <tr>
    <td>18</td>
    <td><b>Batch </b></td>
    <td>{{ $details->batch_id }}</td>
  </tr> --}}
  <tr>
    <td>19</td>
    <td><b>Semester </b></td>
    <td>{{ $details->semester }}</td>
  </tr>
   
</table>
<br> <br>
  <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>

</body>
</html>
