

<table class="table table-hover table-bordered">
                            <thead>
                              <tr>
                                <th scope="col col-xs-3">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Products</th>
                                <th scope="col">Contact</th>
								<th scope="col">Email</th>
								<th scope="col">Account</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><?php echo $name; ?></td>
                                <td>Alvaro</td>
                                <td><?php echo $contact; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $account; ?></td>
                                <td style="word-spacing: 30px; ">
								
                                  <button type="button" name="supp_edit" id="supp_edit" class="btn btn-primary" onclick="edit_dropdown();"><i class="fa fa-edit"></i></button>
								  <button type="button" name="supp_delete" id="supp_delete" class="btn btn-danger" onclick="delete_dropdown();"><i class="fa fa-trash"></i></button>
                                  
                                </td>
                              </tr>
                              
                               
                            </tbody>
                          </table>
						  <div id="drop_edit_message"></div>
						  <div id="drop_delete_message"></div>
						  