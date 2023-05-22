<link rel="stylesheet" type="text/css" href="modules/css/modal.min.css">
<div class="modal_password hidden" id="password_modal" style="hidden">
	<div class="modal-content">
		<span class="close-button_password">&times;</span>
		<br>给这个链接设置密码<br>
		<span id="inputboxLocation"></span><button class="submit" id="submitpwd" onclick="submitPassword();">设置</button><br>
		<input type="checkbox" id="allowReadOnlyView" name="allowReadOnlyView" value="1" title="允许无密码只读查看">无需密码即可查看<br>
		<span id="removePassword" style="display:none">
				<br><a onclick='passwordRemove();'>删除密码</a>
				<input type="hidden" id="hdnRemovePassword" name="hdnRemovePassword" value=""><br>
		</span>
		<span id="pwdMessage" style="color: red;"><br></span>
		<br><a onclick='window.open("passwordHelp.html");'>有关密码保护的详细信息</a>
	</div>
</div>
