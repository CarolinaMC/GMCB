<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Repuesto Controller
 *
 *
 * @method \App\Model\Entity\Repuesto[] paginate($object = null, array $settings = [])
 */
class RepuestoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $repuesto = $this->paginate($this->Repuesto);

        $this->set(compact('repuesto'));
        $this->set('_serialize', ['repuesto']);
    }

    /**
     * View method
     *
     * @param string|null $id Repuesto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repuesto = $this->Repuesto->get($id, [
            'contain' => []
        ]);

        $this->set('repuesto', $repuesto);
        $this->set('_serialize', ['repuesto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repuesto = $this->Repuesto->newEntity();
        if ($this->request->is('post')) {
            $repuesto = $this->Repuesto->patchEntity($repuesto, $this->request->getData());
            if ($this->Repuesto->save($repuesto)) {
                $this->Flash->success(__('The repuesto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repuesto could not be saved. Please, try again.'));
        }
        $this->set(compact('repuesto'));
        $this->set('_serialize', ['repuesto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Repuesto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repuesto = $this->Repuesto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repuesto = $this->Repuesto->patchEntity($repuesto, $this->request->getData());
            if ($this->Repuesto->save($repuesto)) {
                $this->Flash->success(__('The repuesto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repuesto could not be saved. Please, try again.'));
        }
        $this->set(compact('repuesto'));
        $this->set('_serialize', ['repuesto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Repuesto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repuesto = $this->Repuesto->get($id);
        if ($this->Repuesto->delete($repuesto)) {
            $this->Flash->success(__('The repuesto has been deleted.'));
        } else {
            $this->Flash->error(__('The repuesto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
