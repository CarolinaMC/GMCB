<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mantenimiento Controller
 *
 * @property \App\Model\Table\MantenimientoTable $Mantenimiento *
 * @method \App\Model\Entity\Mantenimiento[] paginate($object = null, array $settings = [])
 */
class MantenimientoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mantenimiento = $this->paginate($this->Mantenimiento);

        $this->set(compact('mantenimiento'));
        $this->set('_serialize', ['mantenimiento']);
    }

    /**
     * View method
     *
     * @param string|null $id Mantenimiento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mantenimiento = $this->Mantenimiento->get($id, [
            'contain' => []
        ]);

        $this->set('mantenimiento', $mantenimiento);
        $this->set('_serialize', ['mantenimiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mantenimiento = $this->Mantenimiento->newEntity();
        if ($this->request->is('post')) {
            $mantenimiento = $this->Mantenimiento->patchEntity($mantenimiento, $this->request->getData());
            if ($this->Mantenimiento->save($mantenimiento)) {
                $this->Flash->success(__('The mantenimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mantenimiento could not be saved. Please, try again.'));
        }
        $Bicicleta_serial1=$this->Mantenimiento->Bicicleta->find('list', array('fields'=>array('Bicicleta.serial')));

        $Boleta_serial= $this->Mantenimiento->Boleta->find('list', array('fields'=>array('Boleta.serial')));


        $this->set(compact('Bicicleta_serial1'));
        $this->set(compact('Boleta_serial'));
        $this->set(compact('mantenimiento'));
        $this->set('_serialize', ['mantenimiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mantenimiento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mantenimiento = $this->Mantenimiento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mantenimiento = $this->Mantenimiento->patchEntity($mantenimiento, $this->request->getData());
            if ($this->Mantenimiento->save($mantenimiento)) {
                $this->Flash->success(__('The mantenimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mantenimiento could not be saved. Please, try again.'));
        }
        $this->set(compact('mantenimiento'));
        $this->set('_serialize', ['mantenimiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mantenimiento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mantenimiento = $this->Mantenimiento->get($id);
        if ($this->Mantenimiento->delete($mantenimiento)) {
            $this->Flash->success(__('The mantenimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The mantenimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
