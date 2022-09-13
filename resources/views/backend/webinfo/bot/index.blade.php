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
                  <h3 class="box-title">BOT List</h3>
    <a href="{{ route('bot.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add BOT</a>

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
            @foreach($allData as $key => $bot )
            <tr>
                <td>{{ $key+1 }}</td>
                <td> {{ $bot->name }}</td>
                <td> {{ $bot->designation }}</td>
                <td> {{ $bot->email }}</td>
                <td> <img id="showImage1" src="{{url('public/upload/bot/',$bot->image) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"></td>
                <td>{{Str::limit($bot->detail, 20)}}</td>
                <td>
<a href="{{ route('bot.edit',$bot->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('bot.delete',$bot->id) }}" class="btn btn-danger" id="delete">Delete</a>

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