<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Receptionist Controller
 *
 * @property \App\Model\Table\ReceptionistTable $Receptionist
 *
 * @method \App\Model\Entity\Receptionist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReceptionistController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $receptionist = $this->paginate($this->Receptionist);

        $this->set(compact('receptionist'));
    }

    /**
     * View method
     *
     * @param string|null $id Receptionist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receptionist = $this->Receptionist->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('receptionist', $receptionist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receptionist = $this->Receptionist->newEntity();
        if ($this->request->is('post')) {
            $receptionist = $this->Receptionist->patchEntity($receptionist, $this->request->getData());
            if ($this->Receptionist->save($receptionist)) {
                $this->Flash->success(__('The receptionist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receptionist could not be saved. Please, try again.'));
        }
        $users = $this->Receptionist->Users->find('list', ['limit' => 200]);
        $this->set(compact('receptionist', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Receptionist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receptionist = $this->Receptionist->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receptionist = $this->Receptionist->patchEntity($receptionist, $this->request->getData());
            if ($this->Receptionist->save($receptionist)) {
                $this->Flash->success(__('The receptionist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receptionist could not be saved. Please, try again.'));
        }
        $users = $this->Receptionist->Users->find('list', ['limit' => 200]);
        $this->set(compact('receptionist', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Receptionist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receptionist = $this->Receptionist->get($id);
        if ($this->Receptionist->delete($receptionist)) {
            $this->Flash->success(__('The receptionist has been deleted.'));
        } else {
            $this->Flash->error(__('The receptionist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
