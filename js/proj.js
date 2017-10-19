// the beginning of the scripting document function 
$(document).ready(function(){
// this executes on click of the living room's light
	$('.room1-click').click(function(r1){
		r1.preventDefault();
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly*/
		if($('.room1-click').val() == "on"){ 
				$.ajax({
					url : "room1_light.php?light=ON",
					type : "get",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room1-light'). text(rel.room1Light);
							var status = rel.room1Light;
							if (status.toLowerCase() == "off"){
								$('.room1-click').val('on');
								$('.room1-click').text("click to on light");
					
							}
							else{
								$('.room1-click').val('off');
								$('.room1-click').text("click to off light");
				
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "room1_light.php?light=OFF",
					type : "get",
					success:setTimeout(function(){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room1-light'). text(rel.room1Light);
							var status = rel.room1Light;
							if (status.toLowerCase() == "off"){
								$('.room1-click').val('on');
								$('.room1-click').text("click to on light");
					
							}
							else{
								$('.room1-click').val('off');
								$('.room1-click').text("click to off light");
				
							}
						}
						});
					}, 5000)// end of ajax success function
			}); // end ajax function
		}// end of else function
		
	}); // end button function
	// this executes on click of the living room's fan
	$('.room1-fanClick').click(function(r1Fan){
		r1Fan.preventDefault();
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly*/
		if($('.room1-fanClick').val() == "on"){ 
				$.ajax({
					url : "room1_fan.php?fan=ON",
					type : "get",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room1-fan'). text(rel.room1Fan);
							var status = rel.room1Fan;
							if (status.toLowerCase() == "off"){
								$('.room1-fanClick').val('on');
								$('.room1-fanClick').text("click to on fan");
					
							}
							else{
								$('.room1-fanClick').val('off');
								$('.room1-fanClick').text("click to off fan");
				
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "room1_fan.php?fan=OFF",
					type : "get",
					success:setTimeout(function(){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room1-fan'). text(rel.room1Fan);
							var status = rel.room1Fan;
							if (status.toLowerCase() == "off"){
								$('.room1-fanClick').val('on');
								$('.room1-fanClick').text("click to on fan");
					
							}
							else{
								$('.room1-fanClick').val('off');
								$('.room1-fanClick').text("click to off fan");
				
							}
						}
						});
					}, 5000)// end of ajax success function
			}); // end ajax function
		}// end of else function
		
	}); // end button function
	/* this executes when you click the off water button ........................................................... */
					
	$('.water-1').click(function(w2){
		w2.preventDefault();	
			$.ajax({
					url : "water.php?water=30",
					type : "GET",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							if (rel.water == "30"){
							$('.water-read'). text("The water in the tank is currently pumping, the sensor reading will be updated when the new value is reached!");
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
				});	
	$('.water-2').click(function(w3){
		w3.preventDefault();	
			$.ajax({
					url : "water.php?water=50",
					type : "GET",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							if(rel.water == "50"){
							$('.water-read'). text("The water in the tank is currently pumping, the sensor reading will be updated when the new value is reached!");
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
				});
	$('.water-3').click(function(w4){
		w4.preventDefault();	
			$.ajax({
					url : "water.php?water=70",
					type : "GET",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							if(rel.water == "70"){
							$('.water-read'). text("The water in the tank is currently pumping, the sensor reading will be updated when the new value is reached!");
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
				});
	$('.water-full').click(function(w5){
		w5.preventDefault();	
			$.ajax({
					url : "water.php?water=90",
					type : "GET",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							if(rel.water == "90"){
							$('.water-read'). text("The water in the tank is currently pumping, the sensor reading will be updated when the new value is reached!");
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
				});
	
	$.ajax({
			url:"http://192.168.137.16",
			type:'GET',
			dataType:"json",
			contentType:"text/plain",
			success:function (value){
				var value = value;
				$('.room1-light'). text(value.room1Light);
				var status = value.room1Light;
				if (status.toLowerCase() == "off"){
					$('.room1-click').val('on');
					$('.room1-click').text("click to on light");
					
				}
				else{
					$('.room1-click').val('off');
					$('.room1-click').text("click to off light");
				
				}
				$('.room1-fan'). text(value.room1Fan);
				var statusfan = value.room1Fan;
				if (statusfan.toLowerCase() == "off"){
					$('.room1-fanClick').val('on');
					$('.room1-fanClick').text("click to on fan");
					
				}
				else{
					$('.room1-fanClick').val('off');
					$('.room1-fanClick').text("click to off fan");
				
				}
				
				$('.security').text(value.security);
				$('.temperature').text(value.temp);
				$('.temperature').append("<sup> o </sup" );
				$('.temperature').append("C");
				
				
				$('.humidity').text(value.hum + "%");

				var sensor = value.sensor;
				if (sensor == "10"){
					
				$('.water-read'). text("The water in the tank is currently low!, the water will start pumping until the tank is filled up. Please select any of the buttons below to perform otherwise!");
				}
	
				if (sensor == "30"){
					$('.water-read'). text("The water is now at 30% of the tank");
				}
				if (sensor == "50"){
					$('.water-read'). text("The water is now at 50% of the tank");
					}
				if (sensor == "70"){
					$('.water-read'). text("The water is now at 70% of the tank");
				}
				if (sensor == "90"){
					$('.water-read'). text("The water in the tank is currently filled up!");
				}
				$('.sensor'). text(value.sensor + "%");
			}// end of success function  
			});
	
	
});// end of document ready function