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

$(document).ready(function () {
			
	var numBirds = 6,
		birds = [],
		bird_x_spawn_min = -window.innerWidth,
		bird_x_spawn_max = -36,
		bird_y_spawn_min = 50,
		bird_y_spawn_max = 400,
		bird_height_max = 300,
		bird_height_min = 50,
		bird_bottom_height_max = 400,
		bird_bottom_height_min = 350,
		canvas;					

	function gameLoop () {
	
		window.requestAnimationFrame(gameLoop);
		
		  // Clear the canvas
		  canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);
		
		for(var i = 0; i < birds.length; i++) {
			birds[i].update();
			birds[i].render();
		}
	}
	
	function sprite (options) {
	
		var that = {},
			frameIndex = 0,
			tickCount = 0,
			ticksPerFrame = options.ticksPerFrame || 0,
			numberOfFrames = options.numberOfFrames || 1;
		
		that.context = options.context;
		that.width = options.width;
		that.height = options.height;
		that.image = options.image;
		that.frame_height = options.frame_height;
		that.frame_width = options.frame_width;
		that.x = 0;
		that.y = 0;
		
		that.update = function () {
			// do regular animation
            tickCount += 1;

            if (tickCount > ticksPerFrame) {

				tickCount = 0;
				
                // If the current frame index is in range
                if (frameIndex < numberOfFrames - 1) {	
                    // Go to the next frame
                    frameIndex += 1;
                } else {
                    frameIndex = 0;
                }
            }
			
			// check if the bird has gone off the screen
			if(that.x > canvas.width) {
				that.x = -36;//Math.random() * (bird_x_spawn_max - bird_x_spawn_min) + bird_x_spawn_min;
				that.y = Math.random() * (bird_y_spawn_max - bird_y_spawn_min) + bird_y_spawn_min;
			}
			
			// check if the bird must dive
			if(that.flying && that.y < that.max_height) {
				that.max_height = Math.random() * (bird_height_max - bird_height_min) + bird_height_min;
				that.flying = false;
			}
			// check if the bird must fly from diving
			else if(!that.flying && that.y > that.min_height) {
				that.min_height = Math.random() * (bird_bottom_height_max - bird_bottom_height_min) + bird_bottom_height_min;
				that.flying = true;
			}
			
			// Perform position change based on flying or diving
			if(that.flying) {
				that.y -= 0.5;
				that.x += 2;
			}
			else {
				that.y += 1;
				that.x += 3;
				frameIndex = 2;
			}
        };
		
		that.render = function () {
		  
			var x_index = frameIndex % (that.width / that.frame_width);
			var y_index = Math.floor((frameIndex * that.frame_width) / that.width);
			// Draw the animation
			that.context.drawImage(
			that.image,
				x_index * that.frame_width,
			y_index * that.frame_height,
			that.frame_width,
			that.frame_height,
			that.x,
			that.y,
			that.frame_width,
			that.frame_height);
		};
		
		return that;
	}

	function createBird () {
	
		var birdIndex,
			birdImage;
	
		// Create sprite sheet
		birdImage = new Image();	
	
		birdIndex = birds.length;
		

		// Create sprite
		birds[birdIndex] = sprite({
			context: canvas.getContext("2d"),
			width: 108,
			height: 144,
			image: birdImage,
			numberOfFrames: 9,
			frame_width: 36,
			frame_height: 48,
			ticksPerFrame: 2
		});
		
		// choose random location outside the left side of the screen
		birds[birdIndex].x = Math.random() * (bird_x_spawn_max - bird_x_spawn_min) + bird_x_spawn_min;
		birds[birdIndex].y = Math.random() * (bird_y_spawn_max - bird_y_spawn_min) + bird_y_spawn_min;
		
		// set variables for bird flight
		birds[birdIndex].flying = true;
		birds[birdIndex].max_height = Math.random() * (bird_height_max - bird_height_min) + bird_height_min;	// Max height before diving
		birds[birdIndex].min_height = Math.random() * (bird_bottom_height_max - bird_bottom_height_min) + bird_bottom_height_min;	// Min height before flying
		
		
		// Load sprite sheet
		birdImage.src = "/images/bird_36x48.png";
	}
	
	// Get canvas
	canvas = document.getElementById("bird");
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	
	for (var i = 0; i < numBirds; i += 1) {
		createBird();
	}
	
	gameLoop();

});

