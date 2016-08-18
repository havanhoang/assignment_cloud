<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property string $MaKH
 * @property string $TenKH
 * @property string $DiaChi
 * @property string $SoDT
 *
 * @property Hoadon[] $hoadons
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKH', 'TenKH', 'DiaChi', 'SoDT'], 'required'],
            [['MaKH'], 'string', 'max' => 10],
            [['TenKH', 'DiaChi'], 'string', 'max' => 200],
            [['SoDT'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKH' => 'Ma Kh',
            'TenKH' => 'Ten Kh',
            'DiaChi' => 'Dia Chi',
            'SoDT' => 'So Dt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadons()
    {
        return $this->hasMany(Hoadon::className(), ['KhachHang_MaKH' => 'MaKH']);
    }
}
