
var dummypicurl = "http://m.c.lnkd.licdn.com/media/p/2/000/022/3e0/2824410.jpg";
var dummyjobwrong = "Bus driver";
var dummycompanywrong = "Lucas Arts";

var name = "";
var pictureurl_right = "";
var pictureurl_wrong = "";
var job_right = "";
var job_wrong = "";
var company_right = "";
var company_wrong = "";
var score = 0;

//for buggy hide/show
var hasReachedEnd = true;

function getNextData() {
	console.log("getNextData, hasReachedEnd = " + hasReachedEnd)
	if(!hasReachedEnd) {
		console.log("break!! " + hasReachedEnd);
		return;
	}
	$.getJSON('details.php', function(data) {
		console.log("new data loaded");
		var items = [];
		$.each(data, function(key, val) {
			if(key =="cool") {
				$.each(val, function(key2, val2) {
					console.log("cool key2 = " + key2);
					if(key2 == "name") {
						name = val2;
					}
					else if(key2 == "pic") {
						pictureurl_right = val2;
					}
					else if(key2 == "job") {
						job_right = val2;
						console.log("job_right = " + job_right);
					}
					else if(key2 == "company") {
						company_right = val2;
						console.log("company_right = " + company_right);
					}
				});
			}
			else {
				$.each(val, function(key2, val2) {
					if(key2 == "pic") {
						pictureurl_wrong = val2;
						if (pictureurl_wrong == null || pictureurl_wrong == "null" || pictureurl_wrong == "") {
							pictureurl_wrong = dummypicurl;
						}
					}
					else if(key2 == "job") {
						job_wrong = val2;
						if (job_wrong == null || job_wrong == "null" || job_wrong == "") {
							job_wrong = dummyjobwrong;
						}
						console.log("job_wrong = " + job_wrong);
					}
					else if(key2 == "company") {
						company_wrong = val2;
						console.log("company_wrong = " + company_wrong);
						if (company_wrong == null || company_wrong == "null" || company_wrong == "") {
							company_wrong = dummycompanywrong;
						}
					}
				});
			}
	  });
		updateInitialInfo();
	})
}


$(document).ready(function(){
	getNextData();
	$(".profilepic").click(function() {
		var pictureCorrect = pictureIsCorrect($(this).attr("src"));
		updateScore(pictureCorrect);
		var newclassname = "picclickedwrong";
		var scoreChange = -1;
		if(pictureCorrect) {
			newclassname = "picclickedright";
			scoreChange = 1;
		}
		updateScore(scoreChange);
	  $(this).parent().parent().addClass(newclassname);
		$("#continuepicturebutton").show();
	});
	
	$("#continuepicturebutton").click(function() {
		showJobQuestion();
	});
	$('.personjob').click(function() {
		var jobCorrect = jobIsCorrect($(this).html());
		showJobCorrect(jobCorrect, this);
	})
	
	$("#continuejobbutton").click(function() {
		showCompanyQuestion();
	});
	
	$('.personcompany').click(function() {
		var companyCorrect = companyIsCorrect($(this).html());
		showCompanyCorrect(companyCorrect, this);
	});
	
	
	$("#continuecompanybutton").click(function() {
		showEndResult();
	});
	
	$(".reconnectbutton").click(function() {
		console.log("reconnect button class clicked");
		refresh();
		getNextData();
	});
});

function pictureIsCorrect(pictureSrc) {
	//console.log(" pictureSrc = " + pictureSrc)
	return pictureSrc == pictureurl_right;
}

function updateInitialInfo() {
	hasReachedEnd = false;
	$('#namecontainer').html(name);
	if(randomBoolean()) {
		$('#picright').attr("src", pictureurl_right);
		$('#picleft').attr("src", pictureurl_wrong);
	}
	else {
		$('#picright').attr("src", pictureurl_wrong);
		$('#picleft').attr("src", pictureurl_right);
	}
}

