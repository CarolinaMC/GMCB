<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Boleta Controller
 *
 * @property \App\Model\Table\BoletaTable $Boleta *
 * @method \App\Model\Entity\Boletum[] paginate($object = null, array $settings = [])
 */
class BoletaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $boleta = $this->paginate($this->Boleta);

        $this->set(compact('boleta'));
        $this->set('_serialize', ['boleta']);
    }

    /**
     * View method
     *
     * @param string|null $id Boletum id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $boletum = $this->Boleta->get($id, [
            'contain' => []
        ]);

        $this->set('boletum', $boletum);
        $this->set('_serialize', ['boletum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $boletum = $this->Boleta->newEntity();
        if ($this->request->is('post')) {
            $boletum = $this->Boleta->patchEntity($boletum, $this->request->getData());
            if ($this->Boleta->save($boletum)) {
                $this->Flash->success(__('The boletum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boletum could not be saved. Please, try again.'));
        }
        $Usuario_cedula= $this->Boleta->Usuario->find('list', array('fields'=>array('cedula')));
        $Cliente_cedula= $this->Boleta->Cliente->find('list', array('fields'=>array('cedula')));

        $this->set(compact('Cliente_cedula'));
        $this->set(compact('Usuario_cedula'));
        $this->set(compact('boletum'));
        $this->set('_serialize', ['boletum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Boletum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $boletum = $this->Boleta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $boletum = $this->Boleta->patchEntity($boletum, $this->request->getData());
            if ($this->Boleta->save($boletum)) {
                $this->Flash->success(__('The boletum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boletum could not be saved. Please, try again.'));
        }
        $this->set(compact('boletum'));
        $this->set('_serialize', ['boletum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Boletum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $boletum = $this->Boleta->get($id);
        if ($this->Boleta->delete($boletum)) {
            $this->Flash->success(__('The boletum has been deleted.'));
        } else {
            $this->Flash->error(__('The boletum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
