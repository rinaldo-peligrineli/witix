<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {
        $this->paginate = array(
            'limit' => 10, // this was the option which you forgot to mention
            'order' => array(
                'Posts.id' => 'DESC')
        );

        
        $this->set('posts', $this->paginate('Post'));

    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Post criado com sucesso.', array('class' => 'teste'));
                return $this->redirect(array('action' => 'index', 'class' => 'teste'));
            }
            $this->Flash->error(__('Desculpe, não foi possivel criar o seu post.'));
        }
    }

    function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->findById($id);
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Post ' . $this->Post->id . ' atualizado com sucesso.');
                return $this->redirect(array('action' => 'index'));
            }
        }
       
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Flash->success('O Post com o Id: ' . $id . ' foi deletado.');
            $this->redirect(array('action' => 'index'));
        }
    }
}