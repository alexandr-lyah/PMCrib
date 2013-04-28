
$(document).ready(function() {
    $(".overlayLogin").colorbox({iframe:true, innerWidth:"536px", innerHeight:"380px", scrolling:false, opacity: 0.45});
    $(".overlayRegister").colorbox({iframe:true, innerWidth:"536px", innerHeight:"450px",  scrolling:false,opacity: 0.45});
  
    $(".overlayLogin").attr('href','/login/?nh=true');
    $(".overlayRegister").attr('href','/login/?action=register&nh=true');

    $("img.lzy").lazyload({ threshold : 150 , skip_invisible : false}); 
    $(".youtube-preview img.lzy").lazyload({ threshold : 0 , skip_invisible : false}); 
    $(".post-content a.heroImg img.lzy").lazyload({ threshold : 150 }); 
    $("#ihmp_box .ihmp_item img.ihmp_image").lazyload({ threshold : 5 , skip_invisible : false});
    $(".cbyoutube").colorbox({iframe:true, innerWidth:"75%", innerHeight:"75%"});
    
    $('.widget.ad .youtube-preview ').show();
	
	/** Adding for comments **/
    $("#comment").keyup(function(e){
        $.cookie('comment_data', encodeURI($(this).val()),{path:'/'} );
        $.cookie('from_comment_async', 1,{path:'/'} );
    });
    
    /** Adding for social newsletter signup **/
    if ( $("input[name='newsletter']").length ) {
    	
    	if ( $("input[name='newsletter']").is(':checked') ) {
    		$.cookie('nsdata', 'on',{path:'/', expires:1} );
    	} else {
    		$.cookie('nsdata', 'off',{path:'/', expires:1} );
    	}
    	
    	$("input[name='newsletter']").click( function(){
    		if ( $("input[name='newsletter']").is(':checked') ) {
    			$.cookie('nsdata', 'on',{path:'/', expires:1} );
    		} else {
    			$.cookie('nsdata', 'off',{path:'/', expires: 1} );
    		}
    	});
	} else {
		$.cookie('nsdata', null);
	}
	

    
});




/*Share Button Pop-ups*/
$(document).ready(function(){
	/*Facebook Share Button Pop-Up*/
	var facebookLink = $(".facebook-icon").attr('href');
	$(".facebook-icon").attr('href','javascript:void(0)');
	$(".facebook-icon").attr('target','_self');
	$(".facebook-icon").click(function() {popup(facebookLink);});
	
	$(".facebook-link").attr('href','javascript:void(0)');
	$(".facebook-link").attr('target','_self');
	$(".facebook-link").click(function() {popup(facebookLink);});
	/*Facebook Share Button Pop-up end*/
	
	/*Tumblr Share Button Pop-Up*/
	var tumblerLink = $(".tumblr-share").attr('href');
	$(".tumblr-share").attr('href','javascript:void(0)');
	$(".tumblr-share").attr('target','_self');
	$(".tumblr-share").click(function() {popup(tumblerLink);});
	/*Tumblr Share Button Pop-up end*/
	
	function popup(link) {
		var generator=window.open(link,'name','height=400,width=500');
		generator.document.close();
	}
});
/*End Share Button Pop-ups*/


