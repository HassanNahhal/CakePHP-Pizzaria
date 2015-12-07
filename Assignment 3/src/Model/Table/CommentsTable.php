<?php
namespace App\Model\Table;

use App\Model\Entity\Comment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comments Model
 *
 */
class CommentsTable extends Table
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

        $this->table('comments');
        $this->displayField('commentID');
        $this->primaryKey('commentID');

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
            ->add('commentID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('commentID', 'create');

        $validator
            ->add('approved', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('approved');

        $validator
            ->add('userID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userID');

        $validator
            ->add('articleID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('articleID');

        $validator
            ->allowEmpty('body');

        return $validator;
    }
}
