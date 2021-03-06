	<!-- main header -->
	<?php $this->load->view('_include') ?>  
     <!-- /main header end -->
     <!-- kendo UI -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/bower_components/kendo-ui-core/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>public/bower_components/kendo-ui-core/styles/kendo.material.min.css"/>
     

</head>
<body class="sidebar_main_open">
    
    <!--  header -->
	<?php $this->load->view('_header') ?>  
     <!-- / header end -->

	
   	<!-- left side bar -->
	<?php $this->load->view('_leftside') ?>    
    <!-- /left side bar -->
   

    <div id="page_content">
        <div id="page_heading">
            <h1 id="product_edit_name">SALE TARGET</h1>
        </div>
        <div id="page_content_inner">            
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div id="grid"></div>
                    <table id="to-table" class="uk-table" cellspacing="0" width="100%" style="display:none;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Name</th> -->
                            <th>Beauty Agent</th>
                            <th>Target Achievement</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                         <tr>
                            <th>No</th>
                            <!-- <th>Name</th> -->
                            <th>Beauty Agent</th>
                            <th>Target Achievement</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php foreach ($saletarget as $v) {?>
                        <tr>
                            <td><?= $v->id ?></td>
                            <!-- <td><?= $v->name ?></td> -->
                            <td><?= $v->ba_id ?></td>
                             <td><?= $v->target_achievement ?></td>
                            <td><?= $v->start_date ?></td>
                            <td><?= $v->end_date ?></td>
                            <td>
                            	
                            	<a href="#" id="btnUpdate" data="<?php echo $v->id?>" data-uk-tooltip="{pos:'left'}" title="Edit"><i class="material-icons">edit</i></a>
                            	<a href="<?php  echo site_url('saletarget/delete')?>/<?= $v->id ?>" onClick="return confirm('Do you want to delete?');" data-uk-tooltip="{pos:'left'}" title="Delete"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                         <?php } ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- right sidebar -->
    <?php $this->load->view('_rightside') ?>    
    <!-- right sidebar end -->
    
    
    
    
    <div>
		<div class="uk-modal" id="modalSaleTarget">
			<div class="uk-modal-dialog uk-modal-dialog">
				<button type="button" class="uk-modal-close uk-close"></button>
				<div class="uk-modal-header">
					<h3 class="uk-modal-title"> + Sale Target</h3>
				</div>
				
				<form action="#"  id="frmSaleTarget" class="uk-form-stacked" method="POST">
					<div class="uk-grid uk-grid-medium" data-uk-grid-margin>

						<div class="uk-width-xLarge-12-12  uk-width-large-12-12">
							<div class="md-card1">



								


								<div class="md-card-content large-padding">

									
								<div class="uk-form-row" style="width: 100%;display: none" id="msgError" >
		                       		<div class="uk-alert uk-alert-danger" data-uk-alert="">
		                                <a href="#" class="uk-alert-close uk-close"></a>
		                                Name has already existed.
		                            </div>
		                         </div>

									<div class="uk-grid uk-grid-divider uk-grid-medium"
										data-uk-grid-margin>

										<div class="uk-width-large">
											
											<div class="uk-form-row" style="display:none;">
												<label>Name<span class="req">*</span></label> 
												<input type="text" id="name" name="name" class="md-input" required value="AA"/> 
												<input type="hidden" id="oldname" name="oldname"  placeholder="old name"  value="AA"/>
											</div>
			
											
											<div class="uk-form-row">
												<label for="supervisor">Beauty agent<span class="req">*</span></label>
												<select id="ba_id" name="ba_id" data-md-selectize
													data-md-selectize-bottom >
				                                     <?php foreach ($lstBA as $v):?>
				                                            <option
														value="<?php echo $v->id;?>"><?php echo $v->last_name.' '.$v->first_name;?></option>
				                                     <?php endforeach?>
				                                    </select>
											</div>
											
											
											
											
											<div class="uk-grid uk-grid-medium uk-form-row">
												<div class="uk-width-medium-1-2">
														<div class="uk-input-group">
															<label for="kUI_datepicker_a" class="uk-form-label">Start date<span class="req">*</span></label>
															<input id="start_date" required="required" />
														</div>
												</div>
												<div class="uk-width-medium-1-2">
														<div class="uk-input-group">
															<label for="kUI_datepicker_a" class="uk-form-label">End date<span class="req">*</span></label>
															<input id="end_date" required="required"/>
														</div>
												</div>
												
											</div>
											
											
											
											<div class="uk-form-row">
												<label>Target achievement<span class="req">*</span></label>
												 <input type="text" name="target_achievement" id="target_achievement" class="md-input" required />
											</div>
											
											<div class="uk-form-row">
												<div class="uk-width-1-1">
													<div class="uk-form-row">
														<label>Description</label>
														<textarea cols="30" rows="1" class="md-input" name="description"  id="description"> </textarea>
													</div>
												</div>
											</div>
											
											
											
											
											
											
											
											
											
											

										</div>


									</div>


								</div>





							</div>
						</div>
					</div>
					<div class="uk-modal-footer uk-text-right">
						<button type="button" class="md-btn uk-modal-close">Close</button>
						<input type="button" class="md-btn md-btn-primary" data='' id="btnUpdateSave" value="Update" style="display: none;" /> 
						<input type="submit" class="md-btn md-btn-primary" id="btnSave" value="Save" />
					</div>
				</form>
			</div>
		</div>
	</div>






	<!-- <div class="md-fab-wrapper">
		<a class="md-fab md-fab-primary" href="#" id="btnOpenAddNew"
			data-uk-modal="{target:'#modalSaleTarget'}"> <i
			class="material-icons">&#xE145;</i>
		</a>
	</div> -->
	
	
    
    
    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- momentJS date library -->
    <script src="<?php echo base_url()?>public/bower_components/moment/min/moment.min.js"></script>

    <!-- common functions -->
    <script src="<?php echo base_url()?>public/assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url()?>public/assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url()?>public/assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="<?php echo base_url()?>public/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- datatables colVis-->
    <script src="<?php echo base_url()?>public/bower_components/datatables-colvis/js/dataTables.colVis.js"></script>
    <!-- datatables tableTools-->
    <script src="<?php echo base_url()?>public/bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
    <!-- datatables custom integration -->
    <script src="<?php echo base_url()?>public/assets/js/custom/datatables_uikit.min.js"></script>

    <!--  datatables functions -->
    <script src="<?php echo base_url()?>public/assets/js/pages/plugins_datatables.min.js"></script>
     
   <!-- page specific plugins -->
    <!-- kendo UI -->
    <script src="<?php echo base_url()?>public/assets/js/kendoui.custom.min.js"></script>

    <!--  kendoui functions -->
    <script src="<?php echo base_url()?>public/assets/js/pages/kendoui.min.js"></script>


    
    
    <!-- enable hires images -->
    <script>
    	var SITE_URL = '<?php echo site_url(); ?>';
        $(function() {
            altair_helpers.retina_images();
            //$("#to-table").DataTable();
            $("#end_date,#start_date").kendoDatePicker({
            	  format: "yyyy-MM-dd"
           	});
        });
    </script>
    <script src="http://kendo.cdn.telerik.com/2014.3.1029/js/jszip.min.js"></script>
    <script src="<?php echo base_url()?>public/assets/js/kendo.all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/scripts/saletarget.js"></script>
    
    <script>
        var SITE_URL = '<?php echo site_url(); ?>';
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>public/scripts/changeuserpassword.js"></script>
</body>
</html>