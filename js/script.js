/* Author: 
	Thomas Gaillard
*/

$('body').fullScreen();

//global vars
var currentWeek = 0;
var incCurWeek  = 0;
var doc = "";

//get data
$.ajax({
	url: "http://eppur-creation.com/edt/queries.php",
	success: function(data){
		doc = data;
		generateImg();
  	}
});


$("#l3INFO").click(function(){
	$("#l3GI").removeClass('active');
	$("#l3INFO").addClass('active');
	$.ajax({
		type: "POST",
		url: "http://eppur-creation.com/edt/queries.php",
		data: "branchId=3418",
		success: function(data){
			doc = data;
			generateImg();
	  	}
	});
});

$("#l3GI").click(function(){
	$("#l3INFO").removeClass('active');
	$("#l3GI").addClass('active');
	$.ajax({
		type: "POST",
		url: "http://eppur-creation.com/edt/queries.php",
		data: "branchId=3348",
		success: function(data){
			doc = data;
			generateImg();
	  	}
	});
});


//generate img for a given day and a given week
function generateImg(week){
	var d = new Date();
	var day = d.getDay()-1;
	if(day > 4 || day < 0){
		if(incCurWeek == 0){
			currentWeek++;
			incCurWeek++;
		}
	}
	//initialize week
	if(typeof(week) == 'undefined')
		week = currentWeek;
	var docs = doc.split('"');
	//get links
	var linkImg = docs[19];
	//add protocol and domain
	linkImg = String("http://ade52-savoie.grenet.fr"+linkImg);
	
	//split string
	var splitLinkImg = linkImg.split('&');
	var project = splitLinkImg[1];
	var tree = splitLinkImg[4];
	
	var sp0Url = splitLinkImg[0];
	var sp1PianoWeek = splitLinkImg[2];
	sp1PianoWeek = parseInt(parseInt(sp1PianoWeek.split('=')[1])+parseInt(week));
	var sp2LunchName = splitLinkImg[7];
	var sp3DisplayMode = splitLinkImg[8];
	var sp4Ttl = splitLinkImg[10];
	var sp5DisplayConfId = splitLinkImg[11]; //bug - until 19PM
	var pianoDay = '0%2C1%2C2%2C3%2C4';
	var width = $('#content').width();
	var height = $('#content').height()-44;
	
	//rebuild string with params	
	linkImg=String(sp0Url+"&"+project+"&idPianoWeek="+sp1PianoWeek+"&idPianoDay="+pianoDay+"&"+tree+"&width="+width+"&height="+height+"&"+sp2LunchName+"&"+sp3DisplayMode+"&showLoad=false"+"&"+sp4Ttl+"&"+"displayConfId=26");
	//insert img into div
	$('#content').fadeOut('fast');
	$('#content').empty();
	$('#content').append("<img src='"+linkImg+"' width='100%' height='100%'/>");
	$('#content').fadeIn('slow');
};

$(document).keydown(function(e){
	switch(e.keyCode){ 
		case 37: 
			currentWeek--;
			generateImg(currentWeek);
			break;
		case 39: 
			currentWeek++;
			generateImg(currentWeek);
			break;
	}
});

$("#prev").click(function(){
	currentWeek--;	
	generateImg(currentWeek);
});

$("#next").click(function(){
	currentWeek++;	
	generateImg(currentWeek);
});

//hackto prevent "guirlande de noel" under non-small device ouchhhhh
if($('#content').width() < 722){
	var previousOrientation = 0;
	var checkOrientation = function(){
		if(window.orientation !== previousOrientation){
			previousOrientation = window.orientation;
			generateImg(currentWeek);
		}
	};
	
	window.addEventListener("resize", checkOrientation, false);
	window.addEventListener("orientationchange", checkOrientation, false);
}
// (optional) Android doesn't always fire orientationChange on 180 degree turns
setInterval(checkOrientation, 2000);





var el = document.getElementById('fullscreenBtn');
	if(el){
		el.addEventListener('click', function(e){
			
			
			var docElm = document.body;
			if (docElm.requestFullscreen) {
			    docElm.requestFullscreen();
			}
			else if (docElm.mozRequestFullScreen) {
			    docElm.mozRequestFullScreen();
			}
			else if (docElm.webkitRequestFullScreen) {
			    docElm.webkitRequestFullScreen();
			}
			
			
		}, false );
	}
