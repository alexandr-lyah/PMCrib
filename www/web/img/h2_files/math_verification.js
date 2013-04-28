/*Math Verification Script begin*/
function showTweetmemeOnScroll(id, html, showed){
	$(window).scroll(function(){
		scrolled = $(window).scrollTop();
		toScroll = $("#tweetmeme_"+id).offset();
		toScroll = toScroll.top - window.innerHeight;
		if(!showed && scrolled > toScroll){
			$("#tweetmeme_"+id).html(html);
			showed = true;
		}
	});
}

function ajaxNonceObject(action,nonce,callback){
	$.ajax({
		url: MyAjax.ajaxurl ,
		async: true,
		dataType: 'json',
		type: 'POST',
		data: {
			action: action,
			nonce: nonce,
		},
		success: function(json) {
			callback(json);
		}
	});
}

function displayCommentMathVerification(message){
	$("#mv_comment_verification").append(message);
}

function setUpCommentMathVerification(json){
	if(json.isValid){ displayCommentMathVerification("<div><div id='mv_question'><img src='"+json.image+"' /></div><div id='mv_guess'><input type='text' name='mv_guess' id='mv_guess_field' /><input type='hidden' name='"+MyAjax.answerNonceField+"' value='"+json.nonce+"' /></div></div>");} 
	else { displayMathVerification("<p class='error'>"+json.message+"</p>"); }
	
}


function getCommentMathVerification(json){
	if(json.isValid){ ajaxNonceObject("get_numbers",json.nonce,setUpCommentMathVerification); }
	else { displayMathVerification("<p class='error'>"+json.message+"</p>"); }
}

function authenticateCommentMathVerification(){
	ajaxNonceObject("get_authentication",MyAjax.initialNonce,getCommentMathVerification);
}

function displayMathVerification(message){
	$("#mv_verification").append(message);
}
function setUpMathVerification(json){
	if(json.isValid){ displayMathVerification("<div><div id='mv_question'><img src='"+json.image+"' /></div><div id='mv_guess'><input type='text' name='mv_guess' id='mv_guess_field' /><input type='hidden' name='"+MyAjax.answerNonceField+"' value='"+json.nonce+"' /></div></div>");} 
	else { displayMathVerification("<p class='error'>"+json.message+"</p>"); }
	
}


function getMathVerification(json){
	if(json.isValid){ ajaxNonceObject("get_numbers",json.nonce,setUpMathVerification); }
	else { displayMathVerification("<p class='error'>"+json.message+"</p>"); }
}

function authenticateMathVerification(){
	ajaxNonceObject("get_authentication",MyAjax.initialNonce,getMathVerification);
}
/*Math Verification Script end*/