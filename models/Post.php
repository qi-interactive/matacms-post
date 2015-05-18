<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\post\models;

use Yii;
use matacms\interfaces\CalendarInterface;

/**
 * This is the model class for table "mata_post".
 *
 * @property integer $Id
 * @property string $Title
 * @property string $Author
 * @property string $Lead
 * @property string $Body
 * @property string $URI
 */
class Post extends \matacms\db\ActiveRecord implements CalendarInterface
{
    
    public static function tableName()
    {
        return 'mata_post';
    }

    public function rules()
    {
        return [
        [['Title', 'Body', 'URI', 'PublicationDate'], 'required'],
        [['Title', 'Lead', 'Body'], 'string'],
        [['Author'], 'string', 'max' => 128],
        [['URI'], 'string', 'max' => 255]
        ];
    }
    
    public function attributeLabels()
    {
        return [
        'Id' => 'ID',
        'Title' => 'Title',
        'Author' => 'Author',
        'Lead' => 'Lead',
        'Body' => 'Body',
        'URI' => 'Uri',
        ];
    }

    public static function getEventDateAttribute()
    {
        return 'PublicationDate';
    }

    public function getEventDate()
    {
        return $this->PublicationDate;
    }

    public function filterableAttributes() {
        return ["Title", "PublicationDate"];
    }

}
