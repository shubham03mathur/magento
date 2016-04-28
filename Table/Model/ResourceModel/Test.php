<?php
namespace Excellence\Table\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_table_test','table_id');
    }
    public function loadByName($Name){
        $table = $this->getMainTable();
        $where = $this->getConnection()->quoteInto("Name = ?", $Name);
        $sql = $this->getConnection()->select()->from($table,array('table_id'))->where($where);
        $id = $this->getConnection()->fetchOne($sql);
        return $id;
    }

}
