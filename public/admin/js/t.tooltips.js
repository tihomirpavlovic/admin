/*  
	tooltipsData = [ 
		{ x:10, y:50, content:"text" }, 
		{ x:20, y:50, content:"<b>html bold</b>", className:"red" }, 
		{ x:20, y:50, content:"<i>html italic</i>" } 
	]
	
	drawTooltips(".tooltipsWrap", tooltipsData);
*/

function drawTooltips( wrapSelector, data ){
	$(wrapSelector).css("position", "relative");
	
	for (i = 0; i < data.length; i++) {
		className = typeof(data[i].className)=="undefined" ? "" : data[i].className;
		link = typeof(data[i].link)=="undefined" ? "" : data[i].link;
		if ( link == '') {
			$(wrapSelector).append('<div class="tooltipPoint ' + className +'" style="left:' + data[i].x + '%; top:' + data[i].y + '%;" ><span>'+ data[i].orderNumber+'</span><div style="position:relative;z-index:100;"><div class="tooltipBox '+ data[i].position +'">' + data[i].content + '</div></div></div>')
		}else{		
			$(wrapSelector).append('<a target="_blank" href="'+link+'"><div class="tooltipPoint ' + className +'" style="left:' + data[i].x + '%; top:' + data[i].y + '%;" ><span>'+ data[i].orderNumber+'</span><div style="position:relative;z-index:100;"><div class="tooltipBox '+ data[i].position +'">' + data[i].content + '</div></div></div></a>')
		}
	}
	
	if( $(wrapSelector).find("img").length > 0 ){
		$(wrapSelector).find("img").load(function(){
			$(".tooltipPoint").fadeIn("slow");
		}).each(function(index, el) {
			if ( this.complete ) $(this).load();
		});		
	}
	else{
		$(".tooltipPoint").fadeIn("slow");
	}
	
	$(".tooltipPoint").hover( 
		function(){
			$(this).find(".tooltipBox").stop(true, true).fadeToggle();
		}
	);

	$(".tooltipPoint").on('click',function(e){
		e.preventDefault(); 
		$(this).find(".tooltipBox").stop(true, true).fadeIn();
		
	})
	// if (_mobile) {
	
	// };
	
	// mouse coords tooltip
	$(".locations-tooltip").hide();

	$('.tooltipsWrap > img').on('mousemove', function(e) {

		var x = e.pageX - $(this).offset().left;
		var y = e.pageY - $(this).offset().top;

		var xp = x*100/$(this).width();
		var yp = y*100/$(this).height();

		$(".locations-tooltip").css({top:y+15, left:x+15}).html("<b>X: </b>" + xp.toFixed(1) + " <br> <b>Y</b>: " + yp.toFixed(1)).show();

	});

	$('.tooltipsWrap > img').on('mouseout', function(e) {
		$(".locations-tooltip").hide();
	});
}
