@extends('admin.admin_master')
@section('admin')


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Item Stock</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{route('update_item_stock',['id'=>$stock->id])}}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <h5>Item Category<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select</option>
                                                        @foreach($categorys as $itemcategory )
                                                            <option value="{{ $itemcategory->id }}">{{ $itemcategory->item_category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> <!-- // end form group -->


                                        </div> <!-- End col-md-5 -->


                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <h5>Item<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="item_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select</option>
                                                        @foreach($items as $item )
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> <!-- // end form group -->


                                        </div> <!-- End col-md-5 -->


                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <h5>Supplier<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="supplier_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select</option>
                                                        @foreach($suppliers as $supplier )
                                                            <option value="{{ $supplier->id }}">{{ $supplier->item_supplier }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> <!-- // end form group -->


                                        </div> <!-- End col-md-5 -->




                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <h5>Store<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="store_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select</option>
                                                        @foreach($stores as $store )
                                                            <option value="{{ $store->id }}">{{ $store->item_store }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> <!-- // end form group -->


                                        </div> <!-- End col-md-5 -->

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Quantity</label><small class="req"> *</small> <span id="item_unit"></span>
                                                <div class="">
                                                    <span class="miplus">
                                                        <select class="form-control" name="symbol">
                                                            <option value="+">+</option>
                                                            <option value="-">-</option>
                                                        </select>
                                                    </span> </div>

                                                <span class="text-danger"></span>
                                            </div>

                                        </div> <!-- End col-md-5 -->


                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <h5>Purchase Price<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="purchase_price" class="form-control" >
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div><!-- End col-md-5 -->
                                            </div>
                                        </div> <!-- End col-md-5 -->

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Date</label>
                                                <input name="date" type="date" class="form-control date" value="" >
                                                <span class="text-danger"></span>
                                            </div>
                                        </div> <!
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Attach Document</label>
                                                <input id="date" name="attachment" placeholder="" type="file" class="form-control date" value="" readonly="readonly">
                                                <span class="text-danger"></span>
                                            </div>
                                        </div> <!-- End col-md-5 -->



                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <h5>Description<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="description" class="form-control" >
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div><!-- End col-md-5 -->
                                            </div> <!-- end Row -->
                                        </div> <!-- End col-md-5 -->


                                        <div class="col-md-5">

                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                            </div>

                                        </div> <!-- End col-md-5 -->
                                    </div>

                                </form>

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
