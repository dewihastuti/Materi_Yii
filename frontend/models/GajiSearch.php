<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gaji;

/**
 * GajiSearch represents the model behind the search form about `app\models\Gaji`.
 */
class GajiSearch extends Gaji
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gaji_pokok', 'tunjangan_gaji', 'golongan'], 'safe'],
            [['id_gaji'], 'integer'],
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
        $query = Gaji::find();

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
            'id_gaji' => $this->id_gaji,
        ]);

        $query->andFilterWhere(['like', 'gaji_pokok', $this->gaji_pokok])
            ->andFilterWhere(['like', 'tunjangan_gaji', $this->tunjangan_gaji])
            ->andFilterWhere(['like', 'golongan', $this->golongan]);

        return $dataProvider;
    }
}
