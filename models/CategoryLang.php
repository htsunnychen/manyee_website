<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_lang".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $language
 * @property string $name
 * @property string $created_date
 * @property string $created_by
 * @property string $last_updated_date
 * @property string $last_updated_by
 *
 * @property Category $category
 */
class CategoryLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'language', 'name'], 'required'],
            [['category_id'], 'integer'],
            [['created_date', 'last_updated_date'], 'safe'],
            [['language'], 'string', 'max' => 6],
            [['name'], 'string', 'max' => 255],
            [['created_by', 'last_updated_by'], 'string', 'max' => 15],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'language' => 'Language',
            'name' => 'Name',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'last_updated_date' => 'Last Updated Date',
            'last_updated_by' => 'Last Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
