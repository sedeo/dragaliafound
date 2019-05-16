<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasivas".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Aventureros[] $aventureros
 * @property Aventureros[] $aventureros0
 * @property Aventureros[] $aventureros1
 */
class Pasivas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasivas';
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
        return $this->hasMany(Aventureros::className(), ['pas1_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAventureros0()
    {
        return $this->hasMany(Aventureros::className(), ['pas2_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAventureros1()
    {
        return $this->hasMany(Aventureros::className(), ['pas3_id' => 'id']);
    }
}
