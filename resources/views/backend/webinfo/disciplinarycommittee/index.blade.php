@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">

            

            <div class="col-12">

             <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">DISCIPLINARYCOM List</h3>
    <a href="{{ route('disciplinarycommittee.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add DISCIPLINARYCOM</a>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Email</th>
                <th>Image</th>
                 <th>Detail</th> 
                
                <th width="25%">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($allData as $key => $disciplinarycom )
            <tr>
                <td>{{ $key+1 }}</td>
                <td> {{ $disciplinarycom->name }}</td>
                <td> {{ $disciplinarycom->designation }}</td>
                <td> {{ $disciplinarycom->email }}</td>
                <td> <img id="showImage1" src="{{url('public/upload/disciplinarycom/',$disciplinarycom->image) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"></td>
                 <td> {{ $disciplinarycom->detail }}</td> 
                <td>
<a href="{{ route('disciplinarycommittee.edit',$disciplinarycom->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('disciplinarycommittee.delete',$disciplinarycom->id) }}" class="btn btn-danger" id="delete">Delete</a>

                </td>

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