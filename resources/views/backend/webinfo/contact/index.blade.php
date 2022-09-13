@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
  
    <div class="row">


<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">All Contact Data</h3>
    <a href="{{ route('webinfo.contact.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Contact</a>

  </div>



    <div class="col-md-12">
     <div class="card">


          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>  
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif


         
    

    <table class="table">
          <thead>
            <tr>
              <th scope="col" width="5%">SL </th>
              <th scope="col" width="15%">Title</th>
              <th scope="col" width="15%">Contact Address</th>
              <th scope="col" width="25%">Contact Email</th>
              <th scope="col" width="15%">Contact Phone</th>
              <th scope="col" width="15%">Action</th>
            </tr>
          </thead>
              <tbody>
                      @php($i = 1)
                    @foreach($contacts as $contact)  
                          <tr>
                            <th scope="row"> {{ $i++  }} </th>
                            <td> {{ $contact->title }} </td>
                            <td> {{ $contact->address }} </td>
                            <td> {{ $contact->email }} </td>
                            <td> {{ $contact->phone }} </td>
                            
                            
                            <td> 
                              <a href="{{ route('contact.edit',$contact->id) }}" class="btn btn-info">Edit</a>
                             <a href="{{ route('contact.delete',$contact->id) }}" class="btn btn-danger" id="delete">Delete</a>
                            
                            
                             {{-- <a href="{{ url('contact.edit'.$contact->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('contact.delete'.$contact->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                              </td>  --}}


                          </tr> 
                @endforeach


              </tbody>
        </table>
       
  
       </div>
    </div>

 
  </div>

    </div>
  </section>
  <!-- /.content -->

</div>
</div>

 @endsection
