<!-- basic styles -->
<link href="style/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="style/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->

<!-- ace styles -->

<link rel="stylesheet" href="style/css/ace.min.css" />
<link rel="stylesheet" href="style/css/ace-rtl.min.css" />
<link rel="stylesheet" href="style/css/ace-skins.min.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->

<script src="style/js/ace-extra.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->


<script src="style/js/html5shiv.js"></script>
<script src="style/js/respond.min.js"></script>
<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="icon-leaf green"></i>
                            <span class="red">一流</span>
                            <span class="white">App 直播</span>
                        </h1>
                        <h4 class="blue">&copy; 有间房</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="icon-coffee green"></i>
                                        请填写你的信息
                                    </h4>

                                    <div class="space-6"></div>

                                    <form action="?r=login/login_do" method="post" id="loginForm">
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input type="text" class="form-control" placeholder="请输入你的用户名" name="username" id="username"/>
                                                    <i class="icon-user"></i>
                                                </span>
                                            </label>

                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input type="password" class="form-control" placeholder="请输入你的密码" name="pwd" id="pwd"/>
                                                    <i class="icon-lock"></i>
                                                </span>
                                            </label>

                                                <span class="error" style="display:none;" id="beError"></span>
                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="icon-key"></i>
                                                    登录
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>




									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												恢复密码
											</h4>

											<div class="space-6"></div>
											<p>
												输入你的邮箱 and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="icon-lightbulb"></i>
															发送给我
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												返回去登录
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form id="loginForm" action="index.php?r=login/login_do">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="请输入你的用户名" id="username" name="id="email" name="email""/>
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="请输入你的密码" id="pwd" name="pwd"/>
															<i class="icon-lock"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="请输入你的邮箱" id="email" name="email"/>
															<i class="icon-user"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" />
															<i class="icon-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															Reset
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success">
															Register
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

        <!--[if !IE]> -->


        <!-- <![endif]-->

        <!--[if IE]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->

        <!--[if !IE]> -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='style/js/jquery-2.0.3.min.js'>"+"<"+"script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='style/js/jquery-1.10.2.min.js'>"+"<"+"script>");
        </script>
        <![endif]-->

        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='style/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
        </script>
        <script src="style/js/bootstrap.min.js"></script>
        <script src="style/js/typeahead-bs2.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
        <script src="style/js/excanvas.min.js"></script>
        <![endif]-->

        <script src="style/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="style/js/jquery.ui.touch-punch.min.js"></script>
        <script src="style/js/jquery.slimscroll.min.js"></script>
        <script src="style/js/jquery.easy-pie-chart.min.js"></script>
        <script src="style/js/jquery.sparkline.min.js"></script>
        <script src="style/js/flot/jquery.flot.min.js"></script>
        <script src="style/js/flot/jquery.flot.pie.min.js"></script>
        <script src="style/js/flot/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->

        <script src="style/js/ace-elements.min.js"></script>
        <script src="style/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->

        <script type="text/javascript">
<script type="text/javascript">
    $(function(){
        //验证表单
        $("#loginForm").validate({
            /* onkeyup: false,
             focusCleanup:true, */
            rules: {
                pwd: {
                    required: true
                }
            },
            messages: {
                pwd: {
                    required: "请输入密码"
                }
            },
            submitHandler:function(form){
                var username = $('#username').val();
                var pwd = $('#pwd').val();
                $(form).find(":submit").attr("disabled", true);
                $.ajax({
                    type:'POST',
                    data:{username:username,pwd:pwd},
//                    url:ctx+'/user/login.json'
                    dataType:'json',
                    url:'index.php?r=login/login_do',
                    success:function(msg){
                        if(msg.success){
                            location.href=msg.url;
                        }else{
                            $('#beError').text(msg.msg).show();
                        }
                    }
                })
            }
        });
    })
</script>
		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
	
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>

</body>
</html>
