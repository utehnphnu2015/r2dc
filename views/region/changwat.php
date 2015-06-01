<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\TopicRegion;
?>

<?php
$this->params['breadcrumbs'][] = ['label' => 'รายการตัวชี้วัดระดับเขต', 'url' => ['index', 'rep_year' => $rep_year]];
$this->params['breadcrumbs'][] = 'รายจังหวัด';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title" ><i class="glyphicon glyphicon-th-list"></i> 
            ตัวชี้วัดเขต
            <span style="color: #0000cc">
                <?php
                $topic = TopicRegion::find()->where(['id' => $kpi_id])->asArray()->one();
                echo $kpi_id;
                ?>
            </span>
        </h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
        <div style="color: teal">
            <h4><?= $topic['topic']; ?></h4>
        </div>
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <div class="before-body" style="margin-top:  5dp;margin-bottom: 5dp">
            <div class="pull-left">
                <a class="btn btn-flat btn-warning"
                   href="<?= Url::to(['index', 'rep_year' => $rep_year]) ?>">
                    <i class="fa fa-undo"></i>
                </a> 
            </div>

            <div class="pull-right">
                <h4>
                    <span style="background-color:#00A2E8; color: white;padding: 5px">ปีงบประมาณ <?= $rep_year + 543 ?></span>
                </h4>
            </div>
        </div>
        <hr style="color: white;line-height: 0px;border-color: white">
        <div class="grid-content">
            <?php
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '0'],
                'summary' => '',
                'columns' => [
                    [
                        'attribute' => 'provcode',
                        'label' => ''
                    ],
                    [//คลิก column
                        'attribute' => 'provname',
                        'label' => 'จังหวัด',
                        'format' => 'raw',
                        'value' => function($data) use ($kpi_id, $rep_year) {
                            $params = [
                                'region/ampur', // action
                                'kpi_id' => $kpi_id,
                                'rep_year' => $rep_year,
                                'provcode' => $data['provcode']
                            ];

                            return Html::a($data['provname'], $params);
                        }
                            ],
                            [
                                'attribute' => 'target',
                                'header' => 'เป้าหมาย'
                            ],
                            [
                                'attribute' => 'total',
                                'header' => 'ผลงาน'
                            ],
                            [
                                'attribute' => 'ratio',
                                'header' => 'อัตรา(%)'
                            ],
                            [
                                'attribute' => 'mon1',
                                'header' => 'ตค.'
                            ],
                            [
                                'attribute' => 'mon2',
                                'header' => 'พย.'
                            ],
                            [
                                'attribute' => 'mon3',
                                'header' => 'ธค.'
                            ],
                            [
                                'attribute' => 'mon4',
                                'header' => 'มค.'
                            ],
                            [
                                'attribute' => 'mon5',
                                'header' => 'กพ.'
                            ],
                            [
                                'attribute' => 'mon6',
                                'header' => 'มีค.'
                            ],
                            [
                                'attribute' => 'mon7',
                                'header' => 'เมย.'
                            ],
                            [
                                'attribute' => 'mon8',
                                'header' => 'พค.'
                            ],
                            [
                                'attribute' => 'mon9',
                                'header' => 'มิย.'
                            ],
                            [
                                'attribute' => 'mon10',
                                'header' => 'กค.'
                            ],
                            [
                                'attribute' => 'mon11',
                                'header' => 'สค.'
                            ],
                            [
                                'attribute' => 'mon12',
                                'header' => 'กย.'
                            ],
                    ]]);
                    ?>


                    <!--จบ content-->
                </div>

            </div><!-- /.box -->
        </div>

        <!--ส่วนแสดงกราฟ-->
        <div class="box">
            <div class="box-header with-border">
                <div><h4>แผนภูมิ</h4></div>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <?php

                use miloschuman\highcharts\Highcharts;
                ?>
                <div style="display: none">
                    <?php
                    echo Highcharts::widget([
                        'scripts' => [
                            'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                            //'modules/exporting', // adds Exporting button/menu to chart
                            //'themes/grid',       // applies global 'grid' theme to all charts
                            //'highcharts-3d',
                            'modules/drilldown'
                        ]
                    ]);
                    ?>
                </div>
                <?php
                // เตรียมข้อมูลสำหรับกราฟ
                $model = $dataProvider->getModels();
                $data = [];
                for ($i = 0; $i < count($model); $i++) {
                    $data[] = [
                        'name' => $model[$i]['provname'],
                        'y' => $model[$i]['ratio'] * 1
                    ];
                }
                $chart_data = json_encode($data);
                ?>


                <div id="chart">แสดงกราฟ</div>

                <?php
                $topic=$topic['topic'];
                $this->registerJs(" 
    $(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
         credits: {
            enabled: false
        },
        title: {
            text: '$topic'
        },
        
         yAxis: {
            min: 0,
            title: {
                text: 'อัตรา (%)'
            },
            
        },
         xAxis: {
            type: 'category'
        },
       
        series: [{
                name: 'จังหวัด',
                colorByPoint: true,
                data:$chart_data
        }]
     });
    });
");
                ?>


    </div>
</div>
