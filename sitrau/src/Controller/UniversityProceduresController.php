<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UniversityProcedures Controller
 *
 * @property \App\Model\Table\UniversityProceduresTable $UniversityProcedures
 *
 * @method \App\Model\Entity\UniversityProcedure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UniversityProceduresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Faculties', 'TypesProcedures', 'StatusProcedures'],
        ];
        $universityProcedures = $this->paginate($this->UniversityProcedures);

        $this->set(compact('universityProcedures'));
    }

    /**
     * View method
     *
     * @param string|null $id University Procedure id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $universityProcedure = $this->UniversityProcedures->get($id, [
            'contain' => ['Students', 'Faculties', 'TypesProcedures', 'StatusProcedures'],
        ]);

        $this->set('universityProcedure', $universityProcedure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $universityProcedure = $this->UniversityProcedures->newEntity();
        if ($this->request->is('post')) {
            $universityProcedure = $this->UniversityProcedures->patchEntity($universityProcedure, $this->request->getData());
            if ($this->UniversityProcedures->save($universityProcedure)) {
                $this->Flash->success(__('The university procedure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The university procedure could not be saved. Please, try again.'));
        }
        $students = $this->UniversityProcedures->Students->find('list', ['limit' => 200]);
        $faculties = $this->UniversityProcedures->Faculties->find('list', ['limit' => 200]);
        $typesProcedures = $this->UniversityProcedures->TypesProcedures->find('list', ['limit' => 200]);
        $statusProcedures = $this->UniversityProcedures->StatusProcedures->find('list', ['limit' => 200]);
        $this->set(compact('universityProcedure', 'students', 'faculties', 'typesProcedures', 'statusProcedures'));
    }

    /**
     * Edit method
     *
     * @param string|null $id University Procedure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $universityProcedure = $this->UniversityProcedures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $universityProcedure = $this->UniversityProcedures->patchEntity($universityProcedure, $this->request->getData());
            if ($this->UniversityProcedures->save($universityProcedure)) {
                $this->Flash->success(__('The university procedure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The university procedure could not be saved. Please, try again.'));
        }
        $students = $this->UniversityProcedures->Students->find('list', ['limit' => 200]);
        $faculties = $this->UniversityProcedures->Faculties->find('list', ['limit' => 200]);
        $typesProcedures = $this->UniversityProcedures->TypesProcedures->find('list', ['limit' => 200]);
        $statusProcedures = $this->UniversityProcedures->StatusProcedures->find('list', ['limit' => 200]);
        $this->set(compact('universityProcedure', 'students', 'faculties', 'typesProcedures', 'statusProcedures'));
    }

    /**
     * Delete method
     *
     * @param string|null $id University Procedure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $universityProcedure = $this->UniversityProcedures->get($id);
        if ($this->UniversityProcedures->delete($universityProcedure)) {
            $this->Flash->success(__('The university procedure has been deleted.'));
        } else {
            $this->Flash->error(__('The university procedure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
    	// Admin can access every action
    	if (isset($user['role']) && ( $user['role'] === 'admin' or $user['role'] ==='recepcionista' )) {
       		 return true;
    	}

   	 $action = $this->request->getParam('action');
   	 // The add and tags actions are always allowed to logged in users.
   	 if (in_array($action, ['add'])) {
		if( $user['role']==='estudiante' )
		{
			return true;
		}
    	}
   	 // All other actions require a slug.
  	$slug = $this->request->getParam('pass.0');
   	if (!$slug) {
       		 return false;
    	}

   	 if (in_array($action, ['view']))
    	{
                $universityProcedure = $this->UniversityProcedures->get($slug,['contain'=>['Students']]);
                if($universityProcedure->student->user_id === $user['id'])
		{
			 return true;
		}
    	}
      // Default deny
        return false;
    }
}
