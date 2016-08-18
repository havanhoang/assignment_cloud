<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\khachhang;

/**
 * Searchkhachhang represents the model behind the search form about `app\models\khachhang`.
 */
class Searchkhachhang extends khachhang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKH', 'TenKH', 'DiaChi', 'SoDT'], 'safe'],
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
        $query = khachhang::find();

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
        $query->andFilterWhere(['like', 'MaKH', $this->MaKH])
            ->andFilterWhere(['like', 'TenKH', $this->TenKH])
            ->andFilterWhere(['like', 'DiaChi', $this->DiaChi])
            ->andFilterWhere(['like', 'SoDT', $this->SoDT]);

        return $dataProvider;
    }
}
