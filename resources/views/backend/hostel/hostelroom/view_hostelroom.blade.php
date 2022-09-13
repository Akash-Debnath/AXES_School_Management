@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">         		 
            
        <section class="content">
            <div class="row">                                            
                <div class="col-12">
                        
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Hostel Room List</h3>
                          <a href="{{ route('hostelroom.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Hostel Room</a>			                         
                        </div>
                        				
                        	<div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="5%">SL</th>  
                                            	<th>Room Number / Name</th> 
                                            	<th>Hostel Name</th>
                                            	<th>Room Type</th>
                                            	<th>Number Of Bed </th>
                                            	<th>Cost Per Bed</th>
                                                <th>Description</th> 
                                            	<th width="25%">Action</th>
                                            	 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allData as $key => $hostelroom )
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td> {{ $hostelroom->room_no }}</td>
                                                    <td> {{ $hostelroom->hostel_name }}</td>
                                                    <td> {{ $hostelroom->room_type }}</td>
                                                    <td> {{ $hostelroom->no_of_bed }}</td>
                                                    <td> {{ $hostelroom->cost_per_bed}}</td>
                                                    <td> {{ $hostelroom->description }}</td>

                                                    				 

                                                    <td>
                                                        <a href="{{ route('hostelroom.edit',$hostelroom->id) }}" class="btn btn-info">Edit</a>
                                                        <a href="{{ route('hostelroom.delete',$hostelroom->id) }}" class="btn btn-danger" id="delete">Delete</a>                                                    
                                                    </td>
                                                     				 
                                                </tr>
                                            @endforeach
                                            							 
                                        </tbody>                                            					
                                    </table>
                                </div>
                            </div>
                                    			
                    </div>                        
                        			       
                </div>                       			
            </div>            		
        </section>  

    </div>
</div>


@endsection
