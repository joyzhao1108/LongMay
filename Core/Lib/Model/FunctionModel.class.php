<?php
    class FunctionModel extends RelationModel{
	protected $_link = array(
        'Domain'=>array(
    'mapping_type'    =>BELONGS_TO,
                    'class_name'    =>'Domain',
    'foreign_key'=>'domainid',
    'as_fields'=>'name:domainname',
         ),
 );
}

?>