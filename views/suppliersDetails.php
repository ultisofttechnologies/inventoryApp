<div>
    <div class="block-header">
        <h2>SUPPLIERS</h2>
    </div>

    <br>
         <!-- Supplier Details -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Supplier Details</h2>
									
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Add</a></li>
                                        <li><a href="javascript:void(0);">Update</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
<!-- Start add user -->
                            <div class="dropdown" style="">
                                <button class="btn btn-lg btn-block dropdown-toggle " data-toggle="dropdown">
                                    <span style="float: left; font-weight: bolder;"> Add Supplier</span>
                                    <span style="float: right;" ><i class="fa fa-plus"></i></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <!-- dropdown menu links -->
                                    <li>
                                        <!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="card">
                        <div class="body">
						
                            
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="contact" class="form-control" placeholder="Contact">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="account" class="form-control" placeholder="Acount Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <input type="button" value="ADD" id="add" class="btn btn-primary btn-lg m-l-15 waves-effect" onclick="insert();">
                                    
									<div id="message"></div>
									
									</div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Inline Layout -->
                                    </li>

                                </ul>
                            </div>
<!-- End Add supplier -->

<br><br><br>

<!-- Start update -->
                            <div class="dropdown" style="">
                                <button class="btn btn-lg btn-block dropdown-toggle " data-toggle="dropdown">
                                    <span style="float: left; font-weight: bolder;"> Update Supplier</span>
                                    <span style="float: right;" ><i class="fa fa-plus"></i></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <!-- dropdown menu links -->
                                    <li>
                                    <!-- Inline Layout -->
                                    <div class="container-fluid">
                                      <br><br>
                                      <div class="row clearfix">
                                      <div class="col-lg-12 col-md-12 col-lg-12 col-xs-12">
                                          <div class="form-group">
                                              <div class="form-line">
											  <form id="search" name="search">
                                                  <input placeholder="Full name" name="search_text" id="update_name" class="form-control" onkeyup="findmatch();">
												
												</form>
												<br>
												
											  </div>
                                          </div>
										   <div id="results"></div>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									  
                                          
                                      
									  </div>
									  <div id="update_message"></div>	
                                    </div>
								
                            </div>
							
                                <!-- #END# Inline Layout -->
                                    </li>

                                </ul>
                            </div>
<!-- End  update -->

<!-- Start Delete -->

<br><br><br>

<!-- Start add user -->
                            <div class="dropdown" style="">
                                <button class="btn btn-lg btn-block dropdown-toggle " data-toggle="dropdown">
                                    <span style="float: left; font-weight: bolder;"> Delete Supplier</span>
                                    <span style="float: right;" ><i class="fa fa-plus"></i></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <!-- dropdown menu links -->
                                    <li>
                                        <!-- Inline Layout -->
                                         <div class="container-fluid">
									<br><br>
                                      <div class="row clearfix">
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                          <div class="form-group">
                                              <div class="form-line">
                                                  <input placeholder="Full name" id="delete_name" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                          <input type="button" value="Generate" id="deletion" name="deletion" class="btn btn-primary btn-lg m-l-15 waves-effect" onclick="deletion();">
                                      
									  </div>
									  	
                                    </div>
									<div id="delete_message"></div>
                                
                            </div>
                                        <!-- #END# Inline Layout -->
                                    </li>

                                </ul>
                            </div>
<!-- End Delete -->
<br><br><br>



                        </div>
                        <!-- End supplier details body-->
                    </div>
                </div>
            </div>
<br>
            <!-- #END# Supplier Details -->
</div>
