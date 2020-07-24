<?php
namespace App\Controller;

use App\Controller\AppController;


use Cake\Mailer\Email;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize()
    {
    	parent::initialize();
//    	$this->Auth->allow(['logout','add']);
        $this->Auth->allow(['logout', 'add']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Universities'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Universities', 'Coordinators', 'Deans', 'Directors', 'Rectors', 'Students', 'Teachers'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $universities = $this->Users->Universities->find('list', ['limit' => 200]);
        $this->set(compact('user', 'universities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $universities = $this->Users->Universities->find('list', ['limit' => 200]);
        $this->set(compact('user', 'universities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
   public function login()
   {
     if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('Your username or password is incorrect.');
     }
   }

    public function logout()
    {
    	$this->Flash->success('You are now logged out.');
    	return $this->redirect($this->Auth->logout());
    }

    public function forgotpassword()
    {
	if($this->request->is('post'))
	{
		$myemail= $this->request->getData('email');
		$mytoken= Security::hash(Security::randomBytes(25));
	
	//	$user = $this->Users->get($myemail);
		$userTable = TableRegistry::get('Users');
		$user =$userTable->find('all')->where([institutional_mail=>$myemail])->first();
		$user->password = '';
		$user->password = $mytoken;
	//	if(!$user){	
	//             $this->Flash->error(__('No user with that email found.'));
	//             return $this->redirect(['controller' => 'Users','action' => 'forgotPassword']);
	//	}
		if($this->Users->save($user)){
		//if($userTable->save($user)){
			$this->Flash->succes('Reset password link has been sent to your email('.$myemail.'),please open your inbox');
			
			Email::configTransport('mailtrap', [
  			'host' => 'smtp.mailtrap.io',
 			'port' => 2525,
  			'username' => '69b5c3fcf35448',
  			'password' => 'e52a6db399b6a7',
  			'className' => 'Smtp'
			]);
		$email = new Email('default');
		$email->transport('mailtrap');
		$email->emailFormat('html');
		$email->from('gcanasac@ulasalle.edu.pe','SitraU Gcanasac');
		$email->subject('Please confirm your reset password');
		$email->to($myemail);
		$email->send('Hello '.$myemail.'<br/>Please click link below to reset your password<br/><br/><a href="http://192.168.1.7/~gcanasac/finalcake/sitrau/users/resetpassword/'.$mytoken.'">Reset Password</a>');

		}

	}
    }
    public function resetpassword()
    {
	if($this->request->is('post'))
	{
		$hasher=new DefaltPasswordHasher();
		$mypass=$hasher->hash($this->request->getData('password'));

		$userTable = TableRegistry::get('Users');
		$user = $userTable->find('all')->where(['token'=>$token])->first();
		$user->password = $mypass;
		if($this->Users->save($user)){
			return $this->redirect(['action'=>'login']);
		}
	}
    }

    public function isAuthorized($user)
	{
		if (isset($user['role']) &&  $user['role'] === 'admin' ) {
			return true;
		}	
		return false;
	}

}
