<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="<?php echo base_url();?>text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
                        
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
                	<li class="">
                    	
						<h6 style="margin-left:15px;">File Information</h6>
							<div class="separator"></div>

						<b class="arrow"></b>
					</li>
					<li class="">
                    	
						<a href="index.html">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="employees.html" onClick='window.location = "<?php echo base_url();?>index.php/home/employees"' class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">
								Employees							</span>

							
						</a>

						</li>


					<li class="">
						<a href="" onClick='window.location = "<?php echo base_url();?>index.php/home/sales"' class="dropdown-toggle">
							<i class="menu-icon fa fa-bar-chart"></i>
							<span class="menu-text"> Sales </span>

							
						</a>

						</li>

					<li class="">
						<a href="employees.html" onClick='window.location = "<?php echo base_url();?>index.php/home/inventory"' class="dropdown-toggle">
							<i class="menu-icon fa fa-cube"></i>
							<span class="menu-text"> Inventory </span>

							
						</a>

					</li>
                    <li class="">
                    	
						<h6 style="margin-left:15px;">Transaction Information</h6>
							<div class="separator"></div>

						<b class="arrow"></b>
					</li>
                	<li class="">
						<a href="employees.html" onClick='window.location = "<?php echo base_url();?>index.php/home/reports"' class="dropdown-toggle">
							<i class="menu-icon fa fa-file"></i>
							<span class="menu-text"> Reports </span>

							
						</a>
						<b class="arrow"></b>
					</li>
                    
					<li class="">
						<a href="employees.html" onClick='window.location = "<?php echo base_url();?>index.php/home/calendar"' class="dropdown-toggle">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Calendar </span>

							
						</a>

					</li>
                   
                   
                   
                   	<li class="">
						<a href="employees.html" onClick='window.location = "<?php echo base_url();?>index.php/home/history"' class="dropdown-toggle">
							<i class="menu-icon fa fa-globe"></i>
							<span class="menu-text"> History </span>

							
						</a>

					</li>
						<!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>