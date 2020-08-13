<?php

namespace app\models;

use yii\base\Model;

class Pekerja extends Model{
    public $nama, $jabatan, $email, $keterangan;
    public function rules(){
        return [
            [['nama', 'jabatan', 'email', 'keterangan'], 'required'],
            ['email', 'email'],
            ['keterangan', 'string', 'max'=>150]
        ];
    }

    public function dataJabatan(){
        return [
            1 => 'CEO',
            2 => 'COO',
            3 => 'Supervisor'
        ];
    }
}


?>