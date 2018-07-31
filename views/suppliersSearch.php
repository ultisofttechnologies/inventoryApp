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
                                    <h2>Supplier Search</h2>
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
                          <!-- For Search bar -->
                          <form class="form-inline ">
                            <input id="search_name" name="search_name" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button type="button" id="search_button" name="search_button" class="btn btn-success " onclick="search();"><i class="fa fa-search"></i> Search</button>
                          </form>

                          <br><br>
                          <div id="search_message"></div>
                        </div>
                        <!-- End supplier Search body-->
                    </div>
                </div>
            </div>
<br>
            <!-- #END# Supplier Search -->
</div>