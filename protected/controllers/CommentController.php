<?php



class CommentController extends Controller {


	public function actionIndex(){

		//$this->render('showcomments');
		$cf = Yii::app()->Request->getPost('CommentForm');
		if(isset($cf)){
			$saved = new CommentForm;
			$saved->attributes = $cf;
			$saved->save();
			var_dump($saved->load());

		}


		$model = new CommentForm;
		
		// collect user input data
		if(isset($_POST['CommentForm']))
		{
			$model->attributes=$_POST['CommentForm'];
		}
		// display the login form
		
		$this->render('showcomments', array('model'=>$model));


	}

	public function actionAdd(){
		$this->render('add');

	}



	public function addForm() {


		
	}

}

