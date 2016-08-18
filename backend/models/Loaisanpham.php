<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property string $MaLoaiSP
 * @property string $TenLoaiSP
 *
 * @property Sanpham[] $sanphams
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaLoaiSP', 'TenLoaiSP'], 'required'],
            [['MaLoaiSP'], 'string', 'max' => 10],
            [['TenLoaiSP'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLoaiSP' => 'Ma Loai Sp',
            'TenLoaiSP' => 'Ten Loai Sp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanphams()
    {
        return $this->hasMany(Sanpham::className(), ['LoaiSanPham_MaLoaiSP' => 'MaLoaiSP']);
    }
}
