<div class="main-content">
					
					<div class="page-content">
						<div class="page-header">
							<h1>
								添加礼物
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" action="?r=liwu/add" method="post" enctype="multipart/form-data">
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物名字： </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="l_name" placeholder="礼物名字" class="col-xs-10 col-sm-5" v-model="fenlei" v-on:keyup="up()"/>
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物价格： </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="l_money" placeholder="礼物价格" class="col-xs-10 col-sm-5" v-model="fenlei" v-on:keyup="up()"/>
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物图片： </label>

										<div class="col-sm-9">
											<input type="file" id="form-field-1" name="l_img" placeholder="礼物图片" class="col-xs-10 col-sm-5" v-model="fenlei"/>
											
										</div>
									</div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										
											<input type="submit">
										</div>
									</div>

								
									

									
								</form>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->