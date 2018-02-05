<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
class RelasiController extends Controller {
  public function actionIndex()
  {
    $query = Yii::$app->db->createCommand("SELECT k.nip, k.nama, k.jabatan, g.golongan, b.nama_bagian
	FROM karyawan k INNER JOIN bagian b ON k.id_bagian = b.id_bagian
	INNER JOIN gaji g ON k.id_gaji = g.id_gaji") //Masukkan QUERY
    ->queryAll();
    return $this->render('index', [
      'query' => $query
    ]);
  }
} 