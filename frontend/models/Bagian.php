<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bagian".
 *
 * @property integer $id_bagian
 * @property string $k_d_bagian
 * @property string $nama_bagian
 */
class Bagian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bagian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bagian', 'k_d_bagian', 'nama_bagian'], 'required'],
            [['id_bagian'], 'integer'],
            [['k_d_bagian', 'nama_bagian'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bagian' => 'Id Bagian',
            'k_d_bagian' => 'K D Bagian',
            'nama_bagian' => 'Nama Bagian',
        ];
    }
}
