<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Meals Controller
 *
 * @property \App\Model\Table\MealsTable $Meals
 * @method \App\Model\Entity\Meal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $meals = $this->paginate($this->Meals);

        $this->set(compact('meals'));
    }

    /**
     * View method
     *
     * @param string|null $id Meal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meal = $this->Meals->get($id, [
            'contain' => ['Trainings', 'TrainingsUsers'],
        ]);

        $this->set(compact('meal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $meal = $this->Meals->newEmptyEntity();
        if ($this->request->is('post')) {
            $meal = $this->Meals->patchEntity($meal, $this->request->getData());
            if ($this->Meals->save($meal)) {
                $this->Flash->success(__('The meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meal could not be saved. Please, try again.'));
        }
        $trainings = $this->Meals->Trainings->find('list', ['limit' => 200])->all();
        $trainingsUsers = $this->Meals->TrainingsUsers->find('list', ['limit' => 200])->all();
        $this->set(compact('meal', 'trainings', 'trainingsUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Meal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meal = $this->Meals->get($id, [
            'contain' => ['Trainings', 'TrainingsUsers'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meal = $this->Meals->patchEntity($meal, $this->request->getData());
            if ($this->Meals->save($meal)) {
                $this->Flash->success(__('The meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meal could not be saved. Please, try again.'));
        }
        $trainings = $this->Meals->Trainings->find('list', ['limit' => 200])->all();
        $trainingsUsers = $this->Meals->TrainingsUsers->find('list', ['limit' => 200])->all();
        $this->set(compact('meal', 'trainings', 'trainingsUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Meal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meal = $this->Meals->get($id);
        if ($this->Meals->delete($meal)) {
            $this->Flash->success(__('The meal has been deleted.'));
        } else {
            $this->Flash->error(__('The meal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
