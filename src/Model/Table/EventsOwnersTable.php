<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EventsOwnersTable extends Table
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
      $this->table('events_owners');
      $this->primaryKey('id');
      $this->addBehavior('Timestamp');

      $this->belongsTo('Owners', [
          'foreignKey' => 'owner_id',
      ]);
      $this->belongsTo('Events', [
          'foreignKey' => 'event_id',
      ]);
      $this->belongsTo('Vehicles', [
          'foreignKey' => 'vehicle_id',
      ]);
    }
}
