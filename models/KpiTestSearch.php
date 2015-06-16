<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KpiTest;

/**
 * KpiTestSearch represents the model behind the search form about `app\models\KpiTest`.
 */
class KpiTestSearch extends KpiTest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kpi_id', 'rep_year', 'hospcode', 'provcode', 'ampcode', 'ratio'], 'safe'],
            [['target', 'total', 'mon1', 'mon2', 'mon3', 'mon4', 'mon5', 'mon6', 'mon7', 'mon8', 'mon9', 'mon10', 'mon11', 'mon12'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = KpiTest::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'target' => $this->target,
            'total' => $this->total,
            'mon1' => $this->mon1,
            'mon2' => $this->mon2,
            'mon3' => $this->mon3,
            'mon4' => $this->mon4,
            'mon5' => $this->mon5,
            'mon6' => $this->mon6,
            'mon7' => $this->mon7,
            'mon8' => $this->mon8,
            'mon9' => $this->mon9,
            'mon10' => $this->mon10,
            'mon11' => $this->mon11,
            'mon12' => $this->mon12,
        ]);

        $query->andFilterWhere(['like', 'kpi_id', $this->kpi_id])
            ->andFilterWhere(['like', 'rep_year', $this->rep_year])
            ->andFilterWhere(['like', 'hospcode', $this->hospcode])
            ->andFilterWhere(['like', 'provcode', $this->provcode])
            ->andFilterWhere(['like', 'ampcode', $this->ampcode])
            ->andFilterWhere(['like', 'ratio', $this->ratio]);

        return $dataProvider;
    }
}
