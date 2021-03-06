		
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
	<?php $this->load->view('_leftside_project') ?>    
    <!-- /left side bar -->

    <div id="page_content">
        <div id="page_heading">
            <h1 id="product_edit_name">SUPERVISOR DAILY REPORT</h1>
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
                                            <label for="selectedSupervisor">Supervisor Name</label>
                                            <select id="selectedSupervisor" name="selectedSupervisor" data-md-selectize data-md-selectize-bottom>
                                                <option value="">Supervisor Name</option>
                                                <?php foreach ($supervisor_users as $user):?>
                                                    <option value="<?php echo $user->id;?>"><?php echo $user->username; ?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="txtBAExecutive">BA's Executive Name</label>
                                            <input type="text" class="md-input" id="txtBAExecutive" name="txtBAExecutive" value=""/>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="md-card">
                                                    <div class="md-card-toolbar">
                                                        <div class="md-card-toolbar-actions">
                                                            <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                                        </div>
                                                        <h3 class="md-card-toolbar-heading-text">
                                                            Reported By BA
                                                        </h3>
                                                    </div>
                                                    <div class="mGraph-wrapper">
                                                        <div class="uk-overflow-container">
                                                            <table class="uk-table uk-text-nowrap">
<!--                                                             <thead>
                                                                <tr>
                                                                    <th>BAName</th>
                                                                </tr>
                                                            </thead> -->
                                                            <tbody id="CONTENTS">
                                                                <tr>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="md-card-content">
                                                        <div class="md-card-fullscreen-content">
                                                            <div class="uk-overflow-container">
                                                                <table class="uk-table uk-table-no-border uk-text-nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>BA Name</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="CONTENTS">
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                            <p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>
                                                            <p class="uk-margin-top-remove">Vitae quia id sed dolores ut et molestiae repudiandae explicabo esse quidem repellat dolore perferendis ipsa ipsam molestias molestiae repudiandae soluta nesciunt non aut non cumque atque maiores ut nulla accusamus eos fugit adipisci sint corrupti quia autem nesciunt et soluta magni eligendi rerum et velit incidunt quis eos aut nam et quae amet excepturi voluptas ut vitae voluptates rerum tenetur officia tenetur ut delectus aperiam beatae optio ut dignissimos qui quibusdam laudantium ut non veniam nam voluptate unde est eius dolor iure voluptas ut explicabo ea in autem quis incidunt nisi recusandae pariatur sit voluptate facere vel quibusdam magni error earum dolores similique assumenda amet sunt nemo eveniet aut.</p> 
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4">
                                        <div class="uk-form-row">
                                            <div class="md-card">
                                                <div class="md-card-content">
                                                    <div class="uk-margin-bottom uk-text-center uk-position-relative">
                                                        <img src="<?php echo base_url()?>public/assets/img/ecommerce/s6_edge.jpg" alt="" class="img_medium" id="txtPhoto" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="md-card">
                                    <div class="md-card-toolbar">
                                        <div class="md-card-toolbar-actions">
                                            <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                        </div>
                                        <h3 class="md-card-toolbar-heading-text">
                                            BA Information
                                        </h3>
                                    </div>
                                    <div class="md-card-content">
                                        <div class="md-card-fullscreen-content">
                                            <div class="uk-overflow-container">
                                                <table class="uk-table uk-table-no-border uk-text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Best Seller</th>
                                                        <th>Total Sale</th>
                                                        <th>Change</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>January 2014</td>
                                                        <td>Non ad quos neque.</td>
                                                        <td>$3 234 162</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>February 2014</td>
                                                        <td>Molestias et ut.</td>
                                                        <td>$3 771 083</td>
                                                        <td class="uk-text-success">+2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>March 2014</td>
                                                        <td>Qui itaque ea reiciendis quo.</td>
                                                        <td>$2 429 352</td>
                                                        <td class="uk-text-danger">-4.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>April 2014</td>
                                                        <td>Eveniet adipisci magni.</td>
                                                        <td>$4 844 169</td>
                                                        <td class="uk-text-success">+7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>May 2014</td>
                                                        <td>Impedit distinctio est.</td>
                                                        <td>$5 284 318</td>
                                                        <td class="uk-text-success">+3.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>June 2014</td>
                                                        <td>Cum est voluptatum.</td>
                                                        <td>$4 688 183</td>
                                                        <td class="uk-text-danger">-6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>July 2014</td>
                                                        <td>Tempora quia.</td>
                                                        <td>$4 353 427</td>
                                                        <td class="uk-text-success">-5.3%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                            <p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>
                                            <p class="uk-margin-top-remove">Vitae quia id sed dolores ut et molestiae repudiandae explicabo esse quidem repellat dolore perferendis ipsa ipsam molestias molestiae repudiandae soluta nesciunt non aut non cumque atque maiores ut nulla accusamus eos fugit adipisci sint corrupti quia autem nesciunt et soluta magni eligendi rerum et velit incidunt quis eos aut nam et quae amet excepturi voluptas ut vitae voluptates rerum tenetur officia tenetur ut delectus aperiam beatae optio ut dignissimos qui quibusdam laudantium ut non veniam nam voluptate unde est eius dolor iure voluptas ut explicabo ea in autem quis incidunt nisi recusandae pariatur sit voluptate facere vel quibusdam magni error earum dolores similique assumenda amet sunt nemo eveniet aut.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                            <div class="md-card">
                                <div class="md-card-content large-padding">
                                    <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                        <div class="uk-width-large-1-4">
                                            <div class="uk-form-row">
                                                <label for="txtMonthlyTarget">Monthly Target</label>
                                                <input type="text" class="md-input" id="txtMonthlyTarget" name="txtMonthlyTarget" value="$ 0.00"/>
                                            </div>
                                            <div class="uk-form-row">
                                                <label for="txtTodayTarget">Today Target</label>
                                                <input type="text" class="md-input" id="txtTodayTarget" name="txtTodayTarget" value="$ 0.00"/>
                                            </div>
                                        </div>
                                        <div class="uk-width-large-1-4">
                                            <div class="uk-form-row">
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                        <i class="uk-input-group-icon uk-icon-calendar"></i>
                                                    </span>
                                                    <div class="md-input-wrapper md-input-filled">
                                                        <label for="validOfDate">Valid Of Target</label>
                                                            <input class="md-input" type="text" id="startDate" data-uk-datepicker="{format:'DD-MMMM-YYYY'}">
                                                        <span class="md-input-bar"></span>
                                                            <input class="md-input" type="text" id="endDate" data-uk-datepicker="{format:'DD-MMMM-YYYY'}">
                                                        <span class="md-input-bar"></span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-form-row">
                                            <label for="txtNumberOfWorking">Number of working days</label>
                                            <input type="text" class="md-input" id="txtNumberOfWorking" name="txtNumberOfWorking" value="26"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- large chart -->
                        <div class="md-card">
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-form-row">
                                            <label for="txtTodayAchievement">$ Today Achievement</label>
                                            <input type="text" class="md-input" id="txtTodayAchievement" name="txtTodayAchievement" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="txtMonthToDateAchievement">$ Month to Date Achievement</label>
                                            <input type="text" class="md-input" id="txtMonthToDateAchievement" name="txtMonthToDateAchievement" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="txtYearToDateAchievement">$ Year to Date Achievement</label>
                                            <input type="text" class="md-input" id="txtYearToDateAchievement" name="txtYearToDateAchievement" value=""/>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-2-4">
                                        <div class="uk-form-row">
                                            <label for="txtTodayAchievementPercent">% Today Achievement</label>
                                            <input type="text" class="md-input" id="txtTodayAchievementPercent" name="txtTodayAchievementPercent" value="% 0"/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="txtMonthToDateAchievementPercent">% Month to Date Achievement</label>
                                            <input type="text" class="md-input" id="txtMonthToDateAchievementPercent" name="txtMonthToDateAchievementPercent" value="% 0"/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="txtYearToDateAchievementPercent">% Year to Date Achievement</label>
                                            <input type="text" class="md-input" id="txtYearToDateAchievementPercent" name="txtYearToDateAchievementPercent" value="% 0"/>
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

    <!-- <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary" href="#" id="product_edit_submit">
            <i class="material-icons">&#xE161;</i>
        </a>
    </div> -->

    <script id="CONTENT_TEMPLATE" type="text/x-jquery-tmpl">
        <tr>
            <td>{{= username}}</td>
        </tr>
    </script>

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
    <script type="text/javascript" src="<?php echo base_url()?>public/scripts/supervisor_report.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/scripts/changeuserpassword.js"></script>
</body>
</html>