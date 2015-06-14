<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ctambon".
 *
 * @property string $tamboncode
 * @property string $tambonname
 * @property string $tamboncodefull
 * @property string $ampurcode
 * @property string $changwatcode
 * @property string $flag_status
 */
class Ctambon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ctambon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tamboncode', 'tamboncodefull', 'ampurcode', 'changwatcode'], 'required'],
            [['tamboncode', 'changwatcode'], 'string', 'max' => 2],
            [['tambonname'], 'string', 'max' => 255],
            [['tamboncodefull'], 'string', 'max' => 6],
            [['ampurcode'], 'string', 'max' => 4],
            [['flag_status'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tamboncode' => 'Tamboncode',
            'tambonname' => 'Tambonname',
            'tamboncodefull' => 'Tamboncodefull',
            'ampurcode' => 'Ampurcode',
            'changwatcode' => 'Changwatcode',
            'flag_status' => 'สถานนะของพื้นที่ 0=ปกติ 1=เลิกใช้(แยก/ย้ายไปพื้นที่อื่น)',
        ];
    }
}
