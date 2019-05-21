<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

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
            [['nombre', 'elemento', 'backstory', 'resistencia_elemental', 'imagen_entera', 'imagen_minimizada', 'hab.nombre', 'pas1.nombre', 'pas2.nombre'], 'safe'],
            [['rareza', 'vida_base', 'vida_maxima', 'fuerza_base', 'fuerza_maxima', 'vida_base_pasiva', 'fuerza_base_pasiva', 'vida_maxima_pasiva', 'fuerza_maxima_pasiva', 'resistencia_base', 'resistencia_maxima'], 'number'],
        ];
    }

    public function attributes()
    {
        return array_merge(parent::attributes(), ['hab.nombre', 'pas1.nombre', 'pas2.nombre']);
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
     * Creates data provider instance with search query applied.
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Dragones::find()->alias('dr')->joinWith(['hab h', 'pas1 p1', 'pas2 p2']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['hab.nombre'] = [
            'asc' => ['h.nombre' => SORT_ASC],
            'desc' => ['h.nombre' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['pas1.nombre'] = [
            'asc' => ['p1.nombre' => SORT_ASC],
            'desc' => ['p1.nombre' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['pas2.nombre'] = [
            'asc' => ['p2.nombre' => SORT_ASC],
            'desc' => ['p2.nombre' => SORT_DESC],
        ];

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

        $query->andFilterWhere(['ilike', 'dr.nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'elemento', $this->elemento])
            ->andFilterWhere(['ilike', 'backstory', $this->backstory])
            ->andFilterWhere(['ilike', 'resistencia_elemental', $this->resistencia_elemental])
            ->andFilterWhere(['ilike', 'imagen_entera', $this->imagen_entera])
            ->andFilterWhere(['ilike', 'imagen_minimizada', $this->imagen_minimizada])
            ->andFilterWhere(['ilike', 'h.nombre', $this->getAttribute('hab.nombre')])
            ->andFilterWhere(['ilike', 'p1.nombre', $this->getAttribute('pas1.nombre')])
            ->andFilterWhere(['ilike', 'p2.nombre', $this->getAttribute('pas2.nombre')]);

        return $dataProvider;
    }
}
