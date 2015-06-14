<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chospital2".
 *
 * @property string $hospcode
 * @property string $hosname
 * @property string $hostype
 * @property string $htype
 * @property string $address
 * @property string $road
 * @property string $mu
 * @property string $subdistcode
 * @property string $ampcode
 * @property string $provcode
 * @property string $postcode
 * @property string $hoscodenew
 * @property string $bed
 * @property string $level_service
 * @property string $bedhos
 */
class Chospital2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chospital2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hospcode'], 'required'],
            [['hospcode', 'postcode', 'bed', 'bedhos'], 'string', 'max' => 5],
            [['hosname', 'level_service'], 'string', 'max' => 255],
            [['hostype', 'mu', 'subdistcode', 'ampcode', 'provcode'], 'string', 'max' => 2],
            [['htype'], 'string', 'max' => 1],
            [['address', 'road'], 'string', 'max' => 50],
            [['hoscodenew'], 'string', 'max' => 9]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hospcode' => 'Hospcode',
            'hosname' => 'Hosname',
            'hostype' => 'Hostype',
            'htype' => 'Htype',
            'address' => 'Address',
            'road' => 'Road',
            'mu' => 'Mu',
            'subdistcode' => 'Subdistcode',
            'ampcode' => 'Ampcode',
            'provcode' => 'Provcode',
            'postcode' => 'Postcode',
            'hoscodenew' => 'Hoscodenew',
            'bed' => 'จำนวนเตียง',
            'level_service' => 'ระดับการบริการ',
            'bedhos' => 'Bedhos',
        ];
    }
}
