<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class OwnersTable extends Table
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
      $this->table('owners');
      $this->displayField('lastname');
      $this->primaryKey('id');
      $this->addBehavior('Timestamp');
      
      $this->hasMany('Vehicles', [
          'foreignKey' => 'owner_id',
          'dependent' => true,
          'cascadeCallbacks' => true
      ]);

      $this->belongsToMany('Events', [
          'through' => 'EventsOwners',
      ]);
    }
}
