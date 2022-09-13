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
                  <h3 class="box-title">Upload Content List</h3>
    <a href="{{ route('uploadcontent.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Upload Content</a>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Title</th>
                <th>Type</th>
                <th>Available For</th>
                <th>Date</th>
                <th width="25%">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($allData as $key => $data )
            <tr>
                <td>{{ $key+1 }}</td>
                <td> {{ $data->title }}</td>
                <td> {{ $data->type }}</td>
                <td> {{ $data->available_for }}</td>
                <td> {{ $data->date }}</td>
               
                <td>
{{-- <a href="{{ route('uploadcontent.edit',$data->id) }}" class="btn btn-info">Edit</a> --}}
<a href="{{ route('uploadcontent.delete',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>

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