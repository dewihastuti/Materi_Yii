<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bagian;

/**
 * BagianSearch represents the model behind the search form about `app\models\Bagian`.
 */
class BagianSearch extends Bagian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bagian'], 'integer'],
            [['k_d_bagian', 'nama_bagian'], 'safe'],
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
        $query = Bagian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_bagian' => $this->id_bagian,
        ]);

        $query->andFilterWhere(['like', 'k_d_bagian', $this->k_d_bagian])
            ->andFilterWhere(['like', 'nama_bagian', $this->nama_bagian]);

        return $dataProvider;
    }
}
