<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "benchmark".
 *
 * @property int $id
 * @property string $framework
 * @property float $nilai
 * @property int $penggunaan
 */
class Benchmark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'benchmark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['framework', 'nilai', 'penggunaan'], 'required'],
            [['nilai'], 'number'],
            [['penggunaan'], 'integer'],
            [['framework'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'framework' => 'Framework',
            'nilai' => 'Nilai',
            'penggunaan' => 'Penggunaan',
        ];
    }
}
