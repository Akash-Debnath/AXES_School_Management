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
                    {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($journal->voucher_no, 'C39')}}" alt="barcode" style="margin-right: -10px;padding-bottom: 5px;"> --}}
                    <br><strong>Journal N°:</strong> {{$journal->voucher_no}}
                    <br><strong>Date:</strong>{{date('d-m-Y', strtotime($journal->date))}} 
                </td>
                </tr>
                
                
                </table>

               
                    <h3 style="text-align: center">Journal Voucher</h3>
            

                <table id="customers">
                <tr>
                    <th width="10%">SN</th>
                    <th width="20%">Head Of Account</th>
                    <th width="15%">Debit</th>
                    <th width="15%">Credit</th>
                    <th width="15%">Remarks</th>
                </tr>
                @php
                $i=1;
                @endphp
                @foreach ($journaldetails as $detail)
                    @php 
                    $dfirst = filter_var($detail->debit_ledger_id, FILTER_SANITIZE_NUMBER_INT);
                    $did = preg_replace("/[^[:alnum:][:space:]]/u", '', $dfirst);
                    $dsecond=filter_var($detail->debit_ledger_id, FILTER_SANITIZE_STRING);
                    $dtype = preg_replace("/[^A-Za-z\-]/",'', $dsecond);
                    //dd($type);
                    if($dtype == 'SU'){
                        
                        $debitname='oliullah';
                    }else{
                        $debitname='shuvo';
                    }
                    $first = filter_var($detail->credit_ledger_id, FILTER_SANITIZE_NUMBER_INT);
                    $id = preg_replace("/[^[:alnum:][:space:]]/u", '', $first);
                    $second=filter_var($detail->credit_ledger_id, FILTER_SANITIZE_STRING);
                    $type = preg_replace("/[^A-Za-z\-]/",'', $second);
                    //dd($type);
                    if($type == 'SU'){
                        
                        $creditname='oliullah';
                    }else{
                        $creditname='shuvo';
                    }
                    @endphp
                    <tr>
                        <td class="text-md-center" rowspan="2">{{$i++}}</td>
                        <td class="text-md-left">{{$debitname}}</td>
                       
                        <td style="text-align:left;">@php echo number_format("$detail->debit_amount",2) @endphp</td>
                        <td class="text-md-right">0.00</td>
                        <td class="text-md-right" rowspan="2">{{$detail->ref}}</td>
                    </tr>

                    <tr>
                        <td class="text-md-left">{{$creditname}}</td>
                        <td class="text-md-right">0.00</td>
                        <td style="text-align:left;">@php echo number_format("$detail->credit_amount",2) @endphp</td>
                    </tr>

                @endforeach
                <tr>
                    <td colspan="3" style="font-weight: bold;text-align:center;">-Total-</td>
                    <td id="total" style="text-align:right;">@php echo number_format("$journal->amount",2) @endphp</td>
                    <td></td>
                </tr>
                {{-- <tr>
                    <td id="word_translate" colspan="6"><span style="font-weight: bold;">In Word:</span>{{ NumConvert::word($journal->amount)}} taka only</td>
                </tr> --}}
                <tr>
                    <td colspan="5"><span style="font-weight: bold;">Note:{{$journal->note}} </span></td>
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
