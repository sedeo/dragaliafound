<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * AventurerosSearch represents the model behind the search form of `app\models\Aventureros`.
 */
class AventurerosSearch extends Aventureros
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hab1_id', 'hab2_id', 'pas1_id', 'pas2_id', 'pas3_id', 'coab_id'], 'integer'],
            [['nombre', 'elemento', 'arma', 'backstory', 'imagen_entera', 'imagen_minimizada', 'hab1.nombre', 'hab2.nombre'], 'safe'],
            [['rareza', 'vida_base', 'vida_maxima', 'vida4promocion', 'vida5promocion', 'vida40nodos', 'vida45nodos', 'vida50nodos', 'fuerza_base', 'fuerza_maxima', 'fuerza4promocion', 'fuerza5promoción', 'fuerza40nodos', 'fuerza45nodos', 'fuerza50nodos'], 'number'],
        ];
    }

    public function attributes()
    {
        return array_merge(parent::attributes(), ['hab1.nombre', 'hab2.nombre']);
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
        $query = Aventureros::find()->joinWith(['hab1', 'hab2 h']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['hab1.nombre'] = [
            'asc' => ['habilidades.nombre' => SORT_ASC],
            'desc' => ['habilidades.nombre' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['hab2.nombre'] = [
            'asc' => ['habilidades.nombre' => SORT_ASC],
            'desc' => ['habilidades.nombre' => SORT_DESC],
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
            'hab1_id' => $this->hab1_id,
            'hab2_id' => $this->hab2_id,
            'pas1_id' => $this->pas1_id,
            'pas2_id' => $this->pas2_id,
            'pas3_id' => $this->pas3_id,
            'coab_id' => $this->coab_id,
            'vida_base' => $this->vida_base,
            'vida_maxima' => $this->vida_maxima,
            'vida4promocion' => $this->vida4promocion,
            'vida5promocion' => $this->vida5promocion,
            'vida40nodos' => $this->vida40nodos,
            'vida45nodos' => $this->vida45nodos,
            'vida50nodos' => $this->vida50nodos,
            'fuerza_base' => $this->fuerza_base,
            'fuerza_maxima' => $this->fuerza_maxima,
            'fuerza4promocion' => $this->fuerza4promocion,
            'fuerza5promoción' => $this->fuerza5promoción,
            'fuerza40nodos' => $this->fuerza40nodos,
            'fuerza45nodos' => $this->fuerza45nodos,
            'fuerza50nodos' => $this->fuerza50nodos,
        ]);

        $query->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'elemento', $this->elemento])
            ->andFilterWhere(['ilike', 'arma', $this->arma])
            ->andFilterWhere(['ilike', 'backstory', $this->backstory])
            ->andFilterWhere(['ilike', 'imagen_entera', $this->imagen_entera])
            ->andFilterWhere(['ilike', 'imagen_minimizada', $this->imagen_minimizada])
            ->andFilterWhere(['ilike', 'habilidades.nombre', $this->getAttribute('hab1.nombre')])
            ->andFilterWhere(['ilike', 'habilidades.nombre', $this->getAttribute('hab2.nombre')]);

        return $dataProvider;
    }
}
