@extends('admin.admin_master')
@section('admin')



    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Issue Item</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('update_issue',['id'=>$issues->id]) }}" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="box-body">
                                                <div class="row">

                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="">User Type</label><small class="req"> *</small>

                                                        <select name="account_type" onchange="getIssueUser(this.value)" name="issue_type" class="form-control ac_type">
                                                            <option value="">Select</option>
                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="1" type="radio" /-->
                                                            <option value="1">Admin</option>
                                                            Admin
                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="2" type="radio" /-->
                                                            <option value="2">Teacher</option>

                                                            Teacher



                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="3" type="radio" /-->
                                                            <option value="3">Accountant</option>

                                                            Accountant



                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="4" type="radio" /-->
                                                            <option value="4">Librarian</option>

                                                            Librarian



                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="6" type="radio" /-->
                                                            <option value="6">Receptionist</option>

                                                            Receptionist



                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="7" type="radio" /-->
                                                            <option value="7">Super Admin</option>

                                                            Super Admin



                                                            <!--input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="8" type="radio" /-->
                                                            <option value="8">rrr</option>

                                                            rrr


                                                        </select>

                                                        <span class="text-danger"></span>

                                                    </div>

                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="exampleInputEmail1">Issue To</label><small class="req"> *</small>

                                                        <select id="issue_to" name="issue_to" class="form-control" >
                                                            <option value="">Select</option>
                                                        </select>
                                                        <span class="text-danger"></span>

                                                    </div>
                                                    <!-- <div class="clearfix"></div> -->
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="exampleInputEmail1">Issue By</label><small class="req"> *</small>

                                                        <select class="form-control " name="issue_by">
                                                            <option value="">Select</option>
                                                            <option value="Super Admin  (9000)">Super Admin  (9000)</option>
                                                        </select>
                                                        <span class="text-danger"></span>

                                                    </div>



                                                    <div class="col-md-4">

                                                        <div class="form-group">
                                                            <h5>Issue Date<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="date" name="issue_date" class="form-control" required="" >
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="exampleInputEmail1">Return Date</label>
                                                        <div class="controls">
                                                            <input type="date" name="return_date" class="form-control" required="" >
                                                        </div>
                                                        <span class="text-danger"></span>
                                                    </div>

                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="exampleInputEmail1">Note</label>
                                                        <textarea name="note" class="form-control" id="note"></textarea>
                                                        <span class="text-danger"></span>
                                                    </div>




                                                    <hr>

                                                    <div class="col-md-12">
                                                        <div class="row">



                                                            <div class="form-group col-sm-4">
                                                                <label for="">Item Category</label><small class="req"> *</small>

                                                                <select id="item_category_id" name="item_category_id" class="form-control">
                                                                    <option value="">Select</option>
                                                                    @foreach($category as $categorys)
                                                                        <option value="{{$categorys->id}}">{{$categorys->item_gategory}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <span class="text-danger"></span>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label for="">Item</label><small class="req"> *</small>

                                                                <select id="item_id" name="item_id" class="form-control" onchange="showDiv('div_avail', this)">
                                                                    <option value="">Select</option>
                                                                    @foreach($item as $items)
                                                                        <option value="{{$items->id}}">{{$items->name}}</option>
                                                                    @endforeach

                                                                </select>
                                                                <span class="text-danger"></span>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">Quantity</label><small class="req"> *</small>
                                                                <input class="form-control" name="quantity">
                                                                <style>
                                                                    #div_avail {
                                                                        display: none;
                                                                    }
                                                                </style>
                                                                <script>
                                                                    function showDiv(divId, element)
                                                                    {
                                                                        document.getElementById(divId).style.display = element.value >= 1 ? 'block' : 'none';
                                                                    }
                                                                </script>
                                                                <div id="div_avail" >
                                                                    <span>Available Quantity : </span>
                                                                    <span id="item_available_quantity">0</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="form-group">

                                        <input type="submit" class="allot-fees btn btn-primary btn-sm pull-right" id="load" value="submit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait..">
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

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>



@endsection
