<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EventsTable extends Table
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
      $this->table('events');
      $this->displayField('name');
      $this->primaryKey('id');
      $this->addBehavior('Timestamp');

      $this->belongsToMany('Owners', [
          'through' => 'EventsOwners',
      ]);
      $this->addBehavior('Xety/Cake3Upload.Upload', [
        'fields' => [
            'thumb' => [
                'path' => 'upload/events/:id/:md5',
                'prefix' => '/',
                'defaultFile' => '/upload/events/default.jpg'
            ]
        ]
    ]
);
    }
}
