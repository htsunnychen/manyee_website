<?php

namespace app\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $created_date
 * @property string $created_by
 * @property string $last_updated_date
 * @property string $last_updated_by
 *
 * @property CategoryLang[] $categoryLangs
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['created_date', 'last_updated_date'], 'safe'],
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
            'parent_id' => 'Parent ID',
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
                'abridge' => false,
                'defaultLanguage' => 'zh-HK',
                'langForeignKey' => 'category_id',
                'tableName' => "{{%category_lang}}",
                'attributes' => [
                    'name',
                ]
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryLangs()
    {
        return $this->hasMany(CategoryLang::className(), ['category_id' => 'id']);
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
