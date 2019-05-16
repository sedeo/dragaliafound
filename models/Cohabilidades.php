<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cohabilidades".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $lvl1
 * @property string $lvl2
 * @property string $lvl3
 * @property string $lvl4
 * @property string $lvl5
 *
 * @property Aventureros[] $aventureros
 */
class Cohabilidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cohabilidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['lvl1', 'lvl2', 'lvl3', 'lvl4', 'lvl5'], 'number'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'lvl1' => 'Lvl1',
            'lvl2' => 'Lvl2',
            'lvl3' => 'Lvl3',
            'lvl4' => 'Lvl4',
            'lvl5' => 'Lvl5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAventureros()
    {
        return $this->hasMany(Aventureros::className(), ['coab_id' => 'id']);
    }
}
