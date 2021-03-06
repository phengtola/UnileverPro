$(function(){
	
	var supervisor ={}
	var dmsCode = false;
	$("#txtTransactionOf").val(moment().format('DD-MMMM-YYYY'));
	$("#txtTransactionOfsaleTransactionHistory").val(moment().format('DD-MMMM-YYYY'));
	
	supervisor.selectBA = function(id){
		var start_date = moment().date(1).format('YYYY-MM-DD');
		var end_date = moment().add('months', 1).date(0).format('YYYY-MM-DD');
		if(dmsCode==true){
			dmsCode = false;
			return false;
		}
		modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
		$.ajax({
			url: SITE_URL+'supervisor/changeba',
			type: "POST",
			dataType: "JSON",
			data: {
				'ba_id' : id,
				'start_date' : start_date,
				'end_date' : end_date
			},
			success: function(data){
				console.log(data);
				$('.md-input-wrapper').find('.md-input').not("#txtTransactionOf,#txtTransactionOfsaleTransactionHistory, #txtNumberOfWorking").val('');
				$('.md-input-wrapper').removeClass('md-input-filled');
				if(data.user){
					$("#txtPhoto").attr('src',data.user.photo);
					$("#txtSupervisorName").val(data.user.supervisor);
					$("#txtBAExecutive").val(data.user.executive);

					$("#txtMarketName").val(data.user.outlet_address);
					$("#txtOutletName").data("id", data.user.outlet_id);
					//alert($("#txtOutletName").data("id"));
					$("#txtOutletName").val(data.user.outlet_name);
					$("#txtDMSCode").val(data.user.dms_code);
					$("#txtDT").val(data.user.distributor);
					$("#txtCustomerType").val(data.user.customer_type);
					$("#txtChannel").val(data.user.channel);
					$("#txtMonthlyTarget").val('$ '+ data.user.sumtarget);
					$("#txtTodayTarget").val('$ ' + data.user.sumtodaytarget);
					$("#startDate").val(moment(start_date).format('DD-MMMM-YYYY'));
					$("#endDate").val(moment(end_date).format('DD-MMMM-YYYY'));
					$("#txtTodayAchievement").val('$ ' + data.user.today_achievement);
					$("#txtMonthToDateAchievement").val('$ ' + data.user.month_achievement);
					$("#txtYearToDateAchievement").val('$ ' + data.user.year_achievement);
					$("#txtTodayAchievementPercent").val('% ' + data.user.today_achievement_percent);
					$("#txtMonthToDateAchievementPercent").val('% ' + data.user.month_achievement_percent);
					$("#txtYearToDateAchievementPercent").val('% ' + data.user.year_achievement_percent);
					$('.md-input-wrapper').addClass('md-input-filled');
					sales.getAllSales(SITE_URL+"supervisor/ajax");
				}
				modal.hide();
			},
			error: function(data){
				$('.md-input-wrapper').find('.md-input').val('');
				$('.md-input-wrapper').removeClass('md-input-filled');
				$("#txtNumberOfWorking").val(26);
				modal.hide();
				console.log(data);
			}
		});
	}
	
	// TODO: ON CHANGE ON BA 
	$("#selectedBA").change(function(){
		supervisor.selectBA($("#selectedBA").val());
	});
	
	if(BA_ID!="" || BA_ID!=null){
		var $selectedBA = $("#selectedBA").selectize();
		var selectedBA = $selectedBA[0].selectize;
		selectedBA.setValue(BA_ID);
	}



	// TODO: ON CHANGE ON BA 
	$("#txtDMSCode").keyup(function(e){
		var code = (e.keyCode ? e.keyCode : e.which);
    	if (code==13) {
    		dmsCode = true;
			var start_date = moment().date(1).format('YYYY-MM-DD');
			var end_date = moment().add('months', 1).date(0).format('YYYY-MM-DD');
			modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
			$.ajax({
				url: SITE_URL+'supervisor/changedmsCode',
				type: "POST",
				dataType: "JSON",
				data: {
					'dms_code' : $("#txtDMSCode").val(),
					'start_date' : start_date,
					'end_date' : end_date
				},
				success: function(data){
					console.log(data);
					$("#txtNumberOfWorking").val(26);
					if(data.user){
						dmsCode = true;
						$('.md-input-wrapper').find('.md-input').not("#txtTransactionOf,,#txtTransactionOfsaleTransactionHistory,#txtNumberOfWorking").val('');
						$('.md-input-wrapper').removeClass('md-input-filled');
						$("#txtNumberOfWorking").val(26);
						var $selectedBA = $("#selectedBA").selectize();
						var selectedBA = $selectedBA[0].selectize;
						selectedBA.setValue(data.user.id);
						$("#txtPhoto").attr('src',data.user.photo);
						$("#txtSupervisorName").val(data.user.supervisor);
						$("#txtBAExecutive").val(data.user.executive);
						$("#txtMarketName").val(data.user.outlet_address);
						$("#txtOutletName").val(data.user.outlet_name);
						$("#txtDMSCode").val(data.user.dms_code);
						$("#txtDT").val(data.user.distributor);
						$("#txtCustomerType").val(data.user.customer_type);
						$("#txtChannel").val(data.user.channel);
						$("#txtMonthlyTarget").val('$ '+ data.user.sumtarget);
						$("#txtTodayTarget").val('$ ' + data.user.sumtodaytarget);
						$("#startDate").val(moment(start_date).format('DD-MMMM-YYYY'));
						$("#endDate").val(moment(end_date).format('DD-MMMM-YYYY'));
						$("#txtTodayAchievement").val('$ ' + data.user.today_achievement);
						$("#txtMonthToDateAchievement").val('$ ' + data.user.month_achievement);
						$("#txtYearToDateAchievement").val('$ ' + data.user.year_achievement);
						$("#txtTodayAchievementPercent").val('% ' + data.user.today_achievement_percent);
						$("#txtMonthToDateAchievementPercent").val('% ' + data.user.month_achievement_percent);
						$("#txtYearToDateAchievementPercent").val('% ' + data.user.year_achievement_percent);
						$('.md-input-wrapper').addClass('md-input-filled');
						sales.getAllSales(SITE_URL+"supervisor/ajax");
					}else{
						$("#txtPhoto").attr('src',"");
						$("#txtSupervisorName").val("");
						$("#txtBAExecutive").val("");
						$("#txtMarketName").val("");
						$("#txtOutletName").val("");
						$("#txtDT").val("");
						$("#txtCustomerType").val("");
						$("#txtChannel").val("");
						$("#txtMonthlyTarget").val('$ 0.00');
						$("#txtTodayTarget").val('$ 0.00');
						$("#txtTodayAchievement").val('$ 0.00');
						$("#txtMonthToDateAchievement").val('$ 0.00');
						$("#txtYearToDateAchievement").val('$ 0.00');
						$("#txtTodayAchievementPercent").val('% 0');
						$("#txtMonthToDateAchievementPercent").val('% 0');
						$("#txtYearToDateAchievementPercent").val('% 0');
						$('.md-input-wrapper').addClass('md-input-filled');
					}
					modal.hide();
				},
				error: function(data){
					$("#txtNumberOfWorking").val(26);
					modal.hide();
					console.log(data);
				}
			});
    	}
	});

	// TODO: ON CHANGE ON STARTE DATE 
	$("#startDate, #endDate").change(function(e){
		if($("#startDate").val()=="" || $("#endDate").val()==""){
			return false;
		}
		if(moment($("#startDate").val()).format('YYYY-MM-DD') > moment($("#endDate").val()).format('YYYY-MM-DD')){
			return false;
		}
		modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
		$.ajax({
			url: SITE_URL+'supervisor/changeba',
			type: "POST",
			dataType: "JSON",
			data: {
				'ba_id' : $("#selectedBA").val(),
				'start_date' : moment($("#startDate").val()).format("YYYY-MM-DD"),
				'end_date' :  moment($("#endDate").val()).format("YYYY-MM-DD")
			},
			success: function(data){
				console.log(data);
				if(data.user){
					$("#txtMonthlyTarget").val('$ '+ data.user.sumtarget);
					$("#txtTodayTarget").val('$ ' + data.user.sumtodaytarget);
					$("#txtTodayAchievement").val('$ ' + data.user.today_achievement);
					$("#txtMonthToDateAchievement").val('$ ' + data.user.month_achievement);
					$("#txtYearToDateAchievement").val('$ ' + data.user.year_achievement);
					$("#txtTodayAchievementPercent").val('% ' + data.user.today_achievement_percent);
					$("#txtMonthToDateAchievementPercent").val('% ' + data.user.month_achievement_percent);
					$("#txtYearToDateAchievementPercent").val('% ' + data.user.year_achievement_percent);
					$('.md-input-wrapper').addClass('md-input-filled');
				}else{
					$("#txtMonthlyTarget").val('$ 0.00');
					$("#txtTodayTarget").val('$ 0.00');
					$("#txtTodayAchievement").val('$ 0.00');
					$("#txtMonthToDateAchievement").val('$ 0.00');
					$("#txtYearToDateAchievement").val('$ 0.00');
					$("#txtTodayAchievementPercent").val('% 0');
					$("#txtMonthToDateAchievementPercent").val('% 0');
					$("#txtYearToDateAchievementPercent").val('% 0');
					$('.md-input-wrapper').addClass('md-input-filled');
				}
				modal.hide();
			},
			error: function(data){
				$("#txtNumberOfWorking").val(26);
				modal.hide();
				console.log(data);
			}
		});
	});


	var sales = {};

	// TODO: LIST ALL USERS
	sales.getAllSales = function(URL){
		var selectedDate = moment($("#txtTransactionOfsaleTransactionHistory").val()).format('YYYY-MM-DD');
		//modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
		$.ajax({
			url: URL,
			type: "POST",
			dataType: "JSON",
			data: {
				'ba_id'     : $("#selectedBA").val(),
				'sale_date' : selectedDate,
				'outlet_id' : $("#txtOutletName").data("id"),
			},
			success: function(data){
				console.log(data);
				$("#PAGINATIONsaleTransactionHistory").html(data.page_links);
				if(data.sales.length>0){
					$("tbody#CONTENTSsaleTransactionHistory").html('');
					for(var i=0;i<data.sales.length;i++){
                        data.sales[i]['check']='';
                        console.log(data.sales[i]);
                        sales.formatData(data.sales[i]);
                    }
					$("#CONTENT_TEMPLATE").tmpl(data.sales).appendTo("tbody#CONTENTSsaleTransactionHistory");
				}else{
					$("tbody#CONTENTSsaleTransactionHistory").html('<tr>NO CONTENTS</tr>');
				}
				//modal.hide();
			},
			error: function(data){
				modal.hide();
				console.log(data);
			}
		});
	};

	// TODO: SALES FORMART DATA
	sales.formatData = function(val){
        
    }

    // TODO: PAGINATION ON SALES
	$('body').on('click', '.uk-pagination a', function(e){
		e.preventDefault();
		var URL = $(this).attr('href');
		if(URL!="#"){
			sales.getAllSales(URL);
		}
		return false;
	});
	
	$(document).on('click',"#btnDelete", function(e){
		if(confirm("Do you really want to delete it?")){
			var _this = $(this);
			modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
			$.ajax({
				url: SITE_URL+"supervisor/deleteSale",
				type: "POST",
				dataType: "JSON",
				data: {
					'product_id' : _this.parent().data("productid"),
					'sale_id' : _this.parent().data("saleid")
				},
				success: function(data){
					sales.getAllSales(SITE_URL+"supervisor/ajax");
				},
				error: function(data){
					modal.hide();
					console.log(data);
				}
			}).done(function(){
				modal.hide();
			});
		}		
	});
	
	$(document).on('click','#btnUpdate', function(){
		//alert($(this).parent().data("productid"));
		$("#selectedItemCode").val($(this).parent().data("itemcode"));
		$("#selectedItemName").val($(this).parent().data("itemname"));
		$("#txtQuantitySold").val($(this).parent().data("quantitysold"));
		$("#txtPrice").val($(this).parent().data("price"));
		$("#txtAmount").val($(this).parent().data("amount"));
		$("#txtPromotion").val($(this).parent().data("promotionname"));
		$("#btnSave").data("productid", $(this).parent().data("productid"));
		$("#btnSave").data("saleid", $(this).parent().data("saleid"));
		$("#btnSave").data("promotionid", $(this).parent().data("promotionid"));
		var modalPopup = UIkit.modal("#modalAddNewSale");
		if ( modalPopup.isActive() ) {
		    modalPopup.hide();
		} else {
		    modalPopup.show();
		}
	});
	
	$("#txtQuantitySold").change(function(){
		$("#txtAmount").val($("#txtQuantitySold").val() * $("#txtPrice").val());
		modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
		$.ajax({
			url: SITE_URL+"supervisor/checkpromotion",
			type: "POST",
			dataType: "JSON",
			data: {
				'product_id' : $("#btnSave").data("productid"),
				'quantity' : $("#txtQuantitySold").val()
			},
			success: function(data){
				console.log(data);
				if(data.promotion){
					$("#btnSave").data("promotionid", data.promotion.id);
					$("#txtPromotion").val("BUY "+ data.promotion.buy + " FREE " + data.promotion.free);
				}else{
					$("#btnSave").data("promotionid", "");
					$("#txtPromotion").val("");
				}
				modal.hide();
			},
			error: function(data){
				console.log(data);
				modal.hide();
			}
		}).done(function(data){
			console.log(data);
			modal.hide();
		});
	});
	
	$(document).on('click', "#btnSave", function(e){
		e.preventDefault();
		modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
		$.ajax({
			url: SITE_URL+"supervisor/updatesale",
			type: "POST",
			dataType: "JSON",
			data: {
				'sale_id' : $("#btnSave").data("saleid"),
				'product_id' : $("#btnSave").data("productid"),
				'quantity' : $("#txtQuantitySold").val(),
				'promotion_id': $("#btnSave").data("promotionid")
			},
			success: function(data){
				console.log(data);
				UIkit.modal.alert(data.message);
				modal.hide();
			},
			error: function(data){
				console.log(data);
				modal.hide();
			}
		}).done(function(data){
			console.log(data);
			modal.hide();
		});
	});
	
	$("#btnClose").click(function(){
		sales.getAllSales(SITE_URL+"supervisor/ajax");	
	});

	// TODO: ON CHANGE ON Transaction Of Date
	$("#txtTransactionOfsaleTransactionHistory").change(function(){
		sales.getAllSales(SITE_URL+"supervisor/ajax");

	});


	var dataSource;
	var dataSourceProducts;
	$("#txtTransactionOf").change(function(){
		//Assign grid to variable
		var grid = $("#grid1").data("kendoGrid");
		//Set url property of the grid data source
		grid.dataSource.transport.options.read.url = SITE_URL + "supervisor/products/"+moment($("#txtTransactionOf").val()).format("YYYY-MM-DD");
		
		//Read data source to update
		grid.dataSource.read();
		
		//$('.k-i-refresh').click();
	});
	//function init(URL){
		//TODO: KENDO GRID	
		dataSource = new kendo.data.DataSource({
		   	/*pageSize: 20,*/
		   	//data: data.products,
		   	change: function(e) {
		      	if (e.action == "itemchange")  {
		        	if (e.field == "price" || e.field == "quantity") {
		          		var item=  e.items[0];
		          		if(item.quantity=="" || item.price=="" || item.quantity===undefined || item.price ===undefined){
		          			return false;
		          		}else{
		         			item.trigger("change", {field: "amount"});
		         		}
		       		}
		       		
		       		if(e.field =="quantity"){
		       			var item = e.items[0];
		       			if(item.quantity=="" || item.price=="" || item.quantity===undefined || item.price ===undefined){
		          			return false;
		          		}else{
		         			item.promotion = item.promotion_id;
		         			item.trigger("change", {field: "promotion_name"});
		         		}
		       		}
	       		}
	
		    },
		   	transport: {
		        read:  {
		            url: SITE_URL + "supervisor/products/"+moment($("#txtTransactionOf").val()).format("YYYY-MM-DD"),
		            dataType: "json"/*,
		            beforeSend: function(){
	         			modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
	                },
	                complete: function(data){
	                	modal.hide();
	                }*/
		        },
		        update: {
		            url: SITE_URL + "supervisor/products_update",
	                type: "POST",
	                data: {
	                	"ba_id" : 1,
	                	"outlet_id" : $("#txtOutletName").data("id"),
	                	"sale_date" : moment($("#txtTransactionOf").val()).format("YYYY-MM-DD") +" "+ moment().format("HH:mm:ss")
	                },
	                dataType: "json",
	                beforeSend: function(){
	         			modal = UIkit.modal.blockUI("<div class='uk-text-center'>Processing...<br/><img class='uk-margin-top' src='"+SITE_URL+"public/assets/img/spinners/spinner.gif' alt=''"); 
	                },
	                complete: function(data){
	                	modal.hide();
	                	//console.log(data.responseText.message);
	                	$("#grid1").data("kendoGrid").refresh();
	                	//$("#grid1").data("kendoGrid").dataSource.empty();
	                	//$("#grid1").data('kendoGrid').dataSource.data([]);  
	                	sales.getAllSales(SITE_URL+"supervisor/ajax");
	                }
		        },
		        parameterMap: function(options, operation) {
		            if (operation !== "read" && options.models) {
	                    return { 
	                    	models: kendo.stringify(options.models),
	                    	//models: options.models,
	                    	ba_id : $("#selectedBA").val(),
	                    	outlet_id : $("#txtOutletName").data("id"),
	                    	sale_date : moment($("#txtTransactionOf").val()).format("YYYY-MM-DD") +" "+ moment().format("HH:mm:ss")
	
	                    };
	                }
		        }
		    },
		   batch: true,
		   /*autoSync: true,*/
		   schema: {
		       model: {
		       	 Total:function() {
		       	 	var value = this.get("price") * this.get("quantity");
		       	 	if(value!==NaN){
		          		return value;
		          	}
		         },
		         Name: function() {
		         	return this.get("name");
		         },
		         Promotion: function(){
		         	if(this.get("quantity")>=this.get("buy")){
		         		return (this.get("promotion_name1")==null ? "" :this.get("promotion_name1"));
		         	}else{
		         		return "";
		         	}
		         },
		         id: "product_id",
	             fields: {
	             	product_id: { editable: true, nullable: false},
	                code: { editable: true, nullable: false },
	                name: { editable: true },
	                price: { editable: true, nullable: false},
	                quantity: { type: "number", editable: true, validation: { required: {message: "Must not be empty!"}, min: 1} },
	                amount: { 
	                	editable: false,  validation: { min:0}
	                },
	                promotion: { },
	                promotion_name: { 
	                	editable: true
	                },
	                promotiontype: { editable: true},
	                promotiontype1: {},
	                promotion_type_id: {},
	                promotion_id:{},
	                remark: {editable: false},
	             },
	
		       }
		   }
		});
		
	
	    /*dataSourceProducts = new kendo.data.DataSource({
	       transport: {
	            read:  {
	                url: SITE_URL + "supervisor/products/"+moment($("txtTransactionOf").val()).format("YYYY-MM-DD"),
	                dataType: "json"
	            },
	            parameterMap: function(options, operation) {
	                if (operation !== "read" && options.models) {
	                    return { 
	                    	models: kendo.stringify(options.models)
	                    };
	                }
	            }
	        }
	    });*/
	
		var _grid = $("#grid1").kendoGrid({
			dataSource: dataSource,
		    sortable: true,
		    pageable: false,
		    pageSize: 20,
		    toolbar: ["save"],
		    editable: true,
		    selectable: true,
		    columns: [
	            { field:"product_id",title:"Id", hidden: true},
	            { field: "code", title: "Code", width:"13%" /*, 
		    		editor: function(container, options) {
	        			console.log(container, options);
	        			console.log(dataSource);
		                $("<input data-bind='value:code' />")
	                    .attr("id", "ddl_roleTitle")
	                    .appendTo(container)
	                    .kendoDropDownList({
	                        dataSource : dataSourceProducts,
	                        dataTextField: "code",
	                        dataValueField: "code",
	                        filter: "contains",
	                        template: "<span data-id='${data.code}'>${data.code}</span>",
	                        select: function(e) {
	                        	console.log(this.dataItem(e.item.index()));
	                            var id = e.item.find("span").attr("data-id");
	                            var dataItem = e.sender.dataItem();
	                            options.model.set("name", this.dataItem(e.item.index()).name);
	                            options.model.set("price", this.dataItem(e.item.index()).price);
								options.model.set("product_id", this.dataItem(e.item.index()).product_id);
								options.model.set("quantity", 1);
								options.model.set("amount", this.dataItem(e.item.index()).amount);
								options.model.set("promotion_id", this.dataItem(e.item.index()).promotion);
								options.model.set("promotion_name1", this.dataItem(e.item.index()).promotion_name);
								options.model.set("buy", this.dataItem(e.item.index()).buy);
								if(this.dataItem(e.item.index()).buy>1){
									//options.model.set("promotion_name", "");	
								}else{
									options.model.set("promotion", this.dataItem(e.item.index()).promotion);
									options.model.set("promotion_name", this.dataItem(e.item.index()).promotion_name);
								}
								options.model.set("promotiontype", this.dataItem(e.item.index()).promotiontype);
	                        }
	                    });
					}*/ 
	        	},
	            { field: "name", title:"Product Name"},
	            { field: "price", title: "Unit Price", format: "{0:c2}", width: "10%", attributes: {'data-format': 'c' },},
	            { field: "quantity", title: "Quantity", width: "10%"},
	            { field: "amount", title: "Amount", format: "{0:c}", width: "10%", template: "#=Total()#" },
	            { field: "promotion", title: "Promotion", width: "0%", hidden:true}, 
	            { field: "promotion_name", title: "Promotion", width:"20%", template: "#=Promotion()#"},
	            { field: "promotiontype", title: "Promotion Type", width: "20%", hidden:true},
	            { field: "remark", title: "Remark", width: "10%"},
	            /*{ field: "promotiontype1", title: "Promotion Type", width: "10%",
	        		editor: function(container, options) {
	        			var dataSource = $.parseJSON('[' + options.model["promotiontype"] + ']');
	        			console.log(container, options);
	        			console.log(dataSource);
		                $("<input data-bind='value:promotiontype1.id' />")
	                    .attr("id", "ddl_roleTitle")
	                    .appendTo(container)
	                    .kendoDropDownList({
	                        dataSource : new kendo.data.DataSource({
							    data : dataSource											    
							}),
	                        dataTextField: "name",
	                        dataValueField: "id",
	                        template: "<span data-id='${data.id}'>${data.name}</span>",
	                        select: function(e) {
	                        	console.log(this.dataItem(e.item.index()));
	                            var id = e.item.find("span").attr("data-id");
	                            var dataItem = e.sender.dataItem();
								options.model.set("promotiontype1", this.dataItem(e.item.index()).name);
								options.model.set("promotion_type_id", this.dataItem(e.item.index()).id);
	                        }
	                    });
					}
			    },*/
			    { command: { text: "Save", name: "Save", click: onSave }, title: " ", width: "10%"}
	        ],
	        create: true,
		});

	//}
	
	//init(SITE_URL + "supervisor/products/"+moment($("txtTransactionOf").val()).format("YYYY-MM-DD"));
	
	
	
	function onSave(e){
		//_grid.saveChanges();
		$("#grid1").data("kendoGrid").saveChanges(); 
	}
	
	function dateTimeEditor(container, options) {
    	$('<input data-text-field="' + options.field + '" data-value-field="' + options.field + '" data-bind="value:' + options.field + '" data-format="' + options.format + '"/>')
            .appendTo(container)
            .kendoDatePicker({
            	format: "yyyy-MM-dd",
            	parseFormats:["yyyy-MM-dd"],
            	culture: "de-DE"
            });
	}
	
});