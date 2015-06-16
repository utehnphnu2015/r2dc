<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kpi_type_3".
 *
 * @property string $kpi_id
 * @property string $rep_year
 * @property string $provcode
 * @property integer $target
 * @property integer $total
 * @property integer $mon1
 * @property integer $mon2
 * @property integer $mon3
 * @property integer $mon4
 * @property integer $mon5
 * @property integer $mon6
 * @property integer $mon7
 * @property integer $mon8
 * @property integer $mon9
 * @property integer $mon10
 * @property integer $mon11
 * @property integer $mon12
 * @property string $ratio
 */
class KpiType3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kpi_type_3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kpi_id', 'rep_year', 'provcode'], 'required'],
            [['target', 'total', 'mon1', 'mon2', 'mon3', 'mon4', 'mon5', 'mon6', 'mon7', 'mon8', 'mon9', 'mon10', 'mon11', 'mon12'], 'integer'],
            [['kpi_id'], 'string', 'max' => 11],
            [['rep_year'], 'string', 'max' => 4],
            [['provcode'], 'string', 'max' => 2],
            [['ratio'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kpi_id' => 'รหัสตัวชี้วัด',
            'rep_year' => 'ปีงบประมาณ',
            'provcode' => 'จังหวัด',
            'target' => 'เป้าหมาย',
            'total' => 'ผลงาน',
            'mon1' => 'ต.ค.',
            'mon2' => 'พ.ย.',
            'mon3' => 'ธ.ค.',
            'mon4' => 'ม.ค.',
            'mon5' => 'ก.พ.',
            'mon6' => 'มี.ค.',
            'mon7' => 'เม.ย.',
            'mon8' => 'พ.ค.',
            'mon9' => 'มิ.ย.',
            'mon10' => 'ก.ค.',
            'mon11' => 'ส.ค.',
            'mon12' => 'ก.ย.',
            'ratio' => 'ร้อยละ',
        ];
    }
}
