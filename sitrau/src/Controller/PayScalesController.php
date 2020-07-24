<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PayScales Controller
 *
 * @property \App\Model\Table\PayScalesTable $PayScales
 *
 * @method \App\Model\Entity\PayScale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PayScalesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $payScales = $this->paginate($this->PayScales);

        $this->set(compact('payScales'));
    }

    /**
     * View method
     *
     * @param string|null $id Pay Scale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payScale = $this->PayScales->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set('payScale', $payScale);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payScale = $this->PayScales->newEntity();
        if ($this->request->is('post')) {
            $payScale = $this->PayScales->patchEntity($payScale, $this->request->getData());
            if ($this->PayScales->save($payScale)) {
                $this->Flash->success(__('The pay scale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pay scale could not be saved. Please, try again.'));
        }
        $this->set(compact('payScale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pay Scale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payScale = $this->PayScales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payScale = $this->PayScales->patchEntity($payScale, $this->request->getData());
            if ($this->PayScales->save($payScale)) {
                $this->Flash->success(__('The pay scale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pay scale could not be saved. Please, try again.'));
        }
        $this->set(compact('payScale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pay Scale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payScale = $this->PayScales->get($id);
        if ($this->PayScales->delete($payScale)) {
            $this->Flash->success(__('The pay scale has been deleted.'));
        } else {
            $this->Flash->error(__('The pay scale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
