var app = {
	paused : 0,
	init : function(){
		// add full screen object
		$('body').prepend('<div id="cover"></div>');
		//if mouse moves hide object
		$(document).mousemove(function(e){
			$('#cover').hide();
		})

		// check every 5 seconds to see if object has been hidden by mouse move
		var int = setInterval(function(){
			if($('#cover').is(":hidden")){
				$('#cover').show();
				app.paused = 0;
			}else{
				app.paused += 5;
			}
			//if mouse hasn't moved in 60 seconds go back to main page
			if(app.paused >= 15){
				window.location = '/';
			}
			// console.log(app.paused);
		}, 5000);

	}
}

$(document).ready(function() {
    // app.init();
});
