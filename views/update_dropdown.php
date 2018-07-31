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
                                      
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									  
                                          
                                      
									  </div>
									  <?php 
										$name= $_SESSION['search_name'];
										
										$query = "SELECT * FROM suppliers
												  WHERE name='$name'";		  
										$query = mysqli_query($con,$query);
										
										$suppId=$name=$contact=$email=$account="";
										
										while($row=mysqli_fetch_array($query)){
										$suppId = $row['sId'];
										$name = $row['name'];
										$contact = $row['contact'];
										$email = $row['email'];
										$account = $row['account'];
										}
										
										include '../views/supplier_update_table.php';
									  
									  
									  ?>	
                                    </div>
								
                            </div>
							
                                <!-- #END# Inline Layout -->
                                    </li>

                                </ul>
                            </div>