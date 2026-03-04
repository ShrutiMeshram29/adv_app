<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CourtCases Model
 *
 * @method \App\Model\Entity\CourtCase newEmptyEntity()
 * @method \App\Model\Entity\CourtCase newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CourtCase> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CourtCase get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CourtCase findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CourtCase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CourtCase> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CourtCase|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CourtCase saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CourtCase>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CourtCase>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CourtCase>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CourtCase> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CourtCase>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CourtCase>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CourtCase>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CourtCase> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CourtCasesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('court_cases');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('petitioner')
            ->maxLength('petitioner', 255)
            ->allowEmptyString('petitioner');

        $validator
            ->scalar('respondent')
            ->maxLength('respondent', 255)
            ->allowEmptyString('respondent');

        return $validator;
    }
}
