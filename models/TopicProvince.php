<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topic_province".
 *
 * @property integer $id
 * @property string $topic
 * @property string $note1
 * @property string $note2
 * @property string $note3
 * @property string $note4
 * @property string $note5
 */
class TopicProvince extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic_province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['topic', 'note1', 'note2', 'note3', 'note4', 'note5'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic' => 'Topic',
            'note1' => 'Note1',
            'note2' => 'Note2',
            'note3' => 'Note3',
            'note4' => 'Note4',
            'note5' => 'Note5',
        ];
    }
}
