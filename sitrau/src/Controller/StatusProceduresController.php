<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StatusProcedures Controller
 *
 * @property \App\Model\Table\StatusProceduresTable $StatusProcedures
 *
 * @method \App\Model\Entity\StatusProcedure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusProceduresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $statusProcedures = $this->paginate($this->StatusProcedures);

        $this->set(compact('statusProcedures'));
    }

    /**
     * View method
     *
     * @param string|null $id Status Procedure id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusProcedure = $this->StatusProcedures->get($id, [
            'contain' => ['UniversityProcedures'],
        ]);

        $this->set('statusProcedure', $statusProcedure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusProcedure = $this->StatusProcedures->newEntity();
        if ($this->request->is('post')) {
            $statusProcedure = $this->StatusProcedures->patchEntity($statusProcedure, $this->request->getData());
            if ($this->StatusProcedures->save($statusProcedure)) {
                $this->Flash->success(__('The status procedure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status procedure could not be saved. Please, try again.'));
        }
        $this->set(compact('statusProcedure'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status Procedure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusProcedure = $this->StatusProcedures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusProcedure = $this->StatusProcedures->patchEntity($statusProcedure, $this->request->getData());
            if ($this->StatusProcedures->save($statusProcedure)) {
                $this->Flash->success(__('The status procedure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status procedure could not be saved. Please, try again.'));
        }
        $this->set(compact('statusProcedure'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status Procedure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusProcedure = $this->StatusProcedures->get($id);
        if ($this->StatusProcedures->delete($statusProcedure)) {
            $this->Flash->success(__('The status procedure has been deleted.'));
        } else {
            $this->Flash->error(__('The status procedure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
