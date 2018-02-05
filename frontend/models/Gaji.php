<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property string $gaji_pokok
 * @property string $tunjangan_gaji
 * @property string $golongan
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gaji_pokok', 'tunjangan_gaji', 'golongan'], 'required'],
            [['gaji_pokok', 'tunjangan_gaji'], 'string', 'max' => 50],
            [['golongan'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_gaji' => 'Tunjangan Gaji',
            'golongan' => 'Golongan',
        ];
    }
}
