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
                    <br><strong>Payment N°:</strong> {{$payment->voucher_no}}
                    <br><strong>Date:</strong>{{date('d-m-Y', strtotime($payment->date))}} 
                </td>
                </tr>
                
                
                </table>



                <table id="customers">
                <tr>
                    <th width="10%">SN</th>
                    <th width="20%">Head Of Account</th>
                    <th width="15%">Mode</th>
                    <th width="20%">Cheque</th>
                    <th width="15%">Date</th>
                    <th width="15%">Amount</th>
                </tr>
                @php
                $i=1;
                @endphp
                @foreach ($paymentdetails as $detail)
                    @php 
                    $first = filter_var($detail->payment_to, FILTER_SANITIZE_NUMBER_INT);
                    $id = preg_replace("/[^[:alnum:][:space:]]/u", '', $first);
                    $second=filter_var($detail->payment_to, FILTER_SANITIZE_STRING);
                    $type = preg_replace("/[^A-Za-z\-]/",'', $second);
                    //dd($type);
                    if($type == 'SU'){
                        
                        $name='oliullah';
                    }else{
                        $name='shuvo';
                    }
                    @endphp
                    <tr>
                        <td class="text-md-center">{{$i++}}</td>
                        <td class="text-md-left">{{$name}}</td>
                        <td class="text-md-left">@if($detail->payment_source=="LE_5") Cash @else Bank @endif</td>
                        <td style="text-align:left;">{{$detail->cheque_no}}</td>
                        <td style="text-align:left;">@if($detail->cheque_date!=null){{date('d-m-Y', strtotime($detail->cheque_date))}} @endif</td>
                        <td class="text-md-right">@php echo number_format("$detail->amount",2) @endphp</td>
                       
                        
                        
                    </tr>

                @endforeach
                <tr>
                    <td colspan="5" style="font-weight: bold;text-align:center;">-Total-</td>
                    <td id="total" style="text-align:right;">@php echo number_format("$payment->amount",2) @endphp</td>
                    
                </tr>
                {{-- <tr>
                    <td id="word_translate" colspan="6"><span style="font-weight: bold;">In Word:</span>{{ NumConvert::word($payment->amount)}} taka only</td>
                </tr> --}}
                <tr>
                    <td colspan="6"><span style="font-weight: bold;">Note:{{$payment->note}} </span></td>
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
