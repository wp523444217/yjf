<center>
	<div class="main-content">
					
					<div class="page-content">
						<div class="page-header">
							<h1>
								添加直播分类
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post" onsubmit="return submitTest();">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 直播分类： </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="t_name" placeholder="直播分类名称" class="col-xs-10 col-sm-5"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 是否隐藏： </label>

										<div class="col-sm-9">
										<label class="col-sm-1 " for="form-field-1"> 是：</label>
											<input type="radio" name="t_state" id="form-field-1" class="col-xs-1" value="1" checked="checked" />
											<label class="col-sm-1 " for="form-field-1"> 否：</label>
											<input type="radio" id="form-field-1" name="t_state" class="col-xs-1"  value="0"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 排序： </label>

										<div class="col-sm-9">
											<input type="text" name="t_sort" id="form-field-1" placeholder="0~50" class="col-xs-1"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 父级分类： </label>

										<div class="col-sm-1">
											<select value="0" name="p_t_id">
												<option value="0">顶级分类</option>
												<?php foreach ($parents as $k => $v): ?>
													<option value="<?= $v['t_id']?>">--<?= $v["t_name"];?> </option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类图片： </label>

                                        <div class="col-sm-9">
                                            <input type="file" name="img" class="col-xs-10 col-sm-5"/>

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