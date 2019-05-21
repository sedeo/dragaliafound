<?php

namespace app\models;

/**
 * This is the model class for table "dragones".
 *
 * @property int $id
 * @property string $nombre
 * @property string $elemento
 * @property string $rareza
 * @property string $backstory
 * @property int $hab_id
 * @property int $pas1_id
 * @property int $pas2_id
 * @property string $vida_base
 * @property string $vida_maxima
 * @property string $fuerza_base
 * @property string $fuerza_maxima
 * @property string $vida_base_pasiva
 * @property string $fuerza_base_pasiva
 * @property string $vida_maxima_pasiva
 * @property string $fuerza_maxima_pasiva
 * @property string $resistencia_elemental
 * @property string $resistencia_base
 * @property string $resistencia_maxima
 * @property string $imagen_entera
 * @property string $imagen_minimizada
 *
 * @property Habilidades $hab
 * @property Pasivas $pas1
 * @property Pasivas $pas2
 */
class Dragones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dragones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['rareza', 'vida_base', 'vida_maxima', 'fuerza_base', 'fuerza_maxima', 'vida_base_pasiva', 'fuerza_base_pasiva', 'vida_maxima_pasiva', 'fuerza_maxima_pasiva', 'resistencia_base', 'resistencia_maxima'], 'number'],
            [['hab_id', 'pas1_id', 'pas2_id'], 'default', 'value' => null],
            [['hab_id', 'pas1_id', 'pas2_id'], 'integer'],
            [['nombre', 'elemento', 'resistencia_elemental', 'imagen_entera', 'imagen_minimizada'], 'string', 'max' => 255],
            [['backstory'], 'string', 'max' => 1000],
            [['hab_id'], 'exist', 'skipOnError' => true, 'targetClass' => Habilidades::className(), 'targetAttribute' => ['hab_id' => 'id']],
            [['pas1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasivas::className(), 'targetAttribute' => ['pas1_id' => 'id']],
            [['pas2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasivas::className(), 'targetAttribute' => ['pas2_id' => 'id']],
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
            'elemento' => 'Elemento',
            'rareza' => 'Rareza',
            'backstory' => 'Backstory',
            'hab_id' => 'Hab ID',
            'pas1_id' => 'Pas1 ID',
            'pas2_id' => 'Pas2 ID',
            'vida_base' => 'Vida Base',
            'vida_maxima' => 'Vida Maxima',
            'fuerza_base' => 'Fuerza Base',
            'fuerza_maxima' => 'Fuerza Maxima',
            'vida_base_pasiva' => 'Vida Base Pasiva',
            'fuerza_base_pasiva' => 'Fuerza Base Pasiva',
            'vida_maxima_pasiva' => 'Vida Maxima Pasiva',
            'fuerza_maxima_pasiva' => 'Fuerza Maxima Pasiva',
            'resistencia_elemental' => 'Resistencia Elemental',
            'resistencia_base' => 'Resistencia Base',
            'resistencia_maxima' => 'Resistencia Maxima',
            'imagen_entera' => 'Imagen Entera',
            'imagen_minimizada' => 'Icono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHab()
    {
        return $this->hasOne(Habilidades::className(), ['id' => 'hab_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPas1()
    {
        return $this->hasOne(Pasivas::className(), ['id' => 'pas1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPas2()
    {
        return $this->hasOne(Pasivas::className(), ['id' => 'pas2_id']);
    }
}
