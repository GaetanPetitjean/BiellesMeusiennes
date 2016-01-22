<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class VehiclesTable extends Table
{

    /**
     * Initialize method.
     *
     * @param array $config The configuration for the Table.
     *
     * @return void
     */
    public function initialize(array $config)
    {
      $this->table('vehicles');
      $this->displayField('marque');
      $this->primaryKey('id');
      $this->addBehavior('Timestamp');

      $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id',
        ]);

      $this->belongsToMany('Events', [
          'through' => 'EventsOwners',
      ]);
    }
}
