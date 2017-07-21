<center>
<div class="main-content">
<div class="page-content">
	<div class="page-header">
		<h1>
			用户信息
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">

			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<table id="sample-table-1" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>编号</th>
									<th>用户名</th>
									<th class="hidden-480">年龄</th>
									<th>手机号</th>
									<th>邮箱</th>
									<th>生日</th>
									<th>个人说明</th>
									<th>操作</th>
								</tr>
							</thead>

							<tbody id="tbox">
							<?php foreach($data as $v){?>
								<tr>
									<td><?php echo $v['x_id']?></td>
									<td class="jidian" opt="<?php echo $v['x_id']?>"><?php echo $v['x_name']?></td>
									<td><?php echo $v['x_age']?></td>
									<td><?php echo $v['x_tel']?></td>
									<td><?php echo $v['x_email']?></td>
									<td><?php echo $v['x_birthday']?></td>
									<td><?php echo $v['x_desc']?></td>
									<td><a href="?r=yonghu/del&id=<?php echo $v['x_id']?>">删除</a>|<a href="">修改</a></td>
								</tr>
										<?php
										}
										?>

										<div class="visible-xs visible-sm hidden-md hidden-lg">
											<div class="inline position-relative">
												<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
													<i class="icon-cog icon-only bigger-110"></i>
												</button>

												<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
													<li>
														<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
															<span class="blue">
																<i class="icon-zoom-in bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
															<span class="green">
																<i class="icon-edit bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
															<span class="red">
																<i class="icon-trash bigger-120"></i>
															</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
				</div><!-- /span -->
			</div><!-- /row -->
			<div class="hr hr-18 dotted hr-double"></div>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div>
					<script src="style/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	//即点即改 -- 点
	$(".jidian").on("click",function(){
		if(!$(this).children().attr('class')){
			var zhi = $(this).html();
			var input = "<input type = 'text' class='blur' value='"+zhi+"' />";
			$(this).html(input);
		}	
	});
	//即点即改 -- 改
	$("#tbox").delegate(".blur","blur",function(){
		var zhi = $(this).val();
		var id = $(this).parent().attr("opt");
		var obj = $(this);
		$.ajax({
		   type: "GET",
		   url: "?r=yonghu/xiugai",
		   data: "id="+id+"&zhi="+zhi,
		   success: function(msg){
		   		obj.parent().html(zhi);
		   }
		});
	})
</script>
</center>