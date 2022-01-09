<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $car_img
 * @property string $car_name
 * @property string $description
 * @property string $year_of_production
 * @property float $vehicle_mileage
 * @property string|null $fuel
 * @property int|null $available
 * @property int|null $own_by
 *
 * @property User $ownBy
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_img', 'car_name', 'description', 'year_of_production', 'vehicle_mileage'], 'required'],
            [['year_of_production'], 'safe'],
            [['vehicle_mileage'], 'number'],
            [['available', 'own_by'], 'integer'],
            [['car_img', 'car_name', 'description', 'fuel'], 'string', 'max' => 55],
            [['own_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['own_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_img' => 'Car Img',
            'car_name' => 'Car Name',
            'description' => 'Description',
            'year_of_production' => 'Year Of Production',
            'vehicle_mileage' => 'Vehicle Mileage',
            'fuel' => 'Fuel',
            'available' => 'Available',
            'own_by' => 'Own By',
        ];
    }

    /**
     * Gets query for [[OwnBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwnBy()
    {
        return $this->hasOne(User::className(), ['id' => 'own_by']);
    }
}
