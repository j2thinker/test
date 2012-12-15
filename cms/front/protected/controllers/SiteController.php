<?php
class SiteController extends Controller
{
	public function actions(){
		return array();
	}
	
	public function actionIndex(){
		$data = array() ;
		$this->render('index' , $data) ;
	}
	
	public function actionError(){
		
	}
	
}