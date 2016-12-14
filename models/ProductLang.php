<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_lang".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $language
 * @property string $name
 * @property string $description
 * @property string $created_date
 * @property string $created_by
 * @property string $last_updated_date
 * @property string $last_updated_by
 *
 * @property Product $product
 */
class ProductLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'language'], 'required'],
            [['product_id'], 'integer'],
            [['description'], 'string'],
            [['created_date', 'last_updated_date'], 'safe'],
            [['language'], 'string', 'max' => 6],
            [['name'], 'string', 'max' => 255],
            [['created_by', 'last_updated_by'], 'string', 'max' => 15],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'language' => 'Language',
            'name' => 'Name',
            'description' => 'Description',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'last_updated_date' => 'Last Updated Date',
            'last_updated_by' => 'Last Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
