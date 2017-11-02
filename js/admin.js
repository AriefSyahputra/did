$(document).ready(function(){
    $("#btnUpdateUser").prop("disabled",true);
});

function GetUserAjax()
{
	$.ajax({
		url		: base_url + "user/GetUserAjax", 
		dataType: 'json', 
		type: 'POST',
		data	: {"userid" : $("#userid").val()},
		success	: function(result)
		{
			console.log(result.signature);
			console.log(result.profile);
			if(result.user.length > 0)
			{
				$("#ID").val(result.user[0].ID);
				$("#UserName").val(result.user[0].UserName);
				$("#UserID").val(result.user[0].UserID);
				$("#UserCode").val(result.user[0].UserID);
				$("#CompanyID").val(result.user[0].CompanyID);
				$("#Cabang").val(result.user[0].Cabang);
				$("#Title").val(result.user[0].TitleID);
				$("#Commitment").val(result.user[0].Commitment);
				if(result.signature == true)
				{
					$("#signature").attr("src",base_url+"images/signature/"+result.user[0].UserID+".png");
				}else{
				    $("#signature").attr("src",base_url+"images/noimage.png");
				}
				
				
				if(result.profile == true)
				{
					$("#image-file").attr("src",base_url+"images/profile/"+result.user[0].UserID+".jpg");
					$("#image-file").show();
					$("#content-webcam").hide();
					$("#btnChange").show();
				}else{
				    $("#image-file").attr("src",base_url+"images/noimage.png");
					$("#image-file").show();
					$("#content-webcam").hide();
					$("#btnChange").show();
				}
				$("#btnUpdateUser").prop("disabled",false);
			}
			else
			{
				$("#ID").val('');
				$("#UserName").val('');
				$("#UserID").val('');
				$("#UserCode").val('');
				$("#CompanyID").val('');
				$("#Cabang").val('');
				$("#Title").val('');
				$("#Commitment").val('');
				$("#signature").attr("src",base_url+"images/noimage.png");
				$("#image-file").attr("src",base_url+"images/noimage.png");
				$("#btnUpdateUser").prop("disabled",true);
				$("#image-file").hide();
				$("#content-webcam").show();
				$("#btnChange").hide();
			}
		}
	});
}



