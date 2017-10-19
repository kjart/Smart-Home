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
	// this executes on selection of preffered conrol of the fan
	$('.select').click(function(){
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly*/
		if($('.select').val() == "0"){ 
				$.ajax({
					url : "select_fan.php?select=0",
					type : "get",
					success:function(vid){
						$.ajax({
						url:"read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							var status = rel.Select;
							if (status == "0"){
								$('.select').val('1');
					
							}
							else{
								$('.select').val('0');
				
							}
						}
						});
					}// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "select_fan.php?select=1",
					type : "get",
					success:function(){
						$.ajax({
						url:"read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							var status = rel.Select;
							if (status == "0"){
								$('.select').val('1');
					
							}
							else{
								$('.select').val('0');
				
							}
						}
						});
					}// end of ajax success function
			}); // end ajax function
		}// end of else function
		
	}); // end button function
			
	// this function determines the data sent to the arduino based on the speed of the fan
	/*fan1 will turn the fan to speed of 1
		fan2 will turn the fan to speed of 2
		fan3 will turn the fan to speed of 3
		fan4 will turn the fan to speed of 4
		fan5 will turn the fan to speed of 5
		else, turn is back to 0 that is , off */
		
// this executes on click of the living room's light
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
	
	
	/*$.get("security_light.txt", security);
			function security(currentValue){
			var current = currentValue;
				$('#security'). text("the security light is currently " + current);
			}// end of success function*/
	
	/*                                                   end of sitting-room code                                       */
	
	// this executes on click of the bedroom room's light
	$('.room2-click').click(function(r2){
		r2.preventDefault();
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly*/
	if($('.room2-click').val() == "on"){ 
				$.ajax({
					url : "room2_light.php?light=ON",
					type : "get",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room2-light'). text(rel.room2Light);
							var status = rel.room2Light;
							if (status.toLowerCase() == "off"){
								$('.room2-click').val('on');
								$('.room2-click').text("click to on light");
					
							}
							else{
								$('.room2-click').val('off');
								$('.room2-click').text("click to off light");
				
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "room2_light.php?light=OFF",
					type : "get",
					success:setTimeout(function(){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room2-light'). text(rel.room2Light);
							var status = rel.room2Light;
							if (status.toLowerCase() == "off"){
								$('.room2-click').val('on');
								$('.room2-click').text("click to on light");
					
							}
							else{
								$('.room2-click').val('off');
								$('.room2-click').text("click to off light");
				
							}
						}
						});
					},5000)// end of ajax success function
			}); // end ajax function
		}// end of else function
	}); // end button function
			
		
// this executes on click of the living room's light
	$('.room2-fanClick').click(function(r2Fan){
		r2Fan.preventDefault();
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly*/
		if($('.room2-fanClick').val() == "on"){ 
				$.ajax({
					url : "room2_fan.php?fan=ON",
					type : "get",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room2-fan'). text(rel.room2Fan);
							var status = rel.room2Fan;
							if (status.toLowerCase() == "off"){
								$('.room2-fanClick').val('on');
								$('.room2-fanClick').text("click to on fan");
					
							}
							else{
								$('.room2-fanClick').val('off');
								$('.room2-fanClick').text("click to off fan");
				
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "room2_fan.php?fan=OFF",
					type : "get",
					success:setTimeout(function(){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room2-fan'). text(rel.room2Fan);
							var status = rel.room2Fan;
							if (status.toLowerCase() == "off"){
								$('.room2-fanClick').val('on');
								$('.room2-fanClick').text("click to on fan");
					
							}
							else{
								$('.room2-fanClick').val('off');
								$('.room2-fanClick').text("click to off fan");
				
							}
						}
						});
					}, 5000)// end of ajax success function
			}); // end ajax function
		}// end of else function
		
	}); // end button function

/*   .................................           bedroom1 codes end here   .........................................     */        

