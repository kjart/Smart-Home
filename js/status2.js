// the beginning of the scripting document function 
$(document).ready(function(){
// this executes when you click the off water button
	$('.water-off').click(function(w1){
		w1.preventDefault();	
			$.ajax({
					url : "water.php?water=0",
					type : "GET",
					success:setTimeout(function(vid){
						$.ajax({
						url:"water_read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.water-read'). text("The water is at currently at " +rel.status + "position");
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
				});
				
				
	$('.water-1').click(function(w2){
		w2.preventDefault();	
			$.ajax({
					url : "water.php?water=30",
					type : "GET",
					success:setTimeout(function(vid){
						$.ajax({
						url:"water_read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.water-read'). text("The water is at currently at " +rel.status + "position");
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
						url:"water_read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.water-read'). text("The water is at currently at " +rel.status + "position");
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
						url:"water_read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.water-read'). text("The water is at currently at " +rel.status + "position");
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
						url:"water_read.php",
						type:'GET',
						dataType:"json",
						contentType:"text/plain",
						success:function(rel){
							var rel = rel;
							$('.water-read'). text("The water is at currently at " +rel.status + "position");
						}
						});
					},5000)// end of ajax success function
				}); // end ajax if function
				});
});