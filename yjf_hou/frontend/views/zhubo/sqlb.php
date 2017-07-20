<?php

?>

<center>
    <div class="main-content">


        <div class="page-content">
            <div class="page-header">
                <h1>
                    主播列表展示
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
                                        <th>主播ID</th>
                                        <th>主播名字</th>
                                        <th class="hidden-480">主播房间号</th>
                                        <th>编辑</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach($user_list as $k=>$v){?>
                                        <tr  att="<?php echo $v['z_id']?>">
                                            <td><?= $v['z_id']?></td>
                                            <td><?= $v['z_name']?></td>
                                            <td><?= $v['z_fang']?></td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">

																<span class="btn btn-xs btn-warning">
                                                                    <a href="?r=zhubo/del&id=<?= $v['z_id']?>"><i class="icon-flag bigger-120"></i></a>
																</span>
                                                                <span class="btn btn-xs btn-success">
                                                                    <a href="?r=zhubo/update&id=<?= $v['z_id']?>"><i class="icon-flag bigger-120"></i></a>
                                                                </span>
                                                </div>

                                               
                                            </td>
                                        </tr>
                                    <?php }?>
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
