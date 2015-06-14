<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cchangwat".
 *
 * @property string $provcode
 * @property string $provname
 * @property string $zonecode
 */
class Cchangwat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cchangwat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provcode'], 'required'],
            [['provcode', 'zonecode'], 'string', 'max' => 2],
            [['provname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'provcode' => 'Provcode',
            'provname' => 'Provname',
            'zonecode' => 'Zonecode',
        ];
    }
}
