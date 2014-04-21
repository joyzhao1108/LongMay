<?php
    class Wxuser_funcModel extends RelationModel{
    protected $_validate = array(
        array('expiredate','require','过期时间不能为空',3),
        array('token,funcid','','用户名称已经存在！',1,'unique',3) // 新增修改时候验证username字段是否唯一
     );
    protected $_auto = array (
        array('time','time',self::MODEL_INSERT,'function'),
        array('status','getstatus',self::MODEL_INSERT,'callback')
    );

        protected $_link = array(
            'Function'=>array(
                'mapping_type'    =>BELONGS_TO,
                'class_name'    =>'Function',
                'foreign_key'=>'funcid',
                'as_fields'=>'name:funcname,domainid,sort',
            ),
        );
        public function getstatus(){
            return 1;
        }
}

?>