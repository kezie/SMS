<?php

/**
 * BaseUsersOrganizations
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ID
 * @property integer $ID_user
 * @property integer $orgid
 * @property integer $active
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseUsersOrganizations extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('users_organizations');
        $this->hasColumn('ID', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('ID_user', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('orgid', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('active', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}