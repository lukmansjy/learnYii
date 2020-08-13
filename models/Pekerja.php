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

    public function labelJabatan(){
        switch($this->jabatan){
            case 1:
                return 'CEO';
            case 2:
                return 'COO';
            case 3:
                return 'Supervisor';
            default:
                return 'Unknow';
        }
    }
}


?>