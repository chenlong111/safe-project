$(function() {
	var verifyCode = new GVerify("v_container");
	$(".login_btn").click(function() {
		if($(".user").val() == "") {
			$(".login_text").html("请输入帐号");
			return
		} else if($(".password").val() == "") {
			$(".login_text").html("请输入密码");
			return
		} else if($(".code").val() == "") {
			$(".login_text").html("请输入验证码");
			verifyCode = new GVerify("v_container");
			return
		}else if(verifyCode.validate(document.getElementById("code").value)==false){
			$(".login_text").html("验证码错误，请重新输入");
			verifyCode = new GVerify("v_container");
			return
		}
		else {
			$.ajax({
					type: "post",
					url: ajax_url + "login.php",
					async: true,
					dataType: "json",
					data: {
						user:$(".user").val(),
						password:md5($(".password").val())
					},
					success: function(data) {
						console.info(data);
					},
					error: function(data) {
						console.info(data)
					}
				});
			try {
				
			} catch(e) {
				alert("出错啦，请稍后再试")
			}
		}
	});
});