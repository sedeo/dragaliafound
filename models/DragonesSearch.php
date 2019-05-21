<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dragones;

/**
 * DragonesSearch represents the model behind the search form of `app\models\Dragones`.
 */
class DragonesSearch extends Dragones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hab_id', 'pas1_id', 'pas2_id'], 'integer'],
            [['nombre', 'elemento', 'backstory', 'resistencia_elemental', 'imagen_entera', 'imagen_minimizada'], 'safe'],
            [['rareza', 'vida_base', 'vida_maxima', 'fuerza_base', 'fuerza_maxima', 'vida_base_pasiva', 'fuerza_base_pasiva', 'vida_maxima_pasiva', 'fuerza_maxima_pasiva', 'resistencia_base', 'resistencia_maxima'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Dragones::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'rareza' => $this->rareza,
            'hab_id' => $this->hab_id,
            'pas1_id' => $this->pas1_id,
            'pas2_id' => $this->pas2_id,
            'vida_base' => $this->vida_base,
            'vida_maxima' => $this->vida_maxima,
            'fuerza_base' => $this->fuerza_base,
            'fuerza_maxima' => $this->fuerza_maxima,
            'vida_base_pasiva' => $this->vida_base_pasiva,
            'fuerza_base_pasiva' => $this->fuerza_base_pasiva,
            'vida_maxima_pasiva' => $this->vida_maxima_pasiva,
            'fuerza_maxima_pasiva' => $this->fuerza_maxima_pasiva,
            'resistencia_base' => $this->resistencia_base,
            'resistencia_maxima' => $this->resistencia_maxima,
        ]);

        $query->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'elemento', $this->elemento])
            ->andFilterWhere(['ilike', 'backstory', $this->backstory])
            ->andFilterWhere(['ilike', 'resistencia_elemental', $this->resistencia_elemental])
            ->andFilterWhere(['ilike', 'imagen_entera', $this->imagen_entera])
            ->andFilterWhere(['ilike', 'imagen_minimizada', $this->imagen_minimizada]);

        return $dataProvider;
    }
}
