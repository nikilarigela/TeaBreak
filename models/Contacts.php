<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $contact_id
 * @property string $contact_name
 * @property string $contact_mail
 * @property string $contact_post
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_id', 'contact_name', 'contact_mail', 'contact_post'], 'required'],
            [['contact_id'], 'integer'],
            [['contact_post'], 'string'],
            [['contact_name', 'contact_mail'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'contact_name' => 'Contact Name',
            'contact_mail' => 'Contact Mail',
            'contact_post' => 'Contact Post',
        ];
    }
}
