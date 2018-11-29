<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>index.php/home/index">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>index.php/home/sales">Sales</a>
							</li>
							<li class="active">Add Sales</li>

							
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
								Add Sales
								
							</h1>
						</div>
                        <div class="row">
							<div class="col-xs-6">
								<!-- PAGE CONTENT BEGINS -->
                                	<form class="form-horizontal" role="form" method="POST" onSubmit="log()" action="<?php echo base_url(); ?>index.php/Home/insertSale">
									
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Barcode :</label>

										<div class="col-sm-9">
											<input type="text" id="barcode" onChange="log()" name="barcode" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code : </label>

										<div class="col-sm-9">
											<input type="text" id="code" name="username" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  name="quantity"> Quantity : </label>

										<div class="col-sm-9">
											<input type="text" onkeyup="calculateTotal()" id="quantity" name="password"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>  Total : </b></label>

									<div class="col-sm-9">
											<input type="text" disabled id="total" name="total"  class="col-xs-10 col-sm-5" />
										</div>

										
									</div>
                                    <br/>
                                    
                                    <button type="button" style="margin-left:145px;" onclick="addSales()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
 									
                                     <a href="<?php echo base_url();?>home/sales">
                                      <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Cancel</button></a>
 									
                                     
                                    </form>
                                        

                                        
									</div><!-- /.span -->
                                    
                                    
                                    <div class="col-xs-4">
								<!-- PAGE CONTENT BEGINS -->
                                	<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url(); ?>index.php/Home/insertEmployee">
									
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category :</label>

										<div class="col-sm-9">
											<input type="text" disabled id="category" name="category" class="col-xs-10 col-sm-9" />
										</div>
									</div>
                                    
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Brand : </label>

										<div class="col-sm-9">
											<input type="text" disabled id="brand" name="brand" class="col-xs-10 col-sm-9" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Type : </label>

										<div class="col-sm-9">
											<input type="text" disabled id="type" name="type"  class="col-xs-10 col-sm-9" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Unit : </label>

										<div class="col-sm-9">
											<input type="text" disabled id="unit" name="unit"  class="col-xs-10 col-sm-9" />
										</div>
									</div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Unit Price: </label>

										<div class="col-sm-9">
											<input type="text" readonly id="unitprice" name="unitprice"  class="col-xs-10 col-sm-9" />
										</div>
									</div>
										

										
									</div>
                                   
 									
                                     
                                    </form>
                                        

                                        
									</div><!-- /.span -->
								</div><!-- /.row -->
<script>

	function addSales() {
		var barcode = document.getElementById('barcode').value;
		var code = document.getElementById('code').value;
		var quantity = document.getElementById('quantity').value;
		var unitprice = document.getElementById('unitprice').value;
		$.ajax({
			type:'ajax',
			method: 'post',
			url: 'processAddSales',
			data: {Product: barcode, Code: code, Quantity: quantity, unit_price: unitprice},
			assync: false,
			dataType: 'json',
			success: function (data) {
				if (data == "Okay") {
					window.location = "<?php echo base_url();?>index.php/home/sales";
				} else {
					alert("Out of Stock!");
				}
				
			},
			
			error: function (){
				alert ('There is an error in the database try reloading the page.');
				
			}
		});
	}

	function log() {
		event.preventDefault();
		var ID = document.getElementById('barcode').value;
		$.ajax({
			type:'ajax',
			method: 'get',
			url: 'showProduct',
			data: {barcode: ID},
			assync: false,
			dataType: 'json',
			success: function (data) {
				//console.log(data);//
				document.getElementById('category').value=data.Category;
				document.getElementById('brand').value=data.Brand;
				document.getElementById('type').value=data.Type;
				document.getElementById('unit').value=data.Unit;
				document.getElementById('unitprice').value=data.Price;
			},
			
			error: function (){
				alert ('There is an error in the database try reloading the page.');
				
			}
		});
	}
	
	function calculateTotal (){
		
		var unitprice = document.getElementById("unitprice").value;
		var quantity = document.getElementById("quantity").value;
		document.getElementById("total").value = quantity * unitprice;
		
		
	}
	

</script>
								

								
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->