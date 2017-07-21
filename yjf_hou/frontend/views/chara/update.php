<center>
	<div class="main-content">
					
					<div class="page-content">
						<div class="page-header">
							<h1>
								角色修改
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" action="?r=chara/updatedo" method="post" onsubmit="return submitTest();">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 角色名称： </label>

										<div class="col-sm-9">
										<input type="hidden" name="c_id" value="<?=$data['c_id']?>">
											<input type="text" id="form-field-1" name="c_name" value="<?=$data['c_name']?>" placeholder="直播分类名称" class="col-xs-10 col-sm-5"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 是否启用： </label>

										<div class="col-sm-9">
										<?php if ($data['c_state']): ?>
											<label class="col-sm-1 " for="form-field-1"> 是：</label>
											<input type="radio" name="c_state" id="form-field-1" class="col-xs-1" value="1" checked="checked" />
											<label class="col-sm-1 " for="form-field-1"> 否：</label>
											<input type="radio" id="form-field-1" name="c_state" class="col-xs-1" value="0"/>
										<?php else: ?>
											<label class="col-sm-1 " for="form-field-1"> 是：</label>
											<input type="radio" name="c_state" id="form-field-1" class="col-xs-1" value="1"/>
											<label class="col-sm-1 " for="form-field-1"> 否：</label>
											<input type="radio" id="form-field-1" name="c_state" class="col-xs-1" value="0" checked="checked"/>
										<?php endif ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 角色拥有权限： </label>

										<div class="col-sm-9">
											<?php foreach ($thority as $k => $v): ?>
												<?php if (in_array($v["t_id"],$thorId)): ?>
													<div class="form-group">
													<label class="col-sm-1 " for="form-field-2">
														<input type="checkbox" id="form-field-1" name="t_id[]" class="col-xs-1"  value="<?=$v['t_id']?>" checked="checked"/>
														<?=$v["t_name"]?>
													</label>
													</div>
	
												<?php else: ?>
													<div class="form-group">
													<label class="col-sm-1 " for="form-field-2">
														<input type="checkbox" id="form-field-1" name="t_id[]" class="col-xs-1"  value="<?=$v['t_id']?>"/>
														<?=$v["t_name"]?>
													</label>
													</div>

												<?php endif ?>
											<?php endforeach ?>
										</div>
									</div>
									<div class="clearfix form-actions">

										<div class="col-md-offset-3 col-md-9">
										
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

									
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>

									</div>
								</form>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
</center>
<script type="text/javascript">
function submitTest(){
		return true;
	}
</script>