<!DOCTYPE html>
<html>
<body>

<h1>Show Checkboxes</h1>

<form action="/action_page.php">
  <table class="table table-hover ">
                                <thead>
                                <tr><th>Action</th>
                                <th>Reminder Type</th>
                                <th>Days</th>
                                </tr></thead>
                                <tbody>

                                    
                                        <tr>
                                            <td width="15%">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="isactive_1" value="1" autocomplete="off"> Active                                                </label>

                                            </td>
                                            <td width="15%">
                                                <input type="hidden" name="ids[]" value="1">
                                                Before                                            </td>
                                            <td width="20%">
                                                <input type="number" name="days1" value="2" class="form-control" autocomplete="off">
                                            </td>
                                        </tr>


                                        
                                        <tr>
                                            <td width="15%">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="isactive_2" value="1"> Active                                                </label>

                                            </td>
                                            <td width="15%">
                                                <input type="hidden" name="ids[]" value="2">
                                                Before                                            </td>
                                            <td width="20%">
                                                <input type="number" name="days2" value="5" class="form-control">
                                            </td>
                                        </tr>


                                        
                                        <tr>
                                            <td width="15%">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="isactive_3" value="1"> Active                                                </label>

                                            </td>
                                            <td width="15%">
                                                <input type="hidden" name="ids[]" value="3">
                                                After                                            </td>
                                            <td width="20%">
                                                <input type="number" name="days3" value="2" class="form-control">
                                            </td>
                                        </tr>


                                        
                                        <tr>
                                            <td width="15%">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="isactive_4" value="1"> Active                                                </label>

                                            </td>
                                            <td width="15%">
                                                <input type="hidden" name="ids[]" value="4">
                                                After                                            </td>
                                            <td width="20%">
                                                <input type="number" name="days4" value="5" class="form-control" autocomplete="off">
                                            </td>
                                        </tr>


                                                                        </tbody>
                            </table>
</form>

</body>
</html>
