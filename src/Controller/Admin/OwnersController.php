<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Owners Controller
 *
 * @property \App\Model\Table\OwnersTable $Owners */
class OwnersController extends AppController
{
    /**
     * Valid method
     *
     * @return bool
     */
    public function valid($val)
    {
      // Cette fonction permettra de valider ou de refuser l'inscription d'un owners. Cette fonction prend en parametre la valeur (true ou false) et selon cette valeur,
      // Nous validerons ou refuserons l'inscription.

      // cette requête est à faire en Ajax. et retournera si l'action à bien été effectué (true ou false).
    }


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('owners', $this->paginate($this->Owners));
        $this->set('_serialize', ['owners']);
    }

    /**
     * View method
     *
     * @param string|null $id Owner id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $owner = $this->Owners->get($id, [
            'contain' => ['Events', 'Vehicles']
        ]);
        $this->set('owner', $owner);
        $this->set('_serialize', ['owner']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $owner = $this->Owners->newEntity();
        if ($this->request->is('post')) {
            $owner = $this->Owners->patchEntity($owner, $this->request->data);
            if ($this->Owners->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The owner could not be saved. Please, try again.'));
            }
        }
        $events = $this->Owners->Events->find('list', ['limit' => 200]);
        $this->set(compact('owner', 'events'));
        $this->set('_serialize', ['owner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Owner id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $owner = $this->Owners->get($id, [
            'contain' => ['Events']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $owner = $this->Owners->patchEntity($owner, $this->request->data);
            if ($this->Owners->save($owner)) {
                $this->Flash->success(__('The owner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The owner could not be saved. Please, try again.'));
            }
        }
        $events = $this->Owners->Events->find('list', ['limit' => 200]);
        $this->set(compact('owner', 'events'));
        $this->set('_serialize', ['owner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Owner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $owner = $this->Owners->get($id);
        if ($this->Owners->delete($owner)) {
            $this->Flash->success(__('The owner has been deleted.'));
        } else {
            $this->Flash->error(__('The owner could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
