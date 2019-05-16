<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "habilidades".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Aventureros[] $aventureros
 * @property Aventureros[] $aventureros0
 */
class Habilidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'habilidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 255],
            [['descripcion'], 'string', 'max' => 1000],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAventureros()
    {
        return $this->hasMany(Aventureros::className(), ['hab1_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAventureros0()
    {
        return $this->hasMany(Aventureros::className(), ['hab2_id' => 'id']);
    }
}
