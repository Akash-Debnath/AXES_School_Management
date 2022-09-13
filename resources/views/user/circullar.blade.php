
@extends('user.body.main')
@section('user')


<!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Notice And Circular</h1>
                        <p>he Rabindra Maitree University was proposed for approval to the Ministry of Education, Government of Bangladesh as Legend Trust University in 2011.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** About **
    =================================================== -->
    <section class="about inner padding-lg">
        <div class="container">
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date</th>
                              <th width="25%">Action</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($content as $key => $data )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> {{ $data->title }}</td>
                                <td> {{ $data->description }}</td>
                                <td> {{ $data->date }}</td>
                              
                                <td>
                                    
                                    <a href="{{ url('public/upload/uploadcontent/'.$data->content) }}" download class="btn btn-danger" >Download</a>

                                </td>

                            </tr>
                            @endforeach

                      </tbody>

                      <tfoot>

                      </tfoot>
                  </table>
                </div>
            </div
            
        </div>
    </section>
    
    
@endsection
