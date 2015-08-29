function draw_role_chart(adc, mid, jg, top, support) {
    var data = [
	{
	    value: adc,
	    color:"#F7464A",
	    highlight: "#FF5A5E",
	    label: "adc"
	},
	{
	    value: mid,
	    color: "#46BFBD",
	    highlight: "#5AD3D1",
	    label: "mid"
	},
	{
	    value: jg,
	    color: "#FDB45C",
	    highlight: "#FFC870",
	    label: "jg"
	},
	{
	    value: top,
	    color: "#FDB49C",
	    highlight: "#FFC890",
	    label: "top"
	},
	{
	    value: support,
	    color: "#FDBC8C",
	    highlight: "#FFB870",
	    label: "support"
	}
    ]
    var options = {
	//Boolean - Whether we should show a stroke on each segment
	segmentShowStroke : true,
	
	//String - The colour of each segment stroke
	segmentStrokeColor : "#fff",
	
	//Number - The width of each segment stroke
	segmentStrokeWidth : 2,
	
	//Number - The percentage of the chart that we cut out of the middle
	percentageInnerCutout : 50, // This is 0 for Pie charts
	
	//Number - Amount of animation steps
	animationSteps : 100,
	
	//String - Animation easing effect
	animationEasing : "easeOutBounce",
	
	//Boolean - Whether we animate the rotation of the Doughnut
	animateRotate : true,
	
	//Boolean - Whether we animate scaling the Doughnut from the centre
	animateScale : false,
	
	//String - A legend template
	legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    }
    var ctx = document.getElementById("role_chart").getContext("2d");
    new Chart(ctx).Doughnut(data,options);
}

$(document).ready(function () {
	$( ".champion_img").draggable({revert:'invalid',
				       helper: 'clone'});
	$( ".champion_slot" ).droppable({
	    accept: ".champion_img",
	    activeClass: "ui-state-hover",
	    hoverClass: "ui-state-active",
	    drop: function( event, ui ) {
		$(this).attr("src", ui.draggable.attr("src"));
            }
        });
	
	$(function() {
		$( "#champion_stats" ).dialog({
		  autoOpen: false,
		  closeOnEscape: true,
		  width: 540,
		  height: 350,
		  show: {
		    effect: "blind",
		    duration: 1000
		  },
		  hide: {
		    effect: "explode",
		    duration: 1000
		  }
		});
 
		$( ".champion_slot" ).click(function() {
			
			$( "#champion_stats" ).dialog( "open" );
			draw_role_chart(0.1, 0.2, 0.3, 0.39, 0.01);
			$(".ui-dialog").blur(function() {
				$(this).remove();
				$( "#champion_stats" ).hide();
			});
		});
	
	});
		
	
});

