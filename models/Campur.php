<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campur".
 *
 * @property string $ampcode
 * @property string $ampname
 * @property string $ampcodefull
 * @property string $provcode
 * @property string $flag_status
 */
class Campur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ampcode', 'ampcodefull', 'provcode'], 'required'],
            [['ampcode', 'provcode'], 'string', 'max' => 2],
            [['ampname'], 'string', 'max' => 255],
            [['ampcodefull'], 'string', 'max' => 4],
            [['flag_status'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ampcode' => 'Ampcode',
            'ampname' => 'Ampname',
            'ampcodefull' => 'Ampcodefull',
            'provcode' => 'Provcode',
            'flag_status' => 'สถานนะของพื้นที่ 0=ปกติ 1=เลิกใช้(แยก/ย้ายไปพื้นที่อื่น)',
        ];
    }
}