// this executes on click of the bedroom room's light
	/*$('.room3-click').click(function(r3){
	r3.preventDefault();
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly
	if($('.room3-click').val() == "on"){ 
				$.ajax({
					url : "room3_light.php?light=ON",
					type : "get",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room3-light'). text(rel.room3Light);
							var status = rel.room3Light;
							if (status.toLowerCase() == "off"){
								$('.room3-click').val('on');
								$('.room3-click').text("click to on light");
					
							}
							else{
								$('.room3-click').val('off');
								$('.room3-click').text("click to off light");
				
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "room3_light.php?light=OFF",
					type : "get",
					success:setTimeout(function(){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room3-light'). text(rel.room3Light);
							var status = rel.room3Light;
							if (status.toLowerCase() == "off"){
								$('.room3-click').val('on');
								$('.room3-click').text("click to on light");
					
							}
							else{
								$('.room3-click').val('off');
								$('.room3-click').text("click to off light");
				
							}
						}
						});
					},5000)// end of ajax success function
			}); // end ajax function
		}// end of else function
	}); // end button function
	
	// this function determines the data sent to the arduino based on the speed of the fan
	/*fan1 will turn the fan to speed of 1
		fan2 will turn the fan to speed of 2
		fan3 will turn the fan to speed of 3
		fan4 will turn the fan to speed of 4
		fan5 will turn the fan to speed of 5
		else, turn is back to 0 that is , off */
		
// this executes on click of the living room's light
	/*$('.room3-fanClick').click(function(r3Fan){
		r3Fan.preventDefault();
	/*the function below will check if the light is on or off
	and then set them accordingly by sending value to the url and updating the page accordingly
		if($('.room3-fanClick').val() == "on"){ 
				$.ajax({
					url : "room3_fan.php?fan=ON",
					type : "get",
					success:setTimeout(function(vid){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room3-fan'). text(rel.room3Fan);
							var status = rel.room3Fan;
							if (status.toLowerCase() == "off"){
								$('.room3-fanClick').val('on');
								$('.room3-fanClick').text("click to on fan");
					
							}
							else{
								$('.room3-fanClick').val('off');
								$('.room3-fanClick').text("click to off fan");
				
							}
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
		}// end if
		else{
			$.ajax({
					url : "room3_fan.php?fan=OFF",
					type : "get",
					success:setTimeout(function(){
						$.ajax({
						url:"http://192.168.137.16",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.room3-fan'). text(rel.room3Fan);
							var status = rel.room3Fan;
							if (status.toLowerCase() == "off"){
								$('.room3-fanClick').val('on');
								$('.room3-fanClick').text("click to on fan");
					
							}
							else{
								$('.room3-fanClick').val('off');
								$('.room3-fanClick').text("click to off fan");
				
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
				$('.room2-light'). text(value.room2Light);
				var status2 = value.room2Light;
				if (status2.toLowerCase() == "off"){
					$('.room2-click').val('on');
					$('.room2-click').text("click to on light");
					
				}
				else{
					$('.room2-click').val('off');
					$('.room2-click').text("click to off light");
				
				}
				/*$('.room3-light'). text(value.room3Light);
				var status3 = value.room3Light;
				if (status3.toLowerCase() == "off"){
					$('.room3-click').val('on');
					$('.room3-click').text("click to on light");
					
				}
				else{
					$('.room3-click').val('off');
					$('.room3-click').text("click to off light");
				
				}*/
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
				$('.room2-fan'). text(value.room2Fan);
				var status2fan = value.room2Fan;
				if (status2fan.toLowerCase() == "off"){
					$('.room2-fanClick').val('on');
					$('.room2-fanClick').text("click to on fan");
					
				}
				else{
					$('.room2-fanClick').val('off');
					$('.room2-fanClick').text("click to off fan");
				
				}
				/*$('.room3-fan'). text(value.room3Fan);
				var status3fan = value.room3Fan;
				if (status3fan.toLowerCase() == "off"){
					$('.room3-fanClick').val('on');
					$('.room3-fanClick').text("click to on fan");
					
				}
				else{
					$('.room3-fanClick').val('off');
					$('.room3-fanClick').text("click to off fan");
				
				}*/
				
				$('.security').text(value.security);
				$('.temperature').text(value.temp);
				$('.temperature').append("<sup> o </sup" );
				$('.temperature').append("C");
				
				
				$('.humidity').text(value.hum + "%");
				var select = value.fan_select;
				if (select == "1"){
					$('.automatic').text("temperature control selected");
					$('.automatic').append("<hr class = my-2");
					$('.manual').text("automatic selected");
				}
				else{
					$('.manual').text("manual selected");
				}
				

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
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('date').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
