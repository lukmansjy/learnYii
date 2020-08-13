<?php

namespace app\models;

use yii\db\ActiveRecord;

class Pekerja extends ActiveRecord{
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