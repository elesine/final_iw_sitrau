<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypesProcedures Controller
 *
 * @property \App\Model\Table\TypesProceduresTable $TypesProcedures
 *
 * @method \App\Model\Entity\TypesProcedure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesProceduresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typesProcedures = $this->paginate($this->TypesProcedures);

        $this->set(compact('typesProcedures'));
    }

    /**
     * View method
     *
     * @param string|null $id Types Procedure id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typesProcedure = $this->TypesProcedures->get($id, [
            'contain' => ['UniversityProcedures'],
        ]);

        $this->set('typesProcedure', $typesProcedure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typesProcedure = $this->TypesProcedures->newEntity();
        if ($this->request->is('post')) {
            $typesProcedure = $this->TypesProcedures->patchEntity($typesProcedure, $this->request->getData());
            if ($this->TypesProcedures->save($typesProcedure)) {
                $this->Flash->success(__('The types procedure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types procedure could not be saved. Please, try again.'));
        }
        $this->set(compact('typesProcedure'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Types Procedure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typesProcedure = $this->TypesProcedures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typesProcedure = $this->TypesProcedures->patchEntity($typesProcedure, $this->request->getData());
            if ($this->TypesProcedures->save($typesProcedure)) {
                $this->Flash->success(__('The types procedure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types procedure could not be saved. Please, try again.'));
        }
        $this->set(compact('typesProcedure'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Types Procedure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typesProcedure = $this->TypesProcedures->get($id);
        if ($this->TypesProcedures->delete($typesProcedure)) {
            $this->Flash->success(__('The types procedure has been deleted.'));
        } else {
            $this->Flash->error(__('The types procedure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
