<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CourtCases Controller
 *
 * @property \App\Model\Table\CourtCasesTable $CourtCases
 */
class CourtCasesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CourtCases->find();
        $courtCases = $this->paginate($query);

        $this->set(compact('courtCases'));
    }

    /**
     * View method
     *
     * @param string|null $id Court Case id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courtCase = $this->CourtCases->get($id, contain: []);
        $this->set(compact('courtCase'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courtCase = $this->CourtCases->newEmptyEntity();
        if ($this->request->is('post')) {
            $courtCase = $this->CourtCases->patchEntity($courtCase, $this->request->getData());
            if ($this->CourtCases->save($courtCase)) {
                $this->Flash->success(__('The court case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The court case could not be saved. Please, try again.'));
        }
        $this->set(compact('courtCase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Court Case id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courtCase = $this->CourtCases->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courtCase = $this->CourtCases->patchEntity($courtCase, $this->request->getData());
            if ($this->CourtCases->save($courtCase)) {
                $this->Flash->success(__('The court case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The court case could not be saved. Please, try again.'));
        }
        $this->set(compact('courtCase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Court Case id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courtCase = $this->CourtCases->get($id);
        if ($this->CourtCases->delete($courtCase)) {
            $this->Flash->success(__('The court case has been deleted.'));
        } else {
            $this->Flash->error(__('The court case could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
