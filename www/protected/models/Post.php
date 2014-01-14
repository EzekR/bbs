<?php

/**
 * This is the model class for table "{{post}}".
 *
 * The followings are the available columns in table '{{post}}':
 * @property string $id
 * @property string $userId
 * @property string $title
 * @property string $nodeId
 * @property string $content
 * @property integer $status
 * @property string $reply
 * @property string $sort
 * @property string $hits
 * @property string $lastUpdateUserId
 * @property string $createTime
 * @property string $updateTime
 */
class Post extends CActiveRecord
{
    const STATUS_NORMAL = 1;
    const STATUS_FROZEN = 2;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{post}}';
    }

    public function statusList() {
        return array(
            self::STATUS_NORMAL => '正常',
            self::STATUS_FROZEN => '冻结',
        );
    }

    public function displayStatus($status = null) {

        if (null === $status) {
            $status = $this->status;
        }
        $list = $this->statusList();
        
        if (isset($list[$status])) {
            return $list[$status];
        }

        return $status;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('userId, title, nodeId, content', 'required'),
            array('status', 'numerical', 'integerOnly'=>true),
            array('userId, nodeId, reply, sort, hits, lastUpdateUserId, createTime, updateTime', 'length', 'max'=>10),
            array('title', 'length', 'max'=>256),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, userId', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => '#',
            'userId' => '用户',
            'title' => '标题',
            'nodeId' => '节点',
            'content' => '内容',
            'status' => '状态',
            'reply' => '回复数',
            'sort' => '排序',
            'hits' => '浏览',
            'lastUpdateUserId' => '最后更新人',
            'createTime' => '创建日期',
            'updateTime' => '更新日期',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        $criteria=new CDbCriteria;
        $criteria->compare('id',$this->id);
        $criteria->compare('userId',$this->userId);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination' => array('pageSize' => 20,)
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Post the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
