

(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
 
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
 
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());

function create_treasure (treasure_id, container_id, link){
	$(treasure_id).parent().next().hide();
	var treasure,
		treasureImage,
		canvas;					

	function gameLoop () {
	
	  window.requestAnimationFrame(gameLoop);

	  treasure.update();
	  treasure.render();
	}
	
	function sprite (options) {
	
		var that = {},
			frameIndex = 0,
			tickCount = 0,
			animationDirection = 0,
			ticksPerFrame = options.ticksPerFrame || 0,
			numberOfFrames = options.numberOfFrames || 1,
			revealed = false;
		
		that.context = options.context;
		that.width = options.width;
		that.height = options.height;
		that.image = options.image;
		that.frame_height = options.frame_height;
		that.frame_width = options.frame_width;
		
		$(container_id).mouseover(function() {
								animationDirection = 1;
						});
						$(container_id).mouseout(function() {
								if(revealed)
								{
									revealed = false;
									$(treasure_id).parent().next().stop(true, true);
									$(treasure_id).parent().next().hide();
									$(container_id).css( "cursor", "auto");
									$(container_id).unbind("click");
								}
								animationDirection = -1;
						});
		that.update = function () {
						
						tickCount += 1;

            if (tickCount > ticksPerFrame) {

								tickCount = 0;
								if(frameIndex <= 0 && animationDirection == -1)
								{
									animationDirection = 0;
								}
								
								
								if(frameIndex >= numberOfFrames - 1 && animationDirection == 1)
								{
									animationDirection = 0;
									
									if(!revealed)
									{
										revealed = true;
										$(treasure_id).parent().next().fadeIn();
										$(container_id).css( "cursor", "pointer");
										$(container_id).bind("click", function() {
											window.location = link;
										});
									}
								}
								
								
				
                frameIndex += animationDirection;
             
            }
        };
		
		that.render = function () {
		
		  // Clear the canvas
		  that.context.clearRect(0, 0, that.width, that.height);
		  
			var x_index = frameIndex % (that.width / that.frame_width);
			var y_index = Math.floor((frameIndex * that.frame_width) / that.width);
		  // Draw the animation
		  that.context.drawImage(
		    that.image,
				x_index * that.frame_width,
		    y_index * that.frame_height,
		    that.frame_width,
		    that.frame_height,
		    0,
		    0,
		    that.frame_width,
		    that.frame_height);
		};
		
		return that;
	}
	
	// Get canvas
	canvas = document.getElementById(treasure_id.substring(1));
	canvas.width = 69;
	canvas.height = 78;
	
	// Create sprite sheet
	treasureImage = new Image();	
	
	// Create sprite
	treasure = sprite({
		context: canvas.getContext("2d"),
		width: 345,
		height: 468,
		image: treasureImage,
		numberOfFrames: 26,
		frame_width: 69,
		frame_height: 78,
		ticksPerFrame: 0
	});
	
	// Load sprite sheet
	treasureImage.addEventListener("load", gameLoop);
	treasureImage.src = "/images/treasure_chest_69x78.png";

};

