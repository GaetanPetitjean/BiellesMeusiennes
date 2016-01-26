<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
/**
 * Admin/App Controller
 *
 * @property \App\Model\Table\Admin/AppTable $Admin/App */
class AppController extends Controller
{
  /**
   * Initialization hook method.
   *
   * Use this method to add common initialization code like loading components.
   *
   * e.g. `$this->loadComponent('Security');`
   *
   * @return void
   */
  public function initialize()
  {
      parent::initialize();

      $this->loadComponent('RequestHandler');
      $this->loadComponent('Flash');
  }

  /**
   * Before render callback.
   *
   * @param \Cake\Event\Event $event The beforeRender event.
   * @return void
   */
  public function beforeRender(Event $event)
  {
      $this->viewBuilder()->layout('admin');
      if (!array_key_exists('_serialize', $this->viewVars) &&
          in_array($this->response->type(), ['application/json', 'application/xml'])
      ) {
          $this->set('_serialize', true);
      }
  }
}
