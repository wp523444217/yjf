<center>
<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								权限展示
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
														<th>权限ID</th>
														<th>权限名称</th>
														<th>控制器名</th>
														<th>方法名</th>
														<th>是否启用</th>
														<th>添加人</th>
														<th>添加时间</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody id="tbox">
												<?php foreach ($data as $k => $v): ?>
													<tr>
														<td><?=$v['t_id']?></td>
														<td myid="<?=$v['t_id']?>" class="t_name"><?=$v["t_name"];?></td>
														<td><?=$v['controller']?></td>
														<td><?=$v["action"]?></td>
														<td><?php if ($v["t_state"]): ?>是
														<?php else: ?>否
														<?php endif ?></td>
														<td><?=$v["add_username"]?></td>
														<td><?=$v["add_time"]?></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<a href="?r=thority/update&id=<?=$v['t_id']?>">修改</a>
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
		    url: "?r=thority/update",
		    data: "id="+id+"&t_name="+n_name,
		    success: function(msg){
		   		if(msg){
	   				obj.parent().html(n_name);
	   			}
		    }
		});
	});
</script>
