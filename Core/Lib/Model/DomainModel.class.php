<?php
class DomainModel extends Model{
	
	//所有的用户组
	public function getAllDomain($where = '',$field = '*') {
		return $this->field($field)->where($where)->select();
	}
}
?>