<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>index.php/home/index">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>index.php/home/inventory">Inventory</a>
							</li>
							<li class="active">Edit Product</li>

							
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

						<div class="page-header">
							<h1>
								Edit Product
								
							</h1>
						</div>
                        <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                	
                                	<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url(); ?>index.php/Home/saveProduct">
                                   

									<div class="space-6"></div>

									
                                    
                                    
									<div class="form-group">
                                    
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category </label>
                                        

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="category" value="<?php echo $inventory['Category'] ?>" class="col-xs-10 col-sm-5" />
                                            <input type="hidden" id="form-field-1" name="barcode" value="<?php echo $inventory['Barcode'] ?>"class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    
                                     <div class="form-group">
										<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Brand</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="brand" value="<?php echo $inventory['Brand'] ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Type</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="type" value="<?php echo $inventory['Type'] ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Unit</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="unit" value="<?php echo $inventory['Unit'] ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" name="stock"> Stock</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="stock" value="<?php echo $inventory['Stock'] ?>"class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" name="price"> Price</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="price" value="<?php echo $inventory['Price'] ?>"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                   
 									
                                      <br></br>
                                     
                                 
                                   <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                                    
                                   <a href="<?php echo base_url(); ?>index.php/Home/inventory" class="btn btn-primary"><span class="glyphicon glyphicon-remove "></span> Cancel</a><br><br>
                                     
                                    </form>
                                        

                                        
									</div><!-- /.span -->
								</div><!-- /.row -->

								

								
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->