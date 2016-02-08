<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\I18n\Time;
use Cake\Network\Exception\InternalErrorException;
/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events */
class EventsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function validation()
    {
        $this->loadModel('EventsOwners');
        $data = [
            'owner_id' => $this->request->params['owner'],
            'event_id' => $this->request->params['event'],
            'vehicle_id' => $this->request->params['vehicle'],
            'id' => $this->request->params['id']
        ];
        $inscription = $this->EventsOwners->find()
            ->where([
                'owner_id' => $data['owner_id'],
                'event_id' => $data['event_id'],
                'vehicle_id' => $data['vehicle_id'],
                'id '=> $data['id'],
            ])
            ->first();

        $inscription = $this->EventsOwners->patchEntity($inscription, $data);
        if ( $inscription->is_valid ) {
            $inscription->is_valid = false;
        } else {
            $inscription->is_valid = true;
        }
        if ($this->EventsOwners->save($inscription)) {
            $this->Flash->success(__('The event has been saved.'));
            return $this->redirect($this->referer());
        } else {
            $this->Flash->error(__('Une erreur est survenue lors du changement de status de l\'inscription'));
        }
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('events', $this->paginate($this->Events));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Owners']
        ]);
        $this->loadModel('EventsOwners');
        $list = $this->EventsOwners->find()
            ->where(['event_id' => $event->id])
            ->contain(['Owners', 'Vehicles', 'Events']);
        $valids = [];
        $waiting = [];
        $refused = [];
        /*debug($list->toArray());
        die();*/
        foreach ( $list as $owners ) {
            if (!$owners->vehicle->is_banned) {
                if (!$owners->is_valid) {
                    $waiting[] = $owners;
                }
                if ($owners->is_valid) {
                    $valids[] = $owners;
                }
            } else {
                $refused[] = $owners;
            }
        }
        $this->set(compact(['event', 'valids', 'waiting', 'refused', 'list']));
        $this->set('_serialize', ['event']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['start'] = new Time($this->request->data['start']);
            $this->request->data['end'] = new Time($this->request->data['end']);
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $owners = $this->Events->Owners->find('list', ['limit' => 200]);
        $this->set(compact('event', 'owners'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Owners']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }
        $owners = $this->Events->Owners->find('list', ['limit' => 200]);
        $this->set(compact('event', 'owners'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
