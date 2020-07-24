<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Curriculas Controller
 *
 * @property \App\Model\Table\CurriculasTable $Curriculas
 *
 * @method \App\Model\Entity\Curricula[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CurriculasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schools'],
        ];
        $curriculas = $this->paginate($this->Curriculas);

        $this->set(compact('curriculas'));
    }

    /**
     * View method
     *
     * @param string|null $id Curricula id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curricula = $this->Curriculas->get($id, [
            'contain' => ['Schools', 'Semesters'],
        ]);

        $this->set('curricula', $curricula);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curricula = $this->Curriculas->newEntity();
        if ($this->request->is('post')) {
            $curricula = $this->Curriculas->patchEntity($curricula, $this->request->getData());
            if ($this->Curriculas->save($curricula)) {
                $this->Flash->success(__('The curricula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curricula could not be saved. Please, try again.'));
        }
        $schools = $this->Curriculas->Schools->find('list', ['limit' => 200]);
        $this->set(compact('curricula', 'schools'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Curricula id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curricula = $this->Curriculas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curricula = $this->Curriculas->patchEntity($curricula, $this->request->getData());
            if ($this->Curriculas->save($curricula)) {
                $this->Flash->success(__('The curricula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curricula could not be saved. Please, try again.'));
        }
        $schools = $this->Curriculas->Schools->find('list', ['limit' => 200]);
        $this->set(compact('curricula', 'schools'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Curricula id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curricula = $this->Curriculas->get($id);
        if ($this->Curriculas->delete($curricula)) {
            $this->Flash->success(__('The curricula has been deleted.'));
        } else {
            $this->Flash->error(__('The curricula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
