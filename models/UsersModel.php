<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "swap.user".
 *
 * @property integer $iduser
 * @property string $name_user
 * @property string $email
 * @property string $password
 * @property string $country
 * @property string $city
 * @property string $born_date
 */
class UsersModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'swap.user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['born_date'], 'safe'],
            [['name_user', 'password', 'country', 'city'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'name_user' => 'Name User',
            'email' => 'Email',
            'password' => 'Password',
            'country' => 'Country',
            'city' => 'City',
            'born_date' => 'Born Date',
        ];
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
