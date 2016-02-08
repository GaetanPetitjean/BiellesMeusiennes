<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events */
class EventsController extends AppController
{

    public function inscription($id = null)
    {
        /*if (! $id ) {
            return $this->redirect($this->referer());
        }*/
        $event = $this->Events->get($id);
        /*if (! $event ) {
            return $this->redirect($this->referer());
        }*/
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->loadModel('Owners');
            $this->loadModel('Vehicles');
            $this->loadModel('EventsOwners');

            $owner = $this->Owners->newEntity($this->request->data['Owners']);

            $this->request->data['Vehicles']['date_circu'] = new Time($this->request->data['Vehicles']['date_circu']);
            $vehicle = $this->Vehicles->newEntity($this->request->data['Vehicles']);

            if ( $this->Owners->save($owner) ) {
                $vehicle->owner_id = $owner->id;
                if ( $this->Vehicles->save($vehicle) ) {
                    $data = [
                        'event_id' => $event->id,
                        'owner_id' => $owner->id,
                        'vehicle_id' => $vehicle->id,
                        'is_valid' => 0
                    ];
                    $registration = $this->EventsOwners->newEntity($data);
                    if ( $this->EventsOwners->save( $registration ) ){
                        $this->Flash->success(__('Votre inscription à bien été prise en compte'));
                        return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
                    } else {
                        $this->Flash->error(__('Une erreur est survenue, merci de bien vouloir rééssayer, si le problème persiste contactez un administrateur.'));
                    }
                }
            }
        }
        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }

}
