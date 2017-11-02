$(document).ready(function(){
	$("#row-one").show("slow");
	
	
	$.ajax({url: base_url + "/dasboard/GetCount", dataType:'json', success: function(result){
		$("#hdnCount").val(result.count);
		
		var l = parseInt($("#hdnCount").val());
		var data = $("#hdnCount").val();
		
		if(l<10)
		{
			$("#3").slideUp(500,function(){$("#3").html(data)}).slideDown(500);
		}
		else if(l<100)
		{
			$("#2").slideUp(500,function(){$("#2").html(data.substring(0, 1))}).slideDown(500);
			$("#3").slideUp(500,function(){$("#3").html(data.substring(1, 2))}).slideDown(500);
		}
		else
		{
			$("#1").slideUp(500,function(){$("#1").html(data.substring(0, 1))}).slideDown(500);
			$("#2").slideUp(500,function(){$("#2").html(data.substring(1, 2))}).slideDown(500);
			$("#3").slideUp(500,function(){$("#3").html(data.substring(2, 3))}).slideDown(500);
		}
	}});
		
	setInterval(function(){
		$.ajax({url: base_url + "/dasboard/GetCount", dataType:'json', success: function(result){
			if($("#hdnCount").val()!=result.count)
			{
				$("#hdnCount").val(result.count);
				
				var l = parseInt($("#hdnCount").val());
				var data = $("#hdnCount").val();
				if(l<10)
				{
					$("#3").slideUp(500,function(){$("#3").html(data)}).slideDown(500);
				}
				else if(l<100)
				{
					$("#2").slideUp(500,function(){$("#2").html(data.substring(0, 1))}).slideDown(500);
					$("#3").slideUp(500,function(){$("#3").html(data.substring(1, 2))}).slideDown(500);
				}
				else
				{
					$("#1").slideUp(500,function(){$("#1").html(data.substring(0, 1))}).slideDown(500);
					$("#2").slideUp(500,function(){$("#2").html(data.substring(1, 2))}).slideDown(500);
					$("#3").slideUp(500,function(){$("#3").html(data.substring(2, 3))}).slideDown(500);
				}
			}
		}});
		
	}, 5000);
	
	$("#row-one").attr("style", "padding-left:0px!important");
});

function GetCommitment()
{
	$("#row-one").hide("slow");
	
	$.ajax({
		url		: base_url + "/dasboard/GetCommitment", 
		dataType: 'json', 
		type: 'POST',
		data	: {"page" : page, "pageCount":page_count},
		success	: function(result)
		{
			if(result.user.length > 0)
			{
				$("#row-one").html(result.user);
				$("#row-one").show("fast", function(){
					$("#row-one").attr("style", "padding-left:0px!important");
				});
			}else{
				$("#row-one").show("slow");
			}
		}
	});
}