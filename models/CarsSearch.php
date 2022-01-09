<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cars;

/**
 * CarsSearch represents the model behind the search form of `app\models\Cars`.
 */
class CarsSearch extends Cars
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'available', 'own_by'], 'integer'],
            [['car_img', 'car_name', 'description', 'year_of_production', 'fuel'], 'safe'],
            [['vehicle_mileage'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Cars::find();

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
            'id' => $this->id,
            'year_of_production' => $this->year_of_production,
            'vehicle_mileage' => $this->vehicle_mileage,
            'available' => $this->available,
            'own_by' => $this->own_by,
        ]);

        $query->andFilterWhere(['like', 'car_img', $this->car_img])
            ->andFilterWhere(['like', 'car_name', $this->car_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'fuel', $this->fuel]);

        return $dataProvider;
    }
}