function showJobQuestion() {
	console.log("showJobQuestion");
	$('#titlecompanyquestion').html("What is their title?");
	$("#titlequestion").show();
	$(".personjob").show();
	$(".personjob").addClass("buttonWhite");
	
	$('#titlepiccorrect').attr("src", pictureurl_right);
	$('#namecorrect').html(name);
	$("#picturequestion").hide();
	$("#continuecompanybutton").hide();
	console.log("job one html: " + $('#titleone').html());
	console.log("job two html: " + $('#titletwo').html());
	if(randomBoolean()) {
		$('#titleone').html(job_wrong);
		$('#titletwo').html(job_right);
	}
	else {
		$('#titleone').html(job_right);
		$('#titletwo').html(job_wrong);
	}
	console.log("post job one html: " + $('#titleone').html());
	console.log("post job two html: " + $('#titletwo').html());
}

function randomBoolean() {
	randomvalue = Math.random();
	return randomvalue > 0.5;
}


function jobIsCorrect(jobTitle) {
	return jobTitle == job_right;
}

function companyIsCorrect(company) {
	return company == company_right;
}

function showCompanyQuestion() {
	console.log("showCompanyQuestion");
	$('#titlecompanyquestion').html("What is their company?");
	$('#jobcorrect').html(job_right);
	$('.personjob').hide();
	$('#continuejobbutton').hide();
	$(".personcompany").addClass("buttonWhite");
	if(randomBoolean()) {
		$('#companyone').html(company_wrong);
		$('#companytwo').html(company_right);
	}
	else {
		$('#companyone').html(company_right);
		$('#companytwo').html(company_wrong);
	}
	console.log("$('#companyone').html = " + $('#companyone').html() + ", company_wrong = " + company_wrong);
	console.log("$('#companytwo').html = " + $('#companytwo').html() + ", company_right = " + company_right);
	$('.personcompany').show();

}

function showJobCorrect(correct, clickedButton) {
	var classname = "correctbutton";
	var scoreChange = 1;
	if(!correct) {
		classname = "incorrectbutton";
		scoreChange = -1;
	}
	$(clickedButton).removeClass("buttonWhite");
	$(clickedButton).addClass(classname);
	$('#continuejobbutton').show();
	$('#continuejobbutton').css("visibility", "visible");
	updateScore(scoreChange);
}

function showCompanyCorrect(correct, clickedButton) {
	console.log("showCompanyCorrect correct compy: " + correct);
	$('#continuecompanybutton').show();
	$('#continuecompanybutton').css("visibility", "visible");
	console.log("clickedButton:" + clickedButton);
	var classname = "correctbutton";
	var scoreChange = 1;
	if(!correct) {
		classname = "incorrectbutton";
		scoreChange = -1;
	}
	$(clickedButton).removeClass("buttonWhite");
	$(clickedButton).addClass(classname);
	//$('#continuecompanybutton').css("visibility", "visible");
	updateScore(scoreChange);
	hasReachedEnd = true;
	console.log("hasReachedEnd = " + hasReachedEnd);
}

function showEndResult() {
	$('#titlequestion').hide();
	$('#picright2').attr("src", pictureurl_right);
	
	$('#reconnectname').html(name);
	$('#reconnectjob').html(job_right);
	$('#reconnectcompany').html(company_right);
	
	$('#getintouchquestion').show();
	$('.reconnectbutton').show();
}

function updateScore(scoreChange) {
	 score += scoreChange;
	 $('#scorenumber').html("" + score);
}
 
function refresh() {
	
	$('#picturequestion').show();
	$('#titlequestion').hide();
	$('#getintouchquestion').hide();
	$('.reconnectbutton').hide();
	$('#continuepicturebutton').hide();
	$('.personcompany').removeClass("correctbutton");
	$('.personcompany').removeClass("incorrectbutton");
	$('.personcompany').hide();
	//$('.personcompany').html('');
	
	$('.personjob').removeClass("correctbutton");
	$('.personjob').removeClass("incorrectbutton");
	//$('.personjob').html('');
	
	$('#leftprofilepicframe').removeClass("picclickedright");
	$('#rightprofilepicframe').removeClass("picclickedright");
	$('#leftprofilepicframe').removeClass("picclickedwrong");
	$('#rightprofilepicframe').removeClass("picclickedwrong");
	
	$('#reconnectinfo').children().html('');
	$('.beneathpictext').html('');
	
}
