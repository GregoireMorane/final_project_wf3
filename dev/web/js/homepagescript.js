// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

//Define canvas element and context
var canvas = document.getElementById("demo"),
    c = canvas.getContext("2d");
//Set values in %
var value1 = 44,// Chrome
    value2 = 33,// IE
    value3 = 16,// FF
    value4 = 4,// Safari
    value5 = 3;// Opera
//Set RGBA values
var red = 100,
    green = 140,
    blue = 50,
    opacity = 0.8;
//Set Circle Properties
var width = 30,
    x = 150,
    y = 150,
    radius = 135;
//Set arrow
var arrow = 0;
//
//  DEMO #1
//
function drawCircle(color,start,end) {
	c.beginPath();
        c.lineWidth = width;
        c.strokeStyle = color;
        c.arc(x,y,radius,start,end,false);
        c.stroke();
}

function drawDemo1() {
		
	var radian = Math.PI*2/360;
	var step = radian;
        var rad1 = radian*(value1*3.6),
	    rad2 = radian*(value2*3.6),
	    rad3 = radian*(value3*3.6);
	    rad4 = radian*(value4*3.6);
	    rad5 = radian*(value5*3.6);
  
  c.clearRect(0,0,canvas.width,canvas.height);
  
  if(arrow<(Math.PI*2)-radian) {
    arrow+=step*2;
  }
  
  if (arrow>=0 && arrow<rad1) {
  
  	drawCircle("rgba(171,196,108," + opacity + ")",0,arrow);
  	$("li:eq(0) h2")
      .css("border-left","20px solid " + 
           "rgba(171,196,108," + opacity + ")")
      .css("padding-left","10px");
  	$(".chrome")
      .css("color","rgba(109,105,97,1)");
  }
  
  if (arrow>=rad1 && arrow<(rad1+rad2)) {
  
  	drawCircle("rgba(171,196,108," + opacity + ")",0,rad1);
  	drawCircle("rgba(118,143,76," + opacity + ")",rad1,arrow);
  	$("li:eq(1) h2")
      .css("border-left","20px solid " + 
           "rgba(118,143,76," + opacity + ")")
      .css("padding-left","10px");
  	$(".ff")
      .css("color","rgba(109,105,97,1)");
    
  }
  
  if (arrow>=rad1+rad2 && arrow<(rad1+rad2+rad3)) {
  
		drawCircle("rgba(171,196,108," + opacity + ")",0,rad1);
  	drawCircle("rgba(118,143,76," + opacity + ")",rad1,rad1+rad2);
	  drawCircle("rgba(196,169,104," + opacity + ")",rad1+rad2,arrow);
	  $("li:eq(2) h2")
      .css("border-left","20px solid " + 
           "rgba(196,169,104," + opacity + ")")
      .css("padding-left","10px");
	  $(".ie")
      .css("color","rgba(109,105,97,1)");
    
  }
  
  if (arrow>=rad1+rad2+rad3 && arrow<(rad1+rad2+rad3+rad4)) {
  
		drawCircle("rgba(171,196,108," + opacity + ")",0,rad1);
  	drawCircle("rgba(118,143,76," + opacity + ")",rad1,rad1+rad2);
	  drawCircle("rgba(196,169,104," + opacity + ")",rad1+rad2,rad1+rad2+rad3);
	  drawCircle("rgba(107,92,57," + opacity + ")",rad1+rad2+rad3,arrow);
	  $("li:eq(3) h2")
      .css("border-left","20px solid " + 
           "rgba(107,92,57," + opacity + ")")
      .css("padding-left","10px");
	  $(".safari")
      .css("color","rgba(109,105,97,1)");
  }
  
  if (arrow>=rad1+rad2+rad3+rad4 && arrow<=(rad1+rad2+rad3+rad4+rad5)+step) {
  
		drawCircle("rgba(171,196,108," + opacity + ")",0,rad1);
  	drawCircle("rgba(118,143,76," + opacity + ")",rad1,rad1+rad2);
	  drawCircle("rgba(196,169,104," + opacity + ")",rad1+rad2,rad1+rad2+rad3);
	  drawCircle("rgba(107,92,57," + opacity + ")",rad1+rad2+rad3,rad1+rad2+rad3+rad4);
	  drawCircle("rgba(78,73,36," + opacity + ")",rad1+rad2+rad3+rad4,arrow);
	  $("li:eq(4) h2")
      .css("border-left","20px solid " + 
           "rgba(78,73,36," + opacity + ")")
      .css("padding-left","10px");
	  $(".opera")
      .css("color","rgba(109,105,97,1)");
  }

  //Show arrow if need
  drawCircle("rgba(0,0,0,.5)",arrow	,arrow+radian);
}

var draw = setInterval(drawDemo1,20)
if (arrow>6.28) console.log(2);

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Parts', 'Nb'],
    ['Part 1',     11],
    ['Part 2',      2],
    ['Part 3',  2],
    ['Part 4', 2],
    ['Part 5',    7]
  ]);

  var options = {
    title: 'Un autre diagramme'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
