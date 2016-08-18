<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property string $MaSP
 * @property string $MaHD
 * @property string $SoLuongMua
 * @property double $DonGiaBan
 * @property string $HoaDon_MaHD
 * @property string $SanPham_MaSP
 *
 * @property Hoadon $hoaDonMaHD
 * @property Sanpham $sanPhamMaSP
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaHD', 'SoLuongMua', 'DonGiaBan', 'HoaDon_MaHD', 'SanPham_MaSP'], 'required'],
            [['DonGiaBan'], 'number'],
            [['MaSP', 'MaHD', 'SoLuongMua', 'HoaDon_MaHD', 'SanPham_MaSP'], 'string', 'max' => 10],
            [['HoaDon_MaHD'], 'exist', 'skipOnError' => true, 'targetClass' => Hoadon::className(), 'targetAttribute' => ['HoaDon_MaHD' => 'MaHD']],
            [['SanPham_MaSP'], 'exist', 'skipOnError' => true, 'targetClass' => Sanpham::className(), 'targetAttribute' => ['SanPham_MaSP' => 'MaSP']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'MaHD' => 'Ma Hd',
            'SoLuongMua' => 'So Luong Mua',
            'DonGiaBan' => 'Don Gia Ban',
            'HoaDon_MaHD' => 'Hoa Don  Ma Hd',
            'SanPham_MaSP' => 'San Pham  Ma Sp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoaDonMaHD()
    {
        return $this->hasOne(Hoadon::className(), ['MaHD' => 'HoaDon_MaHD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanPhamMaSP()
    {
        return $this->hasOne(Sanpham::className(), ['MaSP' => 'SanPham_MaSP']);
    }
}
