<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\hoadon;

/**
 * Searchhoadon represents the model behind the search form about `app\models\hoadon`.
 */
class Searchhoadon extends hoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHD', 'NgayLap', 'MaKH', 'KhachHang_MaKH'], 'safe'],
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
        $query = hoadon::find();

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
            'NgayLap' => $this->NgayLap,
        ]);

        $query->andFilterWhere(['like', 'MaHD', $this->MaHD])
            ->andFilterWhere(['like', 'MaKH', $this->MaKH])
            ->andFilterWhere(['like', 'KhachHang_MaKH', $this->KhachHang_MaKH]);

        return $dataProvider;
    }
}
