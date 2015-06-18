<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/js/dashboard2.js', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
?>
<!-- Info boxes -->
<div class="row">
    <?php
    $url1 = Yii::$app->urlManager->createUrl(['moph/index']);
    $url2 = Yii::$app->urlManager->createUrl(['region/index']);
    $url3 = Yii::$app->urlManager->createUrl(['qof/index']);
    $url4 = Yii::$app->urlManager->createUrl(['cmi/index']);
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url1?>'">
        
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">ตัวชี้วัดกระทรวง</span>
                <span class="info-box-number">22</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
       
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url2?>'">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-building-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">ตัวชี้วัดเขต</span>
               <span class="info-box-number">7</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url3?>'">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">QOF</span>
               <span class="info-box-number">13</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url4?>'">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CMI</span>
                <span class="info-box-number">47</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">ผู้ป่วยนอก</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8">
                        <p class="text-center">
                            <strong>OP: ปี 2558</strong>
                        </p>
                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" height="240"></canvas>
                        </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                        <p class="text-center">
                            <strong>อัตราครองเตียง</strong>
                        </p>
                        <div class="progress-group">
                            <span class="progress-text">พิษณุโลก</span>
                            <span class="progress-number"><b>80</b>%</span>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                            </div>
                        </div><!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">อุตรดิตถ์</span>
                            <span class="progress-number"><b>64</b>%</span>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-red" style="width: 64%"></div>
                            </div>
                        </div><!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">เพชรบูรณ์</span>
                            <span class="progress-number"><b>78</b>%</span>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 78%"></div>
                            </div>
                        </div><!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">สุโขทัย</span>
                            <span class="progress-number"><b>54</b>%</span>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-yellow" style="width: 54%"></div>
                            </div>
                        </div><!-- /.progress-group -->
                         <div class="progress-group">
                            <span class="progress-text">ตาก</span>
                            <span class="progress-number"><b>67</b>%</span>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-yellow" style="width: 67%"></div>
                            </div>
                        </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- ./box-body -->
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                            <h5 class="description-header">35,210</h5>
                            <span class="description-text">ทางเดินหายใจ</span>
                        </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">10,390</h5>
                            <span class="description-text">ทางเดินอาหาร</span>
                        </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                            <h5 class="description-header">24,813</h5>
                            <span class="description-text">หัวใจและหลอดเลือก</span>
                        </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block">
                            <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                            <h5 class="description-header">1200</h5>
                            <span class="description-text">กล้ามเนื้อและกระดูก</span>
                        </div><!-- /.description-block -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <div class="col-md-8">
        <!-- MAP & BOX PANE -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">ที่ตั้งหน่วยบริการ</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="pad">
                            <!-- Map will be created here -->
                            <div id="world-map-markers" style="height: 325px;"></div>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-md-3 col-sm-4">
                        <div class="pad box-pane-right bg-green" style="min-height: 280px">
                            <div class="description-block margin-bottom">
                                <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                <h5 class="description-header">8390</h5>
                                <span class="description-text">OP</span>
                            </div><!-- /.description-block -->
                            <div class="description-block margin-bottom">
                                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                <h5 class="description-header">30%</h5>
                                <span class="description-text">PP</span>
                            </div><!-- /.description-block -->
                            <div class="description-block">
                                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                <h5 class="description-header">70%</h5>
                                <span class="description-text">IP</span>
                            </div><!-- /.description-block -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    

        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Sync</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Popularity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="label label-success">Shipped</span></td>
                                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="label label-danger">Delivered</span></td>
                                <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-info">Processing</span></td>
                                <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="label label-danger">Delivered</span></td>
                                <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="label label-success">Shipped</span></td>
                                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <span class="progress-description">
                    50% Increase in 30 Days
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                </div>
                <span class="progress-description">
                    20% Increase in 30 Days
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    70% Increase in 30 Days
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                </div>
                <span class="progress-description">
                    40% Increase in 30 Days
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">อัตรา</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="chart-responsive">
                            <canvas id="pieChart" height="150"></canvas>
                        </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                            <li><i class="fa fa-circle-o text-red"></i> มะเร็ง</li>
                            <li><i class="fa fa-circle-o text-green"></i> หัวใจ</li>
                            <li><i class="fa fa-circle-o text-yellow"></i> เบาหวาน</li>
                            <li><i class="fa fa-circle-o text-aqua"></i> ความดัน</li>
                            <li><i class="fa fa-circle-o text-light-blue"></i> TB</li>
                            
                        </ul>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">พิษณุโลก<span class="pull-right text-red">12%</span></a></li>
                    <li><a href="#">เพชรบูรณ์<span class="pull-right text-green">4%</span></a></li>
                    <li><a href="#">สุโขทัย<span class="pull-right text-yellow">0%</span></a></li>
                    <li><a href="#">อุตรดิตถ์<span class="pull-right text-yellow">0%</span></a></li>
                    <li><a href="#">ตาก<span class="pull-right text-yellow">0%</span></a></li>
                </ul>
            </div><!-- /.footer -->
        </div><!-- /.box -->

       
    </div><!-- /.col -->
</div><!-- /.row -->

<?php
$js = <<< JS
        
     //alert('ddd');   
        
        
JS;

$this->registerJs($js);

?>
