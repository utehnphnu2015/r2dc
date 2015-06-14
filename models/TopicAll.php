<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topic_all".
 *
 * @property string $id
 * @property string $topic
 * @property string $kpi_group
 * @property string $resource
 * @property string $table_type
 * @property string $baseline
 * @property string $frequency
 * @property string $note1
 * @property string $note2
 * @property string $note3
 * @property string $note4
 * @property string $note5
 */
class TopicAll extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic_all';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['kpi_group', 'resource', 'table_type', 'frequency'], 'string'],
            [['baseline'], 'number'],
            [['id'], 'string', 'max' => 6],
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
            'kpi_group' => 'Kpi Group',
            'resource' => 'Resource',
            'table_type' => 'Table Type',
            'baseline' => 'Baseline',
            'frequency' => 'Frequency',
            'note1' => 'Note1',
            'note2' => 'Note2',
            'note3' => 'Note3',
            'note4' => 'Note4',
            'note5' => 'Note5',
        ];
    }
}
