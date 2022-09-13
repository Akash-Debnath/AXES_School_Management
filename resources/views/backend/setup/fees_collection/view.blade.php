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
                    {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($payment->invno, 'C39')}}" alt="barcode" style="margin-right: -10px;padding-bottom: 5px;"> --}}
                    <br><strong>Payment N째:</strong> {{$payment->invno}}
                    <br><strong>Date:</strong>{{date('d-m-Y', strtotime($payment->date))}} 
                </td>
                </tr>
                
                
                </table>



                <table id="customers">
                <tr>
                    <th width="10%">SN</th>
                    <th width="20%">Head Of Account</th>
                    <th width="15%">Mode</th>
                    <th width="15%">Amount</th>
                </tr>
                @php
                $i=1;
                @endphp
                @foreach ($paymentdetails as $detail)
                    <tr>
                        <td class="text-md-center">{{$i++}}</td>
                        <td class="text-md-left">{{$detail->students->name }}</td>
                        <td class="text-md-left">Cash</td>
                        <td class="text-md-right">@php echo number_format("$detail->amount",2) @endphp</td>
                       
                        
                        
                    </tr>

                @endforeach
                <tr>
                    <td colspan="3" style="font-weight: bold;text-align:center;">-Total-</td>
                    <td id="total" style="text-align:right;">@php echo number_format("$payment->tamount",2) @endphp</td>
                    
                </tr>
                {{-- <tr>
                    <td id="word_translate" colspan="6"><span style="font-weight: bold;">In Word:</span>{{ NumConvert::word($payment->amount)}} taka only</td>
                </tr> --}}
                <tr>
                    <td colspan="4"><span style="font-weight: bold;">Note:{{$payment->note}} </span></td>
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
