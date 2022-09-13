
<style  media="print">
    @media print {
        @page 
            {
                size: auto;   /* auto is the initial value */
                margin: 0;  /* this affects the margin in the printer settings */
            }
       body {
            -webkit-print-color-adjust: exact;
            -moz-print-color-adjust: exact;
            -ms-print-color-adjust: exact;
        }
    }
</style>
<br>
<div class="container-fluid">
    <div class="my_panel localhost_appication_data">
        <div class="wrapper">
            <span class="print_btn" onclick="printDiv('printableAreaLocalhost')" style="cursor: pointer;background-color:#dc3535;border-radius:4px;padding:4px 16px;color:#fff;">Print</span>
            <div class="application_data" id="printableAreaLocalhost">
                <div class="step one" >
                    <div class="content" style="position: relative;height: 100%;">
                        <div class="header" style="text-align:center">
                            <div style="background-image: url('public/upload/website/202201270715Logoin-Logo.png');height: 100px;width: 300px;background-position: center;background-size: contain;margin: auto;margin-bottom: 20px;"></div>
                            <h1 style="color: #444;border-bottom: 1px solid #444;width: fit-content;margin: auto;font-size: 28px;margin-bottom: 12px;">Rabindra Maitree University</h1>
                            <h4 style="color: #444;border-bottom: 1px solid #444;width: fit-content;margin: auto;font-size: 22px;font-weight: 600;">Admit Card</h4>
                        </div>
                        <div class="body" style="padding: 50px 110px 20px 110px;">
                            <div class="item" style="border: 1px solid #000;margin-bottom: 36px;padding: 10px 16px;">
                                <span class="title" style="font-size: 15px;color: #000;">Name: </span>
                                <span class="data" style="font-size: 15px;color: #444;">{{$student->firstname}} {{$student->lastname}}</span>
                            </div>
                            <div class="item" style="border: 1px solid #000;margin-bottom: 36px;padding: 10px 16px;">
                              <span class="title" style="font-size: 15px;color: #000;">Applicant ID: </span>
                              <span class="data" style="font-size: 15px;color: #444;">{{$student->sid}}</span>
                            </div>
                            <div class="item" style="border: 1px solid #000;margin-bottom: 36px;padding: 10px 16px;">
                                <span class="title" style="font-size: 15px;color: #000;">Department Name:</span>
                                <span class="data" style="font-size: 15px;color: #444;">{{$student->program->name ?? ''}}</span>
                            </div>
                            <div class="item" style="border: 1px solid #000;margin-bottom: 36px;padding: 10px 16px;">
                                <span class="title" style="font-size: 15px;color: #000;">Payment Status:</span>
                                <span class="data" style="font-size: 15px;color: #444;">Paid</span>
                            </div>
                            <div class="item" style="border: 1px solid #000;margin-bottom: 36px;padding: 10px 16px;">
                                <span class="title" style="font-size: 15px;color: #000;">Payment Method</span>
                                <span class="data" style="font-size: 15px;color: #444;">Online</span>
                            </div>
                            
                        </div>
                        <div class="footer" style="">
                            <div class="signature" style="float:right;font-size: 15px;padding-bottom: 50px;margin-right: 110px;padding-left: 8px;padding-right: 8px;border-top: 1px solid #007bff;display: inline-block;">Prepared By</div>
                            <div class="signature" style="font-size: 15px;padding-bottom: 50px;margin-left: 110px;padding-left: 8px;padding-right: 8px;border-top: 1px solid #007bff;display: inline-block;">Director <br> Academic & Exam Affairs Devision</div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<script>
  function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
  }
</script>