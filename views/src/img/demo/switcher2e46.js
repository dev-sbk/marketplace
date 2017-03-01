/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {
	
		// Color Changer		
		
		$(".blue" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/blue.css" );
			return false;
		});
		
		$(".bluedark" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/bluedark.css" );
			return false;
		});
		
		$(".gold" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/gold.css" );
			return false;
		});

		$(".green" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/green.css" );
			return false;
		});
		
		$(".orange" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/orange.css" );
			return false;
		});

		$(".pink" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/pink.css" );
			return false;
		});
		
		$(".red" ).click(function(){
			$("#colors" ).attr("href", "assets/css/skins/red.css" );
			return false;
		});
		
		
			

		$("#style-switcher h2 a").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			console.log(div.css("left"));
			if (div.css("left") === "-185px") {
				$("#style-switcher").animate({
					left: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					left: "-185px"
				});
			}
		})
		
		// Layout Style Switcher
	    $("#layout-style").change(function(e){
			if( $(this).val() == 1){
				$("body").removeClass("boxed");
				$("body").addClass("wide");
				$(".bgr").addClass("hide"); 
				       
			} else if( $(this).val() == 2){
				$("body").addClass("boxed");
				$("body").removeClass("wide");
				$(".bgr").removeClass("hide");      
			}
		})

		$(".colors li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		})
		
		$(".bg li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
			var bg = $(this).css("backgroundImage");
			$("body").css("backgroundImage",bg)
		})

		$("#reset a").click(function(e){
			var bg = $(this).css("backgroundImage");
			$("body").css("backgroundImage","url(http://www.themepush.com/demo-zolix/wp-content/themes/zolix/img/bg/6.jpg)");
			$("body").removeClass("boxed").addClass("wide");
			$(".bgr").addClass("hide");
		})
			

	});