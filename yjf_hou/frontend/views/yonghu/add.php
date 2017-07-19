<!-- <script type="text/javascript" src="style/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="style/js/jquery.datePicker-min.js"></script>
<link type="text/css" href="style/css/datepicker.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function(){

	$(".datepicker").datePicker({
		inline:true,
		selectMultiple:false
	});
	$("#datepicker").datePicker({
		clickInput:true
	});
});
</script>
 -->
<center>
<h2>直播用户添加信息</h2>
<form action="index.php?r=yonghu/tj" method="post" onsubmit="return checkAll();">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="uname" id="uname" value="" placeholder="请输入用户名" onblur="checkname()"><span id="spanname"></span><font color="red">*</font></td>
		</tr>
		<tr>
			<td>年龄：</td>
			<td><input type="text" name="age" id="age" value="" placeholder="年龄" onblur="checkage()"><span id="spanage"></span><font color="red">*</font></td>
		</tr>
		<tr>
			<td>手机号：</td>
			<td><input type="text" name="telephone" id="telephone" value="" placeholder="请输入手机号" onblur="checkphone()"><span id="spanphone"></span><font color="red">*</font></td>
		</tr>	
		<tr>
			<td>邮箱：</td>
			<td><input type="text" name="email" id="email" value="" placeholder="请输入邮箱" onblur="checkemail()"><span id="spanemail"></span><font color="red">*</font></td>
		</tr>
		<tr>
			<td>生日：</td>
			<td><input type="text" name="datepicker" value="" id="datepicker" onblur="checkdatepicker()"/><span id="spandatepicker"></span><font color="red">*</font></td>
		</tr>
		<tr>
			<td>个人说明：</td>
			<td>
				<textarea name="udesc" id="udesc" cols="50" rows="10" onkeyup="checkdesc()"></textarea><span id="spandesc"></span><font color="red">*</font>
			</td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input type="submit" value="添加">
			</td>
		</tr>
	</table>
</form>
</center>
<script>
function checkAll(){

		if(checkname(uname.value) && checkphone(age.value) && checkemail(age.value) && checkdesc(age.value)){
			return true;
		}else{
			return false;
		}
	};
	//用户名
	function checkname()
	{
		var uname = document.getElementById('uname').value;
		if(uname == ''){
			spanname.innerHTML='用户名不能为空';
			spanname.style.color='red';
			return false;
		}else{
			var reg = /^[a-z_]\w{5,9}$|^[\u4e00-\u9fa5]{2,3}$/i;
			if(!reg.test(uname))
			{
				spanname.innerHTML = '用户名输入不符合';
				spanname.style.color = 'red';
				return false;
			}else{
				spanname.innerHTML = '√';
				spanname.style.color = 'green';
				return true;
			}
		}
		return true;	
	}
	// 邮箱
	function checkemail()
	{
		var str1 = document.getElementById('email').value;
		if(str1 == ''){
			spanemail.innerHTML='邮箱不能为空';
			spanemail.style.color='red';
			return false;
		}else{
			var reg = /^[a-z]\w{5,}@\w+\.com|net|cn/i;
			var str2 = str1.substring(str1.indexOf('@')+1,str1.indexOf('.'));
			if(reg.test(str1))
			{
				spanemail.innerHTML = '您输入的是'+str2+'邮箱';
				spanemail.style.color = 'green';
				return true;				
			}else{
				spanemail.innerHTML = '邮箱输入不符合';
				spanemail.style.color = 'red';
				return false;
			}
		}	
		return true;
	}
	//手机号
	function checkphone()
	{
		var phone = document.getElementById('telephone').value;
		if(phone == ''){
			spanphone.innerHTML='手机号不能为空';
			spanphone.style.color='red';
			return false;
		}else{
			var reg = /^1[3,5,8]\d{9}$/;
			if(!reg.test(phone))
			{
				spanphone.innerHTML = '手机号输入不符合';
				spanphone.style.color = 'red';
				return false;
			}else{
				spanphone.innerHTML = '√';
				spanphone.style.color = 'green';
				return true;
			}
		}
		return true;	
	}
	//个人说明
	function checkdesc()
	{	
		var val = document.getElementsByName('udesc').value;               
		if(val == '')
		{
			spandesc.innerHTML = '必须写简介';
			spandesc.style.color='red';
			return false;
		}
		else if(val.length>20)
		{
			var str = val.substring(0,20);
			document.getElementById('udesc').value = str;
		    spandesc.innerHTML = '您输入的字符大于20';
		    spandesc.style.color='red';
		}
		else
		{
			var len = val.length;
			var last_len = (20-len);
		    spandesc.innerHTML = '您还能输入'+last_len+'个字';
		    spandesc.style.color='green';
		}
	}
</script>

