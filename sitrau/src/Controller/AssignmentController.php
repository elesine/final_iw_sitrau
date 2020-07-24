<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Assignment Controller
 *
 * @property \App\Model\Table\AssignmentTable $Assignment
 *
 * @method \App\Model\Entity\Assignment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssignmentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AcademicSemesters', 'Courses', 'Sections', 'Shifts', 'Teachers'],
        ];
        $assignment = $this->paginate($this->Assignment);

        $this->set(compact('assignment'));
    }

    /**
     * View method
     *
     * @param string|null $id Assignment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assignment = $this->Assignment->get($id, [
            'contain' => ['AcademicSemesters', 'Courses', 'Sections', 'Shifts', 'Teachers'],
        ]);

        $this->set('assignment', $assignment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assignment = $this->Assignment->newEntity();
        if ($this->request->is('post')) {
            $assignment = $this->Assignment->patchEntity($assignment, $this->request->getData());
            if ($this->Assignment->save($assignment)) {
                $this->Flash->success(__('The assignment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assignment could not be saved. Please, try again.'));
        }
        $academicSemesters = $this->Assignment->AcademicSemesters->find('list', ['limit' => 200]);
        $courses = $this->Assignment->Courses->find('list', ['limit' => 200]);
        $sections = $this->Assignment->Sections->find('list', ['limit' => 200]);
        $shifts = $this->Assignment->Shifts->find('list', ['limit' => 200]);
        $teachers = $this->Assignment->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('assignment', 'academicSemesters', 'courses', 'sections', 'shifts', 'teachers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assignment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assignment = $this->Assignment->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assignment = $this->Assignment->patchEntity($assignment, $this->request->getData());
            if ($this->Assignment->save($assignment)) {
                $this->Flash->success(__('The assignment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assignment could not be saved. Please, try again.'));
        }
        $academicSemesters = $this->Assignment->AcademicSemesters->find('list', ['limit' => 200]);
        $courses = $this->Assignment->Courses->find('list', ['limit' => 200]);
        $sections = $this->Assignment->Sections->find('list', ['limit' => 200]);
        $shifts = $this->Assignment->Shifts->find('list', ['limit' => 200]);
        $teachers = $this->Assignment->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('assignment', 'academicSemesters', 'courses', 'sections', 'shifts', 'teachers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assignment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assignment = $this->Assignment->get($id);
        if ($this->Assignment->delete($assignment)) {
            $this->Flash->success(__('The assignment has been deleted.'));
        } else {
            $this->Flash->error(__('The assignment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
