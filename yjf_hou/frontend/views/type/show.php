<center>
<div class="main-content">
					

					<div class="page-content">
						<div class="page-header">
							<h1>
								直播分类展示
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
														<th>直播分类名称</th>
														<th>是否显示</th>
														<th>排序</th>
														<th>上级分类</th>
                                                        <th>分类图片</th>
														<th>添加时间</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody id="tbox">
												<div >
												<?php foreach ($user_list as $k => $v): ?>
													<tr>
														<td myid="<?=$v['t_id']?>" class="t_name"><?=$v["t_name"];?></td>
														<td><?php if ($v["t_state"]): ?>显示
														<?php else: ?>不显示
														<?php endif ?></td>
														<td class="hidden-480"><?=$v["t_sort"]?></td>
														<td>

                                                            <?php
                                                                $dsn = "mysql:host=47.93.222.97;dbname=yjf";
                                                                $db = new PDO($dsn, 'root', 'root');
                                                                $db->query("set names utf8");
                                                                $sql="SELECT * FROM `fang_type` where t_id=".$v['p_t_id'];
                                                                $run= $db->query($sql)->fetch(PDO::FETCH_ASSOC);
                                                                if($run['t_name']==""){
                                                                    echo "顶级分类";
                                                                }else{
                                                                    echo $run['t_name'];
                                                                }

                                                            ?>
                                                            </td>
                                                        <td><img src="<?=$v['img']?>" alt="" width="100px" height="160px"/></td>
														<td><?=$v["add_time"]?></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<a href="?r=type/del&id=<?=$v['t_id']?>">删除</a>
																<a href="?r=type/update&id=<?=$v['t_id']?>">修改</a>
															</div>
														</td>
													</tr>
												<?php endforeach ?>
												</div>
												</tbody>
											</table>
                                            <div class="pagination-part">
                                                <nav>
                                                    <?php
                                                    echo yii\widgets\LinkPager::widget([
                                                        'pagination' => $data['pages'],
                                                    ]);
                                                    ?>
                                                </nav>
                                            </div>
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
