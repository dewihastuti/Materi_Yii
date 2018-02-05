<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property integer $nip
 * @property string $nama
 * @property string $k_d_bagian
 * @property string $alamat
 * @property integer $id_bagian
 * @property integer $id_gaji
 * @property integer $id_karyawan
 * @property string $jabatan
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'k_d_bagian', 'alamat', 'id_bagian', 'id_gaji', 'id_karyawan', 'jabatan'], 'required'],
            [['nip', 'id_bagian', 'id_gaji', 'id_karyawan'], 'integer'],
            [['alamat'], 'string'],
            [['nama', 'k_d_bagian'], 'string', 'max' => 50],
            [['jabatan'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'k_d_bagian' => 'K D Bagian',
            'alamat' => 'Alamat',
            'id_bagian' => 'Id Bagian',
            'id_gaji' => 'Id Gaji',
            'id_karyawan' => 'Id Karyawan',
            'jabatan' => 'Jabatan',
        ];
    }
}
