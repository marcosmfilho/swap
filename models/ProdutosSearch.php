<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProdutosModel;

/**
 * ProdutosSearch represents the model behind the search form about `app\models\ProdutosModel`.
 */
class ProdutosSearch extends ProdutosModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprodutos'], 'integer'],
            [['user_id', 'title', 'description', 'images', 'category', 'date', 'preferencias_troca'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ProdutosModel::find();

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
            'idprodutos' => $this->idprodutos,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'preferencias_troca', $this->preferencias_troca]);

        return $dataProvider;
    }
}
