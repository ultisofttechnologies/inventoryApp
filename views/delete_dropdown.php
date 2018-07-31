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
										
										include '../views/supplier_delete_table.php';
									  
									  
									  ?>	
									
                                
                            </div>