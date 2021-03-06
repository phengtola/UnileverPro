		
	<!-- main header -->
	<?php $this->load->view('_include') ?>  
     <!-- /main header end -->
         <!-- kendo UI -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/bower_components/kendo-ui-core/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>public/bower_components/kendo-ui-core/styles/kendo.material.min.css"/>
    
    <style>
        .uk-grid-divider>[class*=uk-width-large-]:not(.uk-width-large-1-1):nth-child(n+2) {
            border-left: 0px;
        }
    </style>

</head>
<body>
	<!--  header -->
	<?php $this->load->view('_header') ?>  
     <!-- / header end -->
 
    <!-- left side bar -->
	<?php $this->load->view('_leftside') ?>    
    <!-- /left side bar -->

    <div id="page_content">
        <div id="page_heading">
            <h1 id="product_edit_name">BA DAILY REPORT</h1>
            <!--<span class="uk-text-muted uk-text-upper uk-text-small" id="product_edit_sn">SM-G925TZKFTMB</span>-->
        </div>
        <div id="page_content_inner">
            <form action="" class="uk-form-stacked" id="product_edit_form">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                        <div class="md-card">
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-1-4">
                                        <div class="uk-form-row">
                                            <label for="selectedBA"> BA Name</label>
                                            <select id="selectedBA" name="selectedBA" data-md-selectize data-md-selectize-bottom>
                                                <option value="">BA Name</option>
                                                <?php foreach ($ba_users as $user):?>
                                                    <option value="<?php echo $user->id;?>"><?php echo $user->username; ?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Supervisor Name</label>
                                            <select id="selectedSupervisor" data-md-selectize data-md-selectize-bottom>
                                                <option value="">Supervisor</option>
                                                <?php foreach ($supervisor_users as $user):?>
                                                    <option value="<?php echo $user->id;?>"><?php echo $user->username; ?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="selectedBAExecutive">BA's Executive Name</label>
                                            <select id="selectedBAExecutive" data-md-selectize data-md-selectize-bottom>
                                                <option value="">BA's Executive Name</option>
                                                <?php foreach ($ba_executive_users as $user):?>
                                                    <option value="<?php echo $user->id;?>"><?php echo $user->username; ?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Market Name</label>
                                            <select id="product_search_status" data-md-selectize data-md-selectize-bottom>
                                                <option value="">Market Name</option>
                                                <option value="1">Market Name 1</option>
                                                <option value="2">Market Name 2</option>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Outlet Name</label>
                                            <select id="product_search_status" data-md-selectize data-md-selectize-bottom>
                                                <option value="">Outlet Name</option>
                                                <option value="1">Outlet Name 1</option>
                                                <option value="2">Outlet Name 2</option>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">DMS Code</label>
                                            <input type="text" class="md-input" id="product_edit_manufacturer_control" name="product_edit_manufacturer_control" value=""/>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">DT</label>
                                            <select id="product_search_status" data-md-selectize data-md-selectize-bottom>
                                                <option value="">DT</option>
                                                <option value="1">DT 1</option>
                                                <option value="2">DT 2</option>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Customer Type</label>
                                            <select id="product_search_status" data-md-selectize data-md-selectize-bottom>
                                                <option value="">Customer Type</option>
                                                <option value="1">Customer Type 1</option>
                                                <option value="2">Customer Type 2</option>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">Channel</label>
                                            <select id="product_search_status" data-md-selectize data-md-selectize-bottom>
                                                <option value="">Channel</option>
                                                <option value="1">Channel 1</option>
                                                <option value="2">Channel 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4">
                                        <div class="uk-form-row">
                                            <div class="md-card">
                                                <div class="md-card-content">
                                                    <div class="uk-margin-bottom uk-text-center uk-position-relative">
                                                        
                                                        <img src="<?php echo base_url()?>public/assets/img/ecommerce/s6_edge.jpg" alt="" class="img_medium"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="md-card">
                                <div class="md-card-content large-padding">
                                    <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                        <div class="uk-width-large-1-4">
                                            <div class="uk-form-row">
                                                <label for="product_edit_name_control">Monthly Target</label>
                                                <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value=""/>
                                            </div>
                                            <div class="uk-form-row">
                                                <label for="product_edit_name_control">Today Target</label>
                                                <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value=""/>
                                            </div>
                                        </div>
                                        <div class="uk-width-large-1-4">
                                            <div class="uk-form-row">
                                                <!-- <label for="product_edit_name_control">Valid Of Date</label> -->
                                                <!--<input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value="000123"/>-->
                                                <!-- <form class="uk-form-stacked">
                                                    <input id="kUI_datepicker_a" value="10-06-2015" />
                                                </form> -->
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="uk-input-group-icon uk-icon-calendar"></i>
                                                    </span>
                                                    <div class="md-input-wrapper md-input-filled">
                                                        <label for="validOfDate">Valid Of Date</label>
                                                            <input class="md-input" type="text" id="startDate" data-uk-datepicker="{format:'DD/MMMM/YYYY'}">
                                                        <span class="md-input-bar"></span>
                                                            <input class="md-input" type="text" id="endDate" data-uk-datepicker="{format:'DD/MMMM/YYYY'}">
                                                        <span class="md-input-bar"></span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Number of working days</label>
                                            <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value="26"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-card">
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">$ Today Achievement</label>
                                            <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">$ Month to Date Achievement</label>
                                            <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">$ Year to Date Achievement</label>
                                            <input type="text" class="md-input" id="product_edit_manufacturer_control" name="product_edit_manufacturer_control" value=""/>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">% Today Achievement</label>
                                            <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">% Month to Date Achievement</label>
                                            <input type="text" class="md-input" id="product_edit_name_control" name="product_edit_name_control" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">% Year to Date Achievement</label>
                                            <input type="text" class="md-input" id="product_edit_manufacturer_control" name="product_edit_manufacturer_control" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary" href="#" id="product_edit_submit">
            <i class="material-icons">&#xE161;</i>
        </a>
    </div>

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

    <!--  product edit functions -->
    <script src="<?php echo base_url()?>public/assets/js/pages/ecommerce_product_edit.min.js"></script>
    
    <!-- kendo UI -->
    <script src="<?php echo base_url()?>public/assets/js/kendoui.custom.min.js"></script>

    <!--  kendoui functions -->
    <script src="<?php echo base_url()?>public/assets/js/pages/kendoui.min.js"></script>
    
    <!-- enable hires images -->
    <script>
        var SITE_URL = '<?php echo site_url(); ?>';
        $(function() {
            altair_helpers.retina_images();
        });
    </script>
    <script src="<?php echo base_url()?>public/assets/js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/scripts/ba_report.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/scripts/changeuserpassword.js"></script>
</body>
</html>