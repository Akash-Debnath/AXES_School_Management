@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Session Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-language"></i> Language List</h3>

                                        <div class="box-tools pull-right">
                                            <div class="box-tools pull-right">
                                                <a href="https://www.bdsoft.org/admin/language/create" class="btn btn-primary btn-sm" data-placement="left" data-toggle="tooltip" title="Add" >
                                                    <i class="fa fa-plus"></i> Add                                </a>
                                            </div>
                                        </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="alert alert-warning">
                                            To change language key phrases, go your language directory e.g. for English language go edit file  /application/language/English/app_files/system_lang.php
                                        </div>
                                        <div class="table-responsive mailbox-messages">
                                            <table class="table table-hover table-striped">

                                                <tr>
                                                    <th>#</th>
                                                    <th>Language</th>

                                                    <th>Short Code</th>
                                                    <th>Country Code</th>
                                                    <th>Status</th>
                                                    <th>Active</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                <tbody id="result_data">
                                                <tr>
                                                    <td>1.</td>
                                                    <td class="mailbox-name"> Afrikaans <span class="flag-icon flag-icon-af"></span></td>
                                                    <td>af</td>
                                                    <td>af</td>
                                                    <td class="mailbox-name" id="active7"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student7" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="7" value="checked"  />
                                                            <label for="student7" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td class="mailbox-name"> Albanian <span class="flag-icon flag-icon-al"></span></td>
                                                    <td>sq</td>
                                                    <td>al</td>
                                                    <td class="mailbox-name" id="active2"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student2" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="2" value="checked"  />
                                                            <label for="student2" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td class="mailbox-name"> Amharic <span class="flag-icon flag-icon-am"></span></td>
                                                    <td>am</td>
                                                    <td>am</td>
                                                    <td class="mailbox-name" id="active3"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student3" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="3" value="checked"  />
                                                            <label for="student3" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td class="mailbox-name"> Arabic <span class="flag-icon flag-icon-sa"></span></td>
                                                    <td>ar</td>
                                                    <td>sa</td>
                                                    <td class="mailbox-name" id="active5"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student5" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="5" value="checked"  />
                                                            <label for="student5" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td class="mailbox-name"> Azerbaijan <span class="flag-icon flag-icon-az"></span></td>
                                                    <td>az</td>
                                                    <td>az</td>
                                                    <td class="mailbox-name" id="active1"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student1" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="1" value="checked"  />
                                                            <label for="student1" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td class="mailbox-name"> Basque <span class="flag-icon flag-icon-es"></span></td>
                                                    <td>eu</td>
                                                    <td>es</td>
                                                    <td class="mailbox-name" id="active8"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student8" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="8" value="checked"  />
                                                            <label for="student8" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td class="mailbox-name"> Bengali <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>bn</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active11"></td>
                                                    <td>
                                                        <input type="radio" value="11" name="defoult" onclick="defoult(this.value)"  >

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student11" name="someSwitchOption001" type="checkbox"
                                                                   data-role='1'                               class="chk" data-rowid="11" value="checked" checked='checked' />
                                                            <label for="student11" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td class="mailbox-name"> Bosnian <span class="flag-icon flag-icon-bs"></span></td>
                                                    <td>bs</td>
                                                    <td>bs</td>
                                                    <td class="mailbox-name" id="active13"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student13" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="13" value="checked"  />
                                                            <label for="student13" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td class="mailbox-name"> Catalan <span class="flag-icon flag-icon-ca"></span></td>
                                                    <td>ca</td>
                                                    <td>ca</td>
                                                    <td class="mailbox-name" id="active34"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student34" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="34" value="checked"  />
                                                            <label for="student34" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td class="mailbox-name"> Cebuano <span class="flag-icon flag-icon-ph"></span></td>
                                                    <td>ceb</td>
                                                    <td>ph</td>
                                                    <td class="mailbox-name" id="active62"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student62" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="62" value="checked"  />
                                                            <label for="student62" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>11.</td>
                                                    <td class="mailbox-name"> Chinese <span class="flag-icon flag-icon-cn"></span></td>
                                                    <td>zh</td>
                                                    <td>cn</td>
                                                    <td class="mailbox-name" id="active36"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student36" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="36" value="checked"  />
                                                            <label for="student36" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>12.</td>
                                                    <td class="mailbox-name"> Czech <span class="flag-icon flag-icon-cz"></span></td>
                                                    <td>cs</td>
                                                    <td>cz</td>
                                                    <td class="mailbox-name" id="active84"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student84" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="84" value="checked"  />
                                                            <label for="student84" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>13.</td>
                                                    <td class="mailbox-name"> Danish <span class="flag-icon flag-icon-dk"></span></td>
                                                    <td>da</td>
                                                    <td>dk</td>
                                                    <td class="mailbox-name" id="active24"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student24" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="24" value="checked"  />
                                                            <label for="student24" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>14.</td>
                                                    <td class="mailbox-name"> Dutch <span class="flag-icon flag-icon-nl"></span></td>
                                                    <td>nl</td>
                                                    <td>nl</td>
                                                    <td class="mailbox-name" id="active19"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student19" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="19" value="checked"  />
                                                            <label for="student19" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>15.</td>
                                                    <td class="mailbox-name"> English <span class="flag-icon flag-icon-us"></span></td>
                                                    <td>en</td>
                                                    <td>us</td>
                                                    <td class="mailbox-name" id="active4">                <span class="label bg-green">Active</span>
                                                    </td>
                                                    <td>
                                                        <input type="radio" value="4" name="defoult" onclick="defoult(this.value)"  checked>

                                                    </td>
                                                    <td class="mailbox-date">

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>16.</td>
                                                    <td class="mailbox-name"> Esperanto <span class="flag-icon flag-icon-br"></span></td>
                                                    <td>eo</td>
                                                    <td>br</td>
                                                    <td class="mailbox-name" id="active88"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student88" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="88" value="checked"  />
                                                            <label for="student88" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>17.</td>
                                                    <td class="mailbox-name"> Estonian <span class="flag-icon flag-icon-et"></span></td>
                                                    <td>et</td>
                                                    <td>et</td>
                                                    <td class="mailbox-name" id="active87"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student87" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="87" value="checked"  />
                                                            <label for="student87" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>18.</td>
                                                    <td class="mailbox-name"> Finnish <span class="flag-icon flag-icon-fi"></span></td>
                                                    <td>fi</td>
                                                    <td>fi</td>
                                                    <td class="mailbox-name" id="active80"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student80" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="80" value="checked"  />
                                                            <label for="student80" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>19.</td>
                                                    <td class="mailbox-name"> French <span class="flag-icon flag-icon-fr"></span></td>
                                                    <td>fr</td>
                                                    <td>fr</td>
                                                    <td class="mailbox-name" id="active81"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student81" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="81" value="checked"  />
                                                            <label for="student81" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>20.</td>
                                                    <td class="mailbox-name"> Galician <span class="flag-icon flag-icon-gl"></span></td>
                                                    <td>gl</td>
                                                    <td>gl</td>
                                                    <td class="mailbox-name" id="active18"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student18" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="18" value="checked"  />
                                                            <label for="student18" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>21.</td>
                                                    <td class="mailbox-name"> Georgian <span class="flag-icon flag-icon-ge"></span></td>
                                                    <td>ka</td>
                                                    <td>ge</td>
                                                    <td class="mailbox-name" id="active22"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student22" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="22" value="checked"  />
                                                            <label for="student22" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>22.</td>
                                                    <td class="mailbox-name"> German <span class="flag-icon flag-icon-de"></span></td>
                                                    <td>de</td>
                                                    <td>de</td>
                                                    <td class="mailbox-name" id="active52"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student52" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="52" value="checked"  />
                                                            <label for="student52" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>23.</td>
                                                    <td class="mailbox-name"> Greek <span class="flag-icon flag-icon-gr"></span></td>
                                                    <td>el</td>
                                                    <td>gr</td>
                                                    <td class="mailbox-name" id="active21"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student21" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="21" value="checked"  />
                                                            <label for="student21" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>24.</td>
                                                    <td class="mailbox-name"> Gujarati <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>gu</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active23"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student23" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="23" value="checked"  />
                                                            <label for="student23" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>25.</td>
                                                    <td class="mailbox-name"> Haitian <span class="flag-icon flag-icon-ht"></span></td>
                                                    <td>ht</td>
                                                    <td>ht</td>
                                                    <td class="mailbox-name" id="active17"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student17" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="17" value="checked"  />
                                                            <label for="student17" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>26.</td>
                                                    <td class="mailbox-name"> Hebrew <span class="flag-icon flag-icon-il"></span></td>
                                                    <td>he</td>
                                                    <td>il</td>
                                                    <td class="mailbox-name" id="active25"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student25" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="25" value="checked"  />
                                                            <label for="student25" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>27.</td>
                                                    <td class="mailbox-name"> Hindi <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>hi</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active82"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student82" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="82" value="checked"  />
                                                            <label for="student82" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>28.</td>
                                                    <td class="mailbox-name"> Hungarian <span class="flag-icon flag-icon-hu"></span></td>
                                                    <td>hu</td>
                                                    <td>hu</td>
                                                    <td class="mailbox-name" id="active15"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student15" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="15" value="checked"  />
                                                            <label for="student15" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>29.</td>
                                                    <td class="mailbox-name"> Icelandic <span class="flag-icon flag-icon-is"></span></td>
                                                    <td>is</td>
                                                    <td>is</td>
                                                    <td class="mailbox-name" id="active30"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student30" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="30" value="checked"  />
                                                            <label for="student30" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>30.</td>
                                                    <td class="mailbox-name"> Indonesian <span class="flag-icon flag-icon-id"></span></td>
                                                    <td>id</td>
                                                    <td>id</td>
                                                    <td class="mailbox-name" id="active27"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student27" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="27" value="checked"  />
                                                            <label for="student27" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>31.</td>
                                                    <td class="mailbox-name"> Irish <span class="flag-icon flag-icon-ga"></span></td>
                                                    <td>ga</td>
                                                    <td>ga</td>
                                                    <td class="mailbox-name" id="active28"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student28" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="28" value="checked"  />
                                                            <label for="student28" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>32.</td>
                                                    <td class="mailbox-name"> Italian <span class="flag-icon flag-icon-it"></span></td>
                                                    <td>it</td>
                                                    <td>it</td>
                                                    <td class="mailbox-name" id="active29"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student29" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="29" value="checked"  />
                                                            <label for="student29" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>33.</td>
                                                    <td class="mailbox-name"> Japanese <span class="flag-icon flag-icon-jp"></span></td>
                                                    <td>ja</td>
                                                    <td>jp</td>
                                                    <td class="mailbox-name" id="active90"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student90" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="90" value="checked"  />
                                                            <label for="student90" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>34.</td>
                                                    <td class="mailbox-name"> Javanese <span class="flag-icon flag-icon-id"></span></td>
                                                    <td>jv</td>
                                                    <td>id</td>
                                                    <td class="mailbox-name" id="active89"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student89" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="89" value="checked"  />
                                                            <label for="student89" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>35.</td>
                                                    <td class="mailbox-name"> Kannada <span class="flag-icon flag-icon-kn"></span></td>
                                                    <td>kn</td>
                                                    <td>kn</td>
                                                    <td class="mailbox-name" id="active33"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student33" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="33" value="checked"  />
                                                            <label for="student33" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>36.</td>
                                                    <td class="mailbox-name"> Korean <span class="flag-icon flag-icon-kr"></span></td>
                                                    <td>ko</td>
                                                    <td>kr</td>
                                                    <td class="mailbox-name" id="active37"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student37" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="37" value="checked"  />
                                                            <label for="student37" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>37.</td>
                                                    <td class="mailbox-name"> Kurdish <span class="flag-icon flag-icon-iq"></span></td>
                                                    <td>ku</td>
                                                    <td>iq</td>
                                                    <td class="mailbox-name" id="active92"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student92" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="92" value="checked"  />
                                                            <label for="student92" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>38.</td>
                                                    <td class="mailbox-name"> Lao <span class="flag-icon flag-icon-la"></span></td>
                                                    <td>lo</td>
                                                    <td>la</td>
                                                    <td class="mailbox-name" id="active93"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student93" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="93" value="checked"  />
                                                            <label for="student93" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>39.</td>
                                                    <td class="mailbox-name"> Latin <span class="flag-icon flag-icon-it"></span></td>
                                                    <td>la</td>
                                                    <td>it</td>
                                                    <td class="mailbox-name" id="active39"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student39" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="39" value="checked"  />
                                                            <label for="student39" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>40.</td>
                                                    <td class="mailbox-name"> Latvian <span class="flag-icon flag-icon-lv"></span></td>
                                                    <td>lv</td>
                                                    <td>lv</td>
                                                    <td class="mailbox-name" id="active40"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student40" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="40" value="checked"  />
                                                            <label for="student40" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>41.</td>
                                                    <td class="mailbox-name"> Lithuanian <span class="flag-icon flag-icon-lt"></span></td>
                                                    <td>lt</td>
                                                    <td>lt</td>
                                                    <td class="mailbox-name" id="active41"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student41" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="41" value="checked"  />
                                                            <label for="student41" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>42.</td>
                                                    <td class="mailbox-name"> Macedonian <span class="flag-icon flag-icon-mk"></span></td>
                                                    <td>mk</td>
                                                    <td>mk</td>
                                                    <td class="mailbox-name" id="active47"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student47" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="47" value="checked"  />
                                                            <label for="student47" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>43.</td>
                                                    <td class="mailbox-name"> Malagasy <span class="flag-icon flag-icon-mg"></span></td>
                                                    <td>mg</td>
                                                    <td>mg</td>
                                                    <td class="mailbox-name" id="active43"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student43" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="43" value="checked"  />
                                                            <label for="student43" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>44.</td>
                                                    <td class="mailbox-name"> Malay <span class="flag-icon flag-icon-ms"></span></td>
                                                    <td>ms</td>
                                                    <td>ms</td>
                                                    <td class="mailbox-name" id="active44"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student44" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="44" value="checked"  />
                                                            <label for="student44" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>45.</td>
                                                    <td class="mailbox-name"> Malayalam <span class="flag-icon flag-icon-ml"></span></td>
                                                    <td>ml</td>
                                                    <td>ml</td>
                                                    <td class="mailbox-name" id="active45"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student45" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="45" value="checked"  />
                                                            <label for="student45" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>46.</td>
                                                    <td class="mailbox-name"> Maltese <span class="flag-icon flag-icon-mt"></span></td>
                                                    <td>mt</td>
                                                    <td>mt</td>
                                                    <td class="mailbox-name" id="active46"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student46" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="46" value="checked"  />
                                                            <label for="student46" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>47.</td>
                                                    <td class="mailbox-name"> Maori <span class="flag-icon flag-icon-nz"></span></td>
                                                    <td>mi</td>
                                                    <td>nz</td>
                                                    <td class="mailbox-name" id="active48"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student48" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="48" value="checked"  />
                                                            <label for="student48" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>48.</td>
                                                    <td class="mailbox-name"> Marathi <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>mr</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active49"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student49" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="49" value="checked"  />
                                                            <label for="student49" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>49.</td>
                                                    <td class="mailbox-name"> Mongolian <span class="flag-icon flag-icon-mn"></span></td>
                                                    <td>mn</td>
                                                    <td>mn</td>
                                                    <td class="mailbox-name" id="active51"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student51" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="51" value="checked"  />
                                                            <label for="student51" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>50.</td>
                                                    <td class="mailbox-name"> Nepali <span class="flag-icon flag-icon-ne"></span></td>
                                                    <td>ne</td>
                                                    <td>ne</td>
                                                    <td class="mailbox-name" id="active53"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student53" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="53" value="checked"  />
                                                            <label for="student53" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>51.</td>
                                                    <td class="mailbox-name"> Norwegian <span class="flag-icon flag-icon-no"></span></td>
                                                    <td>no</td>
                                                    <td>no</td>
                                                    <td class="mailbox-name" id="active54"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student54" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="54" value="checked"  />
                                                            <label for="student54" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>52.</td>
                                                    <td class="mailbox-name"> Persian <span class="flag-icon flag-icon-ir"></span></td>
                                                    <td>fa</td>
                                                    <td>ir</td>
                                                    <td class="mailbox-name" id="active57"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student57" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="57" value="checked"  />
                                                            <label for="student57" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>53.</td>
                                                    <td class="mailbox-name"> Polish <span class="flag-icon flag-icon-pl"></span></td>
                                                    <td>pl</td>
                                                    <td>pl</td>
                                                    <td class="mailbox-name" id="active91"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student91" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="91" value="checked"  />
                                                            <label for="student91" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>54.</td>
                                                    <td class="mailbox-name"> Portuguese <span class="flag-icon flag-icon-pt"></span></td>
                                                    <td>pt</td>
                                                    <td>pt</td>
                                                    <td class="mailbox-name" id="active59"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student59" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="59" value="checked"  />
                                                            <label for="student59" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>55.</td>
                                                    <td class="mailbox-name"> Punjabi <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>pa</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active55"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student55" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="55" value="checked"  />
                                                            <label for="student55" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>56.</td>
                                                    <td class="mailbox-name"> Romanian <span class="flag-icon flag-icon-ro"></span></td>
                                                    <td>ro</td>
                                                    <td>ro</td>
                                                    <td class="mailbox-name" id="active60"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student60" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="60" value="checked"  />
                                                            <label for="student60" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>57.</td>
                                                    <td class="mailbox-name"> Russian <span class="flag-icon flag-icon-ru"></span></td>
                                                    <td>ru</td>
                                                    <td>ru</td>
                                                    <td class="mailbox-name" id="active61"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student61" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="61" value="checked"  />
                                                            <label for="student61" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>58.</td>
                                                    <td class="mailbox-name"> Scottish <span class="flag-icon flag-icon-gd"></span></td>
                                                    <td>gd</td>
                                                    <td>gd</td>
                                                    <td class="mailbox-name" id="active86"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student86" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="86" value="checked"  />
                                                            <label for="student86" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>59.</td>
                                                    <td class="mailbox-name"> Sinhala <span class="flag-icon flag-icon-lk "></span></td>
                                                    <td>si</td>
                                                    <td>lk </td>
                                                    <td class="mailbox-name" id="active64"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student64" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="64" value="checked"  />
                                                            <label for="student64" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>60.</td>
                                                    <td class="mailbox-name"> Slovakian <span class="flag-icon flag-icon-sk"></span></td>
                                                    <td>sk</td>
                                                    <td>sk</td>
                                                    <td class="mailbox-name" id="active65"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student65" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="65" value="checked"  />
                                                            <label for="student65" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>61.</td>
                                                    <td class="mailbox-name"> Slovenian <span class="flag-icon flag-icon-sl"></span></td>
                                                    <td>sl</td>
                                                    <td>sl</td>
                                                    <td class="mailbox-name" id="active66"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student66" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="66" value="checked"  />
                                                            <label for="student66" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>62.</td>
                                                    <td class="mailbox-name"> Spanish <span class="flag-icon flag-icon-es"></span></td>
                                                    <td>es</td>
                                                    <td>es</td>
                                                    <td class="mailbox-name" id="active31"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student31" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="31" value="checked"  />
                                                            <label for="student31" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>63.</td>
                                                    <td class="mailbox-name"> Sundanese <span class="flag-icon flag-icon-sd"></span></td>
                                                    <td>su</td>
                                                    <td>sd</td>
                                                    <td class="mailbox-name" id="active68"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student68" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="68" value="checked"  />
                                                            <label for="student68" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>64.</td>
                                                    <td class="mailbox-name"> Swahili <span class="flag-icon flag-icon-ke"></span></td>
                                                    <td>sw</td>
                                                    <td>ke</td>
                                                    <td class="mailbox-name" id="active67"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student67" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="67" value="checked"  />
                                                            <label for="student67" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>65.</td>
                                                    <td class="mailbox-name"> Swedish <span class="flag-icon flag-icon-sv"></span></td>
                                                    <td>sv</td>
                                                    <td>sv</td>
                                                    <td class="mailbox-name" id="active85"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student85" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="85" value="checked"  />
                                                            <label for="student85" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>66.</td>
                                                    <td class="mailbox-name"> Tagalog <span class="flag-icon flag-icon-tl"></span></td>
                                                    <td>tl</td>
                                                    <td>tl</td>
                                                    <td class="mailbox-name" id="active71"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student71" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="71" value="checked"  />
                                                            <label for="student71" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>67.</td>
                                                    <td class="mailbox-name"> Tamil <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>ta</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active72"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student72" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="72" value="checked"  />
                                                            <label for="student72" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>68.</td>
                                                    <td class="mailbox-name"> Telugu <span class="flag-icon flag-icon-in"></span></td>
                                                    <td>te</td>
                                                    <td>in</td>
                                                    <td class="mailbox-name" id="active74"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student74" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="74" value="checked"  />
                                                            <label for="student74" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>69.</td>
                                                    <td class="mailbox-name"> Thai <span class="flag-icon flag-icon-th"></span></td>
                                                    <td>th</td>
                                                    <td>th</td>
                                                    <td class="mailbox-name" id="active70"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student70" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="70" value="checked"  />
                                                            <label for="student70" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>70.</td>
                                                    <td class="mailbox-name"> Turkish <span class="flag-icon flag-icon-tr"></span></td>
                                                    <td>tr</td>
                                                    <td>tr</td>
                                                    <td class="mailbox-name" id="active75"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student75" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="75" value="checked"  />
                                                            <label for="student75" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>71.</td>
                                                    <td class="mailbox-name"> Urdu <span class="flag-icon flag-icon-pk"></span></td>
                                                    <td>ur</td>
                                                    <td>pk</td>
                                                    <td class="mailbox-name" id="active79"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student79" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="79" value="checked"  />
                                                            <label for="student79" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>72.</td>
                                                    <td class="mailbox-name"> Uzbek <span class="flag-icon flag-icon-uz"></span></td>
                                                    <td>uz</td>
                                                    <td>uz</td>
                                                    <td class="mailbox-name" id="active77"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student77" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="77" value="checked"  />
                                                            <label for="student77" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>73.</td>
                                                    <td class="mailbox-name"> Vietnamese <span class="flag-icon flag-icon-vi"></span></td>
                                                    <td>vi</td>
                                                    <td>vi</td>
                                                    <td class="mailbox-name" id="active16"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student16" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="16" value="checked"  />
                                                            <label for="student16" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>74.</td>
                                                    <td class="mailbox-name"> Welsh <span class="flag-icon flag-icon-cy"></span></td>
                                                    <td>cy</td>
                                                    <td>cy</td>
                                                    <td class="mailbox-name" id="active14"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student14" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="14" value="checked"  />
                                                            <label for="student14" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>75.</td>
                                                    <td class="mailbox-name"> Xhosa <span class="flag-icon flag-icon-ls"></span></td>
                                                    <td>xh</td>
                                                    <td>ls</td>
                                                    <td class="mailbox-name" id="active38"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student38" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="38" value="checked"  />
                                                            <label for="student38" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>76.</td>
                                                    <td class="mailbox-name"> Yiddish <span class="flag-icon flag-icon-il"></span></td>
                                                    <td>yi</td>
                                                    <td>il</td>
                                                    <td class="mailbox-name" id="active26"></td>
                                                    <td>

                                                    </td>
                                                    <td class="mailbox-date">
                                                        <div class="material-switch pull-right">

                                                            <input id="student26" name="someSwitchOption001" type="checkbox"
                                                                   data-role='2'                               class="chk" data-rowid="26" value="checked"  />
                                                            <label for="student26" class="label-success"></label>
                                                        </div>

                                                    </td>

                                                </tr>
                                                </tbody>
                                            </table><!-- /.table -->
                                        </div><!-- /.mail-box-messages -->
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <div class="mailbox-controls">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

