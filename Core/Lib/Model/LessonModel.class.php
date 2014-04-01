<?php
    class LessonModel extends RelationModel{
    protected $_validate = array(
            array('name','require','名称不能为空',1),
            array('catid','require','请选择分类',1)
     );
    protected $_auto = array (
    array('token','gettoken',1,'callback'),
        array('time','time',1,'function')
    );
    function gettoken(){
		return session('token');
	}
	protected $_link = array(
        'Lesson_cat'=>array(
    'mapping_type'    =>BELONGS_TO,
                    'class_name'    =>'Lesson_cat',
    'foreign_key'=>'catid',
    'as_fields'=>'name:catname',
         ),
 );
}

?>