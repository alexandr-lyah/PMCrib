 	var IHmpPostPages = $(".ihmp_list_panel_post").size();
 	var IHmpViewEverPages = $(".ihmp_list_panel_view_ever").size();
 	var IHmpViewMonthPages = $(".ihmp_list_panel_view_month").size();
 	var	IHmpOnPostPage = 1;
 	var IHmpOnViewMonthPage = 1;
 	var IHmpOnViewEverPage = 1;
 	$('.ihmp_hideonload').css("display","block");
 	$('#ihmp_more_view_ever').css("visibility","visible");
 	$('#ihmp_more_view_month').css("visibility","visible");
	$('#ihmp_more_post').css("visibility","visible");
 	$('#ihmp_post').hide();
 	$('#ihmp_view_ever').hide();
 	$('.ihmp_panel_hide').hide();
  	$('#ihmp_view_month').show();
 	$('#ihmp_postselect').addClass("notselected");
 	$('#ihmp_view_everselect').addClass("notselected");
 	var IHmpHeight = $('#ihmp_view_month').height();
 	var IHmpMinHeight = IHmpHeight;
	/*
	$('#ihmp_view_month').css("min-height",IHmpMinHeight+"px");
	$('#ihmp_view_ever').css("min-height",IHmpMinHeight+"px");
	$('#ihmp_post').css("min-height",IHmpMinHeight+"px");
	*/
  
 
 $("#ihmp_view_monthselect").click(function () {
 	$('#ihmp_view_monthselect').removeClass("notselected");
 	$('#ihmp_view_everselect').addClass("notselected");
 	$('#ihmp_postselect').addClass("notselected");
 	
 	$('#ihmp_post').hide();
 	$('#ihmp_view_ever').hide();
 	$('#ihmp_view_month').show();
 });
 
 $("#ihmp_view_everselect").click(function () {
 	$('#ihmp_view_everselect').removeClass("notselected");
 	$('#ihmp_view_monthselect').addClass("notselected");
 	$('#ihmp_postselect').addClass("notselected");
 	
 	$('#ihmp_post').hide();
 	$('#ihmp_view_month').hide();
 	$('#ihmp_view_ever').show();
 });
 
 $("#ihmp_postselect").click(function () {
 	$('#ihmp_postselect').removeClass("notselected");
 	$('#ihmp_view_monthselect').addClass("notselected");
 	$('#ihmp_view_everselect').addClass("notselected");
 	
 	$('#ihmp_view_month').hide();
 	$('#ihmp_view_ever').hide();
 	$('#ihmp_post').show();
 });


 $("#ihmp_more_post_link").click(function () {
 		//$(".ihmp_list_panel_post").clearQueue(); // this was throwing a function does not exist error, seems to work fine without it (ek?)
 		$('.ihmp_list_panel_post').hide();
 		IHmpOnPostPage += 1;
 		if (IHmpOnPostPage <= IHmpPostPages) {
		   		  $('#post_page_' + IHmpOnPostPage ).fadeIn("fast");
		   		  
			}
		
		if (IHmpOnPostPage > IHmpPostPages) {
			      IHmpOnPostPage = 1;  		 
		   		  $('#post_page_'+ IHmpOnPostPage ).fadeIn("fast");
			}
 		

 });
 $("#ihmp_more_view_month_link").click(function () {
 		//$(".ihmp_list_panel_view_month").clearQueue();
 		$('.ihmp_list_panel_view_month').hide();
 		IHmpOnViewMonthPage += 1;
 		if (IHmpOnViewMonthPage <= IHmpViewMonthPages) {
		   		  $('#view_month_page_' + IHmpOnViewMonthPage ).fadeIn("fast");
		   		  
			}
		
		if (IHmpOnViewMonthPage > IHmpViewMonthPages) {
			      IHmpOnViewMonthPage = 1;  		 
		   		  $('#view_month_page_'+ IHmpOnViewMonthPage ).fadeIn("fast");
			}
 
  });
 $("#ihmp_more_view_ever_link").click(function () {
 		//$(".ihmp_list_panel_view_ever").clearQueue();
 		$('.ihmp_list_panel_view_ever').hide();
 		IHmpOnViewEverPage += 1;
 		if (IHmpOnViewEverPage <= IHmpViewEverPages) {
		   		  $('#view_ever_page_' + IHmpOnViewEverPage ).fadeIn("fast");
		   		  
			}
		
		if (IHmpOnViewEverPage > IHmpViewEverPages) {
			      IHmpOnViewEverPage = 1;  		 
		   		  $('#view_ever_page_'+ IHmpOnViewEverPage ).fadeIn("fast");
			}
 
  });

 
