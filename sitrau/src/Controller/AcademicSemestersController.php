<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AcademicSemesters Controller
 *
 * @property \App\Model\Table\AcademicSemestersTable $AcademicSemesters
 *
 * @method \App\Model\Entity\AcademicSemester[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademicSemestersController extends AppController
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
        $academicSemesters = $this->paginate($this->AcademicSemesters);

        $this->set(compact('academicSemesters'));
    }

    /**
     * View method
     *
     * @param string|null $id Academic Semester id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academicSemester = $this->AcademicSemesters->get($id, [
            'contain' => ['Schools', 'Assignment'],
        ]);

        $this->set('academicSemester', $academicSemester);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academicSemester = $this->AcademicSemesters->newEntity();
        if ($this->request->is('post')) {
            $academicSemester = $this->AcademicSemesters->patchEntity($academicSemester, $this->request->getData());
            if ($this->AcademicSemesters->save($academicSemester)) {
                $this->Flash->success(__('The academic semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic semester could not be saved. Please, try again.'));
        }
        $schools = $this->AcademicSemesters->Schools->find('list', ['limit' => 200]);
        $this->set(compact('academicSemester', 'schools'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic Semester id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academicSemester = $this->AcademicSemesters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academicSemester = $this->AcademicSemesters->patchEntity($academicSemester, $this->request->getData());
            if ($this->AcademicSemesters->save($academicSemester)) {
                $this->Flash->success(__('The academic semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic semester could not be saved. Please, try again.'));
        }
        $schools = $this->AcademicSemesters->Schools->find('list', ['limit' => 200]);
        $this->set(compact('academicSemester', 'schools'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic Semester id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academicSemester = $this->AcademicSemesters->get($id);
        if ($this->AcademicSemesters->delete($academicSemester)) {
            $this->Flash->success(__('The academic semester has been deleted.'));
        } else {
            $this->Flash->error(__('The academic semester could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
