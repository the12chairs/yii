<?php

class CommentForm extends CFormModel
{
	public $name;
	public $email;
	public $comment;
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(

			array('name, email, comment', 'required'),
			// email has to be a valid email address
			array('email', 'email')

		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}


	public function save() {
		if(!isset(Yii::app()->session['comments']))
			Yii::app()->session['comments'] = [];

		$tmp = Yii::app()->session['comments'];
		array_push($tmp, $this->attributes);
		Yii::app()->session['comments'] = $tmp;

	}

	public function load(){
		$arr = [];
		foreach (Yii::app()->session['comments'] as $i)
			array_push($arr, new CommentForm($i));
		return $arr;
	}

}