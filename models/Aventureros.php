<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aventureros".
 *
 * @property int $id
 * @property string $nombre
 * @property string $rareza
 * @property string $elemento
 * @property string $arma
 * @property int $hab1_id
 * @property int $hab2_id
 * @property int $pas1_id
 * @property int $pas2_id
 * @property int $pas3_id
 * @property int $coab_id
 * @property string $backstory
 * @property string $vida_base
 * @property string $vida_maxima
 * @property string $vida4promocion
 * @property string $vida5promocion
 * @property string $vida40nodos
 * @property string $vida45nodos
 * @property string $vida50nodos
 * @property string $fuerza_base
 * @property string $fuerza_maxima
 * @property string $fuerza4promocion
 * @property string $fuerza5promoción
 * @property string $fuerza40nodos
 * @property string $fuerza45nodos
 * @property string $fuerza50nodos
 * @property string $imagen_entera
 * @property string $imagen_minimizada
 *
 * @property Cohabilidades $coab
 * @property Habilidades $hab1
 * @property Habilidades $hab2
 * @property Pasivas $pas1
 * @property Pasivas $pas2
 * @property Pasivas $pas3
 */
class Aventureros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aventureros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['rareza', 'vida_base', 'vida_maxima', 'vida4promocion', 'vida5promocion', 'vida40nodos', 'vida45nodos', 'vida50nodos', 'fuerza_base', 'fuerza_maxima', 'fuerza4promocion', 'fuerza5promoción', 'fuerza40nodos', 'fuerza45nodos', 'fuerza50nodos'], 'number'],
            [['hab1_id', 'hab2_id', 'pas1_id', 'pas2_id', 'pas3_id', 'coab_id'], 'default', 'value' => null],
            [['hab1_id', 'hab2_id', 'pas1_id', 'pas2_id', 'pas3_id', 'coab_id'], 'integer'],
            [['nombre', 'elemento', 'arma', 'imagen_entera', 'imagen_minimizada'], 'string', 'max' => 255],
            [['backstory'], 'string', 'max' => 1000],
            [['coab_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cohabilidades::className(), 'targetAttribute' => ['coab_id' => 'id']],
            [['hab1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Habilidades::className(), 'targetAttribute' => ['hab1_id' => 'id']],
            [['hab2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Habilidades::className(), 'targetAttribute' => ['hab2_id' => 'id']],
            [['pas1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasivas::className(), 'targetAttribute' => ['pas1_id' => 'id']],
            [['pas2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasivas::className(), 'targetAttribute' => ['pas2_id' => 'id']],
            [['pas3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasivas::className(), 'targetAttribute' => ['pas3_id' => 'id']],
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
            'rareza' => 'Rareza',
            'elemento' => 'Elemento',
            'arma' => 'Arma',
            'hab1_id' => 'Hab1 ID',
            'hab2_id' => 'Hab2 ID',
            'pas1_id' => 'Pas1 ID',
            'pas2_id' => 'Pas2 ID',
            'pas3_id' => 'Pas3 ID',
            'coab_id' => 'Coab ID',
            'backstory' => 'Backstory',
            'vida_base' => 'Vida Base',
            'vida_maxima' => 'Vida Maxima',
            'vida4promocion' => 'Vida4promocion',
            'vida5promocion' => 'Vida5promocion',
            'vida40nodos' => 'Vida40nodos',
            'vida45nodos' => 'Vida45nodos',
            'vida50nodos' => 'Vida50nodos',
            'fuerza_base' => 'Fuerza Base',
            'fuerza_maxima' => 'Fuerza Maxima',
            'fuerza4promocion' => 'Fuerza4promocion',
            'fuerza5promoción' => 'Fuerza5promoción',
            'fuerza40nodos' => 'Fuerza40nodos',
            'fuerza45nodos' => 'Fuerza45nodos',
            'fuerza50nodos' => 'Fuerza50nodos',
            'imagen_entera' => 'Imagen Entera',
            'imagen_minimizada' => 'Imagen Minimizada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoab()
    {
        return $this->hasOne(Cohabilidades::className(), ['id' => 'coab_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHab1()
    {
        return $this->hasOne(Habilidades::className(), ['id' => 'hab1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHab2()
    {
        return $this->hasOne(Habilidades::className(), ['id' => 'hab2_id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPas3()
    {
        return $this->hasOne(Pasivas::className(), ['id' => 'pas3_id']);
    }
}
