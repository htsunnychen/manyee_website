<?php

namespace app\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $prod_cd
 * @property string $created_date
 * @property string $created_by
 * @property string $last_updated_date
 * @property string $last_updated_by
 *
 * @property ProductLang[] $productLangs
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'prod_cd'], 'required'],
            [['category_id'], 'integer'],
            [['created_date', 'last_updated_date'], 'safe'],
            [['prod_cd'], 'string', 'max' => 255],
            [['created_by', 'last_updated_by'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'prod_cd' => 'Prod Cd',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'last_updated_date' => 'Last Updated Date',
            'last_updated_by' => 'Last Updated By',
        ];
    }

    public function behaviors()
    {
        return [
            'ml' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'zh-HK' => 'Chinese (HK)',
                    'zh-CN' => 'Chinese (China)',
                    'en-US' => 'English',
                ],
                //'languageField' => 'language',
                //'localizedPrefix' => '',
                //'requireTranslations' => false',
                //'dynamicLangClass' => true',
                //'langClassName' => PostLang::className(), // or namespace/for/a/class/PostLang
                //'defaultLanguage' => Yii::$app->params['model_default_language'],
                'abridge' => false,
                'defaultLanguage' => 'zh-HK',
                'langForeignKey' => 'product_id',
                'tableName' => "{{%product_lang}}",
                'attributes' => [
                    'name', 'description',
                ]
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductLangs()
    {
        return $this->hasMany(ProductLang::className(), ['product_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MultilingualQuery(get_called_class());
    }
}
