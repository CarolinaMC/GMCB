<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cliente Controller
 *
 * @property \App\Model\Table\ClienteTable $Cliente
 *
 * @method \App\Model\Entity\Cliente[] paginate($object = null, array $settings = [])
 */
class ClienteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    var $paginate = array('limit'=>5,'order'=>array('cedula'));
    
    public function index()
    {
        $cliente = $this->paginate($this->Cliente);

        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Cliente->get($id, [
            'contain' => []
        ]);

        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Cliente->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Cliente->patchEntity($cliente, $this->request->getData());
            if ($this->Cliente->save($cliente)) {
                $this->Flash->success(__('El cliente se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            else{
                if(sizeof($cliente)>0)
                    $this->Flash->error(__('Este numero de cedula ya existe.'));
                else{
                    $this->Flash->error(__('El cliente no pudo ser guardado. Intente de nuevo.'));
                    }
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Cliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Cliente->patchEntity($cliente, $this->request->getData());
            if ($this->Cliente->save($cliente)) {
                $this->Flash->success(__('El cliente se actualizó correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cliente no pudo ser actualizado. Intente de nuevo.'));
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Cliente->get($id);
        if ($this->Cliente->delete($cliente)) {
            $this->Flash->success(__('El cliente se ha eliminado.'));
        } else {
            $this->Flash->error(__('El cliente no pudo ser eliminado. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
