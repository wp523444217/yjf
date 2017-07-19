<?php
$page=empty($_GET['page'])?"1":$_GET['page'];
$l=5;
$zong=count($data);
$pian=($page-1)*$l;
$ye=ceil($zong/$l);
//echo $ye;die;
$data=array_slice($data,$pian,$l);

$shang=($page-1)<1?"1":$page-1;

$xia=$page+1>$ye?$ye:$page+1;
?>

<center>
<div class="main-content">
					

					<div class="page-content">
						<div class="page-header">
							<h1>
								礼物列表展示
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
														<th>礼物ID</th>
														<th>礼物名字</th>
														<th class="hidden-480">礼物价钱</th>
                                                        <th>礼物图片</th>
														<th>编辑</th>
													</tr>
												</thead>

												<tbody id="tbod">
                                                <?php foreach($data as $k=>$v){?>
													<tr  att="<?php echo $v['l_id']?>">
													    <td><?= $v['l_id']?></td>
														<td><span class="l_name" ar="<?= $v['l_name']?>"><?= $v['l_name']?></span></td>
														<td><span class="l_money" ar="<?= $v['l_money']?>"><?= $v['l_money']?></span></td>
														<td><img src="<?=$v['l_img']?>" alt="" width="100px" height="50px"/></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
																<span class="btn btn-xs btn-warning">
                                                                    <a href="?r=liwu/del&id=<?= $v['l_id']?>"><i class="icon-flag bigger-120"></i></a>
																</span>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>
																</div>
															</div>
														</td>
													</tr>
                                                <?php }?>
												</tbody>
											</table>
                                            <div class="dataTables_paginate paging_bootstrap">
                                            <a href="?r=liwu/show&page=1">首页</a>
                                            <a href="?r=liwu/show&page=<?= $shang?>">上一页</a>
                                            <a href="?r=liwu/show&page=<?= $xia?>">下一页</a>
                                            <a href="?r=liwu/show&page=<?= $ye?>">尾页</a>
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
    $(document).on("click",".l_name",function(){
        var old_l_name=$(this).attr("ar");
        $(this).parent().html("<input type='text' style='width: 50px' class='new_l_name' value='"+old_l_name+"'>");
        $("input").focus();
    });
    $(document).on("blur",".new_l_name",function(){
        var old_l_name=$(this).attr("ar");
        var new_l_name=$(this).val();
        var l_name=$(this);
        var l_id=$(this).parents("tr").attr("att");
        if(new_l_name!=old_l_name){
            $.ajax({
                type:'post',
                url:"?r=liwu/update",
                data:{
                    'l_name':new_l_name,
                    'l_id':l_id
                },
                success:function(data){
                    l_name.parent().html("<span   class='l_name' ar='<?= $v['l_name']?>'>"+new_l_name+"</span>");
                }
            });
        }else{
            l_name.parent().html("<span   class='l_name' ar='<?= $v['l_name']?>'>"+old_l_name+"</span>");
        }
    });

    $(document).on("click",".l_money",function(){
        var old_l_money=$(this).attr("ar");
        $(this).parent().html("<input type='text' style='width: 50px' class='new_l_money' value='"+old_l_money+"'>");
        $("input").focus();
    });
    $(document).on("blur",".new_l_money",function(){
        var old_l_money=$(this).attr("ar");
        var new_l_money=$(this).val();
        var l_money=$(this);
        var l_id=$(this).parents("tr").attr("att");
        if(new_l_money!=old_l_money){
            $.ajax({
                type:'post',
                url:"?r=liwu/update",
                data:{
                    'l_money':new_l_money,
                    'l_money3':new_l_money,
                    'l_money2':new_l_money,
                    'l_id':l_id
                },
                success:function(data){

                    l_money.parent().html("<span  class='l_money' ar='<?= $v['l_money']?>'>"+new_l_money+"</span>");
                }
            });
        }else{
            l_money.parent().html("<span  class='l_money' ar='<?= $v['l_money']?>'>"+old_l_money+"</span>");
        }
    });
</script>