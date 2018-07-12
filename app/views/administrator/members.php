                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
 

                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Responsive tables</h3>
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                   
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i=0;$i<=100;$i++): ?>
                                                    <tr>
                                                        <td>Mark Devin Denosta</td>
                                                        <td>dmarkdevin@gmail.com</td>
                                                      
                                                        <td>
                                                            <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span> Update</button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span> Remove</button>
                                                        </td>
                                                    </tr>
                                                <?php endfor;?>

                                            </tbody>
                                        </table>
                                    </div>


                          
                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->



 