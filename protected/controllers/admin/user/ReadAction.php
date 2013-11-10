<?php
class ReadAction extends CAction
{
    public function run ($id)
    {

//        $dataProvider=new CActiveDataProvider('User'); using "index" view

        $this->controller
            ->render('view',
                array(
    //            'dataProvider'=>$dataProvider,
                  'model'=>$this->controller->loadModel($id),
                )
            );
        }
}