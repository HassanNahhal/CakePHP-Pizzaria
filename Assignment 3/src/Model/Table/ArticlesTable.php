<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 */
class ArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('articles');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('articleID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('articleID', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('body');

        $validator
            ->add('userID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('userID', 'create')
            ->notEmpty('userID');

        $validator
            ->add('tagID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tagID', 'create')
            ->notEmpty('tagID');

        $validator
            ->add('commentID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('commentID', 'create')
            ->notEmpty('commentID');

        return $validator;
    }
}
