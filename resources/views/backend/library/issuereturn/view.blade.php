@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
        	<!-- Main content -->
		<section class="content">
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

                /* #customers tr:nth-child(even){background-color: #f2f2f2;} */

                /* #customers tr:hover {background-color: #ddd;} */

                #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                /* background-color: #4CAF50; */
                color: white;
                }
                </style>



                <table id="customers">
                <tr>
                <td>
                    <h2>
                       <img src="{{asset('public/backend/images/logo-dark.png')}}" width="200" height="100">

                    </h2>
                </td>
                <td><h2>Easy School ERP</h2>
                        <p>School Address</p>
                        <p>Phone : 01752221552222</p>
                        <p>Email : Axesgl@gmail.com</p>

                </td> 
                <td>
                    {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($payment->voucher_no, 'C39')}}" alt="barcode" style="margin-right: -10px;padding-bottom: 5px;"> --}}
                    <br><strong>Issue N°:</strong> {{$data->invno}}
                    <br><strong>Issue Date:</strong>{{date('d-m-Y', strtotime($data->date))}} 
                    <br><strong>Return Date:</strong>{{date('d-m-Y', strtotime($data->rdate))}}
                    <br><strong>Student Name:</strong>{{$data->addstudent->name}}
                </td>
                </tr>
                
                
                </table>



                <table id="customers">
                <tr>
                    <th width="10%">SN</th>
                    <th width="20%">Book Name</th>
                    <th width="15%">ISBN</th>
                    <th width="20%">Author</th>
                </tr>
                @php
                $i=1;
                @endphp
                @foreach ($details as $detail)
                    <tr>
                        <td class="text-md-center">{{$i++}}</td>
                        <td class="text-md-left">{{$detail->book->book_title}}</td>
                        <td class="text-md-left">{{$detail->book->isbn_no}}</td>
                        <td style="text-align:left;">{{$detail->book->author}}</td>
                       
                        
                        
                    </tr>

                @endforeach
               
                {{-- <tr>
                    <td id="word_translate" colspan="6"><span style="font-weight: bold;">In Word:</span>{{ NumConvert::word($payment->amount)}} taka only</td>
                </tr> --}}
                <tr>
                    <td colspan="6"><span style="font-weight: bold;">Note:{{$data->note}} </span></td>
                </tr>
               
                
                </table>

                <br><br>




                <br> <br>
                <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>

</section>
<!-- /.content -->

</div>
</div>





@endsection
