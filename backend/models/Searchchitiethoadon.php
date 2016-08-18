<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\chitiethoadon;

/**
 * Searchchitiethoadon represents the model behind the search form about `app\models\chitiethoadon`.
 */
class Searchchitiethoadon extends chitiethoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaHD', 'SoLuongMua', 'HoaDon_MaHD', 'SanPham_MaSP'], 'safe'],
            [['DonGiaBan'], 'number'],
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
        $query = chitiethoadon::find();

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
            'DonGiaBan' => $this->DonGiaBan,
        ]);

        $query->andFilterWhere(['like', 'MaSP', $this->MaSP])
            ->andFilterWhere(['like', 'MaHD', $this->MaHD])
            ->andFilterWhere(['like', 'SoLuongMua', $this->SoLuongMua])
            ->andFilterWhere(['like', 'HoaDon_MaHD', $this->HoaDon_MaHD])
            ->andFilterWhere(['like', 'SanPham_MaSP', $this->SanPham_MaSP]);

        return $dataProvider;
    }
}
