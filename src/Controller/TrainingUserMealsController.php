<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrainingUserMeals Controller
 *
 * @property \App\Model\Table\TrainingUserMealsTable $TrainingUserMeals
 * @method \App\Model\Entity\TrainingUserMeal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingUserMealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TrainingUsers', 'Meals'],
        ];
        $trainingUserMeals = $this->paginate($this->TrainingUserMeals);

        $this->set(compact('trainingUserMeals'));
    }

    /**
     * View method
     *
     * @param string|null $id Training User Meal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trainingUserMeal = $this->TrainingUserMeals->get($id, [
            'contain' => ['TrainingUsers', 'Meals'],
        ]);

        $this->set(compact('trainingUserMeal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trainingUserMeal = $this->TrainingUserMeals->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainingUserMeal = $this->TrainingUserMeals->patchEntity($trainingUserMeal, $this->request->getData());
            if ($this->TrainingUserMeals->save($trainingUserMeal)) {
                $this->Flash->success(__('The training user meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training user meal could not be saved. Please, try again.'));
        }
        $trainingUsers = $this->TrainingUserMeals->TrainingUsers->find('list', ['limit' => 200])->all();
        $meals = $this->TrainingUserMeals->Meals->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingUserMeal', 'trainingUsers', 'meals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Training User Meal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trainingUserMeal = $this->TrainingUserMeals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingUserMeal = $this->TrainingUserMeals->patchEntity($trainingUserMeal, $this->request->getData());
            if ($this->TrainingUserMeals->save($trainingUserMeal)) {
                $this->Flash->success(__('The training user meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training user meal could not be saved. Please, try again.'));
        }
        $trainingUsers = $this->TrainingUserMeals->TrainingUsers->find('list', ['limit' => 200])->all();
        $meals = $this->TrainingUserMeals->Meals->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingUserMeal', 'trainingUsers', 'meals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Training User Meal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainingUserMeal = $this->TrainingUserMeals->get($id);
        if ($this->TrainingUserMeals->delete($trainingUserMeal)) {
            $this->Flash->success(__('The training user meal has been deleted.'));
        } else {
            $this->Flash->error(__('The training user meal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
