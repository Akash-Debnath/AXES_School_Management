@extends('user.body.main')
@section('user')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
       

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
           

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Notice Board </h3>
  <a href="{{ route('employee.attendance.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Attendance </a>			  

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
       <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
             
              <th>Date </th> 
              
               
          </tr>
      </thead>
      <tbody>
        @foreach($data as $datas)
			<tr>
				
					
				<td> {{ $datas->Description}}</td>	
				
				 		  
			</tr>
			@endforeach
          
                           
                      </tbody>
                      <tfoot>
                           
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

                 
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>





@endsection