<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrainingMeals Controller
 *
 * @property \App\Model\Table\TrainingMealsTable $TrainingMeals
 * @method \App\Model\Entity\TrainingMeal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingMealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Trainings', 'Meals'],
        ];
        $trainingMeals = $this->paginate($this->TrainingMeals);

        $this->set(compact('trainingMeals'));
    }

    /**
     * View method
     *
     * @param string|null $id Training Meal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trainingMeal = $this->TrainingMeals->get($id, [
            'contain' => ['Trainings', 'Meals'],
        ]);

        $this->set(compact('trainingMeal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trainingMeal = $this->TrainingMeals->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainingMeal = $this->TrainingMeals->patchEntity($trainingMeal, $this->request->getData());
            if ($this->TrainingMeals->save($trainingMeal)) {
                $this->Flash->success(__('The training meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training meal could not be saved. Please, try again.'));
        }
        $trainings = $this->TrainingMeals->Trainings->find('list', ['limit' => 200])->all();
        $meals = $this->TrainingMeals->Meals->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingMeal', 'trainings', 'meals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Training Meal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trainingMeal = $this->TrainingMeals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingMeal = $this->TrainingMeals->patchEntity($trainingMeal, $this->request->getData());
            if ($this->TrainingMeals->save($trainingMeal)) {
                $this->Flash->success(__('The training meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training meal could not be saved. Please, try again.'));
        }
        $trainings = $this->TrainingMeals->Trainings->find('list', ['limit' => 200])->all();
        $meals = $this->TrainingMeals->Meals->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingMeal', 'trainings', 'meals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Training Meal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainingMeal = $this->TrainingMeals->get($id);
        if ($this->TrainingMeals->delete($trainingMeal)) {
            $this->Flash->success(__('The training meal has been deleted.'));
        } else {
            $this->Flash->error(__('The training meal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
