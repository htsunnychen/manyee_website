<?
namespace app\models;

use yii\db\ActiveQuery;
use omgdef\multilingual\MultilingualTrait;

class MultilingualQuery extends ActiveQuery
{
    use MultilingualTrait;
}