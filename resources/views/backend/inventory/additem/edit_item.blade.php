@extends('admin.admin_master')
@section('admin')


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Item</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('upsate_item',['id'=>$item->id]) }}">
                                    @csrf
                                    <div class="row">

                                        <div class="box-body">

                                            <div class="form-group">
                                                <label for="">Item</label><small class="req"> *</small>
                                                <input autofocus="" id="name" name="name" placeholder="" type="text" class="form-control" value="" autocomplete="off">
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Item Category</label><small class="req"> *</small>
                                                <select id="item_category_id" name="item_category" class="form-control">
                                                    <option value="">select</option>
                                                    @foreach($allData as $category)
                                                        <option value="{{$category->id}}">{{$category->item_category}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Unit</label><small class="req"> *</small>
                                                <input autofocus="" id="unit" name="unit" placeholder="" type="text" class="form-control" value="">
                                                <span class="text-danger"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea class="form-control" id="description" name="description" placeholder="" rows="3"></textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit"  class="btn btn-info pull-left" value="save">
                                            </div>
                                        </div><!-- /.box-body -->




                                    </div><!-- End col-md-5 -->
                                </form>
                            </div> <!-- end Row -->

                            {{-- <div class="text-xs-right">
                                         <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                     </div>
                              --}}

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
        </div>
        <!-- /.box -->

        </section>





    </div>
    </div>





@endsection
