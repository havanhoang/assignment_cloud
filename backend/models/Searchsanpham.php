<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\sanpham;

/**
 * Searchsanpham represents the model behind the search form about `app\models\sanpham`.
 */
class Searchsanpham extends sanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'TenSP', 'SoLuong', 'MoTa', 'MaLoaiSP', 'LoaiSanPham_MaLoaiSP'], 'safe'],
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
        $query = sanpham::find();

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
        $query->andFilterWhere(['like', 'MaSP', $this->MaSP])
            ->andFilterWhere(['like', 'TenSP', $this->TenSP])
            ->andFilterWhere(['like', 'SoLuong', $this->SoLuong])
            ->andFilterWhere(['like', 'MoTa', $this->MoTa])
            ->andFilterWhere(['like', 'MaLoaiSP', $this->MaLoaiSP])
            ->andFilterWhere(['like', 'LoaiSanPham_MaLoaiSP', $this->LoaiSanPham_MaLoaiSP]);

        return $dataProvider;
    }
}
