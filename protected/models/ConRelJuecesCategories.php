<?php

/**
 * This is the model class for table "2gom_con_rel_jueces_categories".
 *
 * The followings are the available columns in table '2gom_con_rel_jueces_categories':
 * @property string $id_categoty
 * @property string $id_juez
 *
 * The followings are the available model relations:
 * @property 2gomConCategoiries $idCategoty
 * @property 2gomJueEntJueces $idJuez
 */
class ConRelJuecesCategories extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '2gom_con_rel_jueces_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_categoty, id_juez', 'required'),
			array('id_categoty', 'length', 'max'=>11),
			array('id_juez', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_categoty, id_juez', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idCategoty' => array(self::BELONGS_TO, '2gomConCategoiries', 'id_categoty'),
			'idJuez' => array(self::BELONGS_TO, '2gomJueEntJueces', 'id_juez'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_categoty' => 'Id Categoty',
			'id_juez' => 'Id Juez',
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
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_categoty',$this->id_categoty,true);
		$criteria->compare('id_juez',$this->id_juez,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConRelJuecesCategories the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
