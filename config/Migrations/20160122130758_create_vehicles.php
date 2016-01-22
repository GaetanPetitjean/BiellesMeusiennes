<?php

use Phinx\Migration\AbstractMigration;

class CreateVehicles extends AbstractMigration
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
      $table = $this->table('vehicles');
      $table
        ->addColumn('owner_id', 'integer')
        ->addColumn('marque', 'string', ['limit' => 50])
        ->addColumn('model', 'string', ['limit' => 50])
        ->addColumn('model_info', 'text')
        ->addColumn('date_circu', 'datetime')
        ->addColumn('imat', 'string', ['limit' => 50])
        ->addColumn('infos', 'text')
        ->addColumn('is_valid', 'boolean')
        ->addColumn('created', 'datetime')
        ->addIndex(array('imat'), array('unique' => true))
        ->create();
    }
}
