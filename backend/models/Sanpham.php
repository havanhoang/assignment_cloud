<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property string $MaSP
 * @property string $TenSP
 * @property string $SoLuong
 * @property string $MoTa
 * @property string $MaLoaiSP
 * @property string $LoaiSanPham_MaLoaiSP
 *
 * @property Chitiethoadon[] $chitiethoadons
 * @property Loaisanpham $loaiSanPhamMaLoaiSP
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'TenSP', 'SoLuong', 'MoTa', 'MaLoaiSP', 'LoaiSanPham_MaLoaiSP'], 'required'],
            [['MaSP', 'SoLuong', 'MaLoaiSP', 'LoaiSanPham_MaLoaiSP'], 'string', 'max' => 10],
            [['TenSP', 'MoTa'], 'string', 'max' => 250],
            [['LoaiSanPham_MaLoaiSP'], 'exist', 'skipOnError' => true, 'targetClass' => Loaisanpham::className(), 'targetAttribute' => ['LoaiSanPham_MaLoaiSP' => 'MaLoaiSP']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'TenSP' => 'Ten Sp',
            'SoLuong' => 'So Luong',
            'MoTa' => 'Mo Ta',
            'MaLoaiSP' => 'Ma Loai Sp',
            'LoaiSanPham_MaLoaiSP' => 'Loai San Pham  Ma Loai Sp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChitiethoadons()
    {
        return $this->hasMany(Chitiethoadon::className(), ['SanPham_MaSP' => 'MaSP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaiSanPhamMaLoaiSP()
    {
        return $this->hasOne(Loaisanpham::className(), ['MaLoaiSP' => 'LoaiSanPham_MaLoaiSP']);
    }
}
