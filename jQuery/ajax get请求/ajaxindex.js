$(document).ready(function(){   //特别注意function后的括号

		$("#btn").on("click",function(){
			$.get("server.php",{name:$("#namevalue").val()},function(data){
				
				$("#result").text(data);
				
			});
			
			
			
		});
	
		
});