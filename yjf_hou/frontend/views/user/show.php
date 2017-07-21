<center>
<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								用户展示
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
														<th>用户ID</th>
														<th>用户名称</th>
														<th>密码</th>
														<th>邮箱</th>
														<th>拥有角色</th>
														<th>注册时间</th>
														<th>详细信息</th>
													</tr>
												</thead>

												<tbody id="tbox">
												<?php foreach ($data as $k => $v): ?>
													<tr>
														<td><?=$v['u_id']?></td>
														<td myid="<?=$v['u_id']?>" class="t_name"><?=$v["username"];?></td>
														<td><?=$v['pwd']?></td>
														<td class="hidden-480"><?=$v["email"]?></td>
														<td><?=$v["chara"]?></td>
														<td><?=$v["add_time"]?></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<a href="?r=user/userinfo&id=<?=$v['u_id']?>">查看</a>
															</div>
														</td>
													</tr>
												<?php endforeach ?>	
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
								<div class="hr hr-18 dotted hr-double"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
</center>
<script type="text/javascript">
	//即点即改 -- 点
	$(".t_name").on("click",function(){
		if(!$(this).children().attr('class')){
			var name = $(this).html();
			var input = "<input type = 'text' class='blur' value='"+name+"' />";
			$(this).html(input);
		}	
	});
	//即点即改 -- 改
	$("#tbox").delegate(".blur","blur",function(){
		var n_name = $(this).val();
		var id = $(this).parent().attr("myid");
		var obj = $(this);
		$.ajax({
		    type: "GET",
		    url: "?r=type/update",
		    data: "id="+id+"&t_name="+n_name,
		    success: function(msg){
		   		if(msg){
	   				obj.parent().html(n_name);
	   				$("."+id).html(n_name);
	   			}
		    }
		});
	});
</script>
