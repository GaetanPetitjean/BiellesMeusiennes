<?php

use Phinx\Migration\AbstractMigration;

class CreateProprietaires extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
      $table = $this->table('owners');
      $table
        ->addColumn('firstname', 'string', ['limit' => 50])
        ->addColumn('lastname', 'string', ['limit' => 50])
        ->addColumn('type', 'string', ['limit' => 5])
        ->addColumn('email', 'string', ['limit' => 255])
        ->addColumn('adress1', 'string', ['limit' => 255])
        ->addColumn('adress2', 'string', ['limit' => 255])
        ->addColumn('adress3', 'string', ['limit' => 255])
        ->addColumn('city', 'string', ['limit' => 100])
        ->addColumn('cp', 'integer')
        ->addColumn('cedex', 'string', ['limit' => 50])
        ->addColumn('country', 'string', ['limit' => 50])
        ->addColumn('created', 'datetime')
        ->addColumn('modified', 'datetime')
        ->addIndex(array('email'), array('unique' => true))
        ->create();
    }
}
