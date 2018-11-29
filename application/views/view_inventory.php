<<<<<<< HEAD
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>index.php/home/index">Home</a>
							</li>
                            
								
								<li class="active">Inventory</li>
							

							
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="row">
									<div class="col-xs-12">
                                     <br></br>
                                   <a href="<?php echo base_url(); ?>index.php/Home/addProduct" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
                                   <form class="form-inline" role="form" action="<?php echo base_url(); ?>home/searchInventory" method="post">
       <div class="form-group">
           <input type="text" class="form-field-1" name="search" placeholder="Search...">
       </div>
<button type="submit" class="btn btn-primary" name="submit" ><span class="glyphicon glyphicon-search"> Search</button>
   </form>
   <br/>
                                           
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													
													<th>Barcode</th>
													<th>Category</th>
                                                    <th>Brand</th>
                                                    <th>Type</th>
                                                    <th>Unit</th>
                                                    <th>Stock </th>
                                                    <th>Price</th>
                                                    
													<th class="hidden-480">Action</th>

													</th>
												</tr>
											</thead>
<script>
	function jsDelete(pk){
		
		var confirm = window.confirm("Are you sure you want to delete this record?");
		if (confirm) {
			window.location = "<?php echo base_url() ?>home/deleteProduct/" +pk;
		}
	}
</script>
											<tbody>
													<?php foreach($inventorys as $inventory) { ?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													

													<td>
													<a href="#"><?php echo $inventory['Barcode'] ?></a>
													</td>
													<td><?php echo $inventory['Category'] ?></td>
													<td><?php echo $inventory['Brand'] ?></td>
													<td><?php echo $inventory['Type'] ?></td>
                                                    <td><?php echo $inventory['Unit'] ?></td>
                                                    <td><?php echo $inventory['Stock'] ?></td>
                                                    <td><?php echo $inventory['Price'] ?></td>
                                                    <td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo base_url();?>home/editProduct/<?php echo $inventory['Barcode'] ?>">
															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
                                                            </a>

															<a >
															<button onclick="jsDelete(<?php echo $inventory['Barcode'] ?>)" class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
                                                            </a>

															
														</div>
													</td>
												</tr>

												<?php } ?>

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

								<div class="hr hr-18 dotted hr-double"></div>

								
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
=======
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>index.php/home/index">Home</a>
							</li>
                            
								
								<li class="active">Inventory</li>
							

							
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="row">
									<div class="col-xs-12">
                                     <br></br>
                                   <a href="<?php echo base_url(); ?>index.php/Home/addProduct" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
                                   <form class="form-inline" role="form" action="<?php echo base_url(); ?>home/searchInventory" method="post">
       <div class="form-group">
           <input type="text" class="form-field-1" name="search" placeholder="Search...">
       </div>
<button type="submit" class="btn btn-primary" name="submit" ><span class="glyphicon glyphicon-search"> Search</button>
   </form>
   <br/>
                                           
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													
													<th>Barcode</th>
													<th>Category</th>
                                                    <th>Brand</th>
                                                    <th>Type</th>
                                                    <th>Unit</th>
                                                    <th>Stock </th>
                                                    <th>Price</th>
                                                    
													<th class="hidden-480">Action</th>

													</th>
												</tr>
											</thead>
<script>
	function jsDelete(pk){
		
		var confirm = window.confirm("Are you sure you want to delete this record?");
		if (confirm) {
			window.location = "<?php echo base_url() ?>home/deleteProduct/" +pk;
		}
	}
</script>
											<tbody>
													<?php foreach($inventorys as $inventory) { ?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													

													<td>
													<a href="#"><?php echo $inventory['Barcode'] ?></a>
													</td>
													<td><?php echo $inventory['Category'] ?></td>
													<td><?php echo $inventory['Brand'] ?></td>
													<td><?php echo $inventory['Type'] ?></td>
                                                    <td><?php echo $inventory['Unit'] ?></td>
                                                    <td><?php echo $inventory['Stock'] ?></td>
                                                    <td><?php echo $inventory['Price'] ?></td>
                                                    <td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo base_url();?>home/editProduct/<?php echo $inventory['Barcode'] ?>">
															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
                                                            </a>

															<a >
															<button onclick="jsDelete(<?php echo $inventory['Barcode'] ?>)" class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
                                                            </a>

															
														</div>
													</td>
												</tr>

												<?php } ?>

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

								<div class="hr hr-18 dotted hr-double"></div>

								
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
>>>>>>> adding files
			</div><!-- /.main-content -->