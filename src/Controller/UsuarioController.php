<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 *
 * @method \App\Model\Entity\Usuario[] paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController
{


    public function login(){
        if($this->request->is('post')){
            $usuario=$this->Auth->identify();
            if($usuario){
                $this->Auth->setUser($usuario);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else{
                $this->Flash->error('Datos son incorrectos', ['key'=>'auth']);
            }

        }


    }

    

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function home(){
        $this->render();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    var $paginate = array('limit'=>5,'order'=>array('cedula'));
    
    public function index()
    {
        $usuario = $this->paginate($this->Usuario);

        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => []
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuario->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('El usuario se guardo correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
             else{
                if(sizeof($usuario)>0)
                    $this->Flash->error(__('Este numero de cedula ya existe.'));
                else{
                    $this->Flash->error(__('El usuario no pudo ser guardado. Intente de nuevo.'));
                    }
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('El usuario se actualizó correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser actualizado. Intente de nuevo.'));
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        if ($this->Usuario->delete($usuario)) {
            $this->Flash->success(__('El usuario se eliminó correctamente.'));
        } else {
            $this->Flash->error(__('El usuario no pudo ser eliminado. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
