<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Refers Model
 *
 * @property \App\Model\Table\ApplicationsTable&\Cake\ORM\Association\HasMany $Applications
 *
 * @method \App\Model\Entity\Refer newEmptyEntity()
 * @method \App\Model\Entity\Refer newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Refer> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Refer get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Refer findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Refer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Refer> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Refer|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Refer saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Refer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Refer>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Refer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Refer> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Refer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Refer>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Refer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Refer> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RefersTable extends Table
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

        $this->setTable('refers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Applications', [
            'foreignKey' => 'refer_id',
        ]);
		$this->addBehavior('AuditStash.AuditLog');
		$this->addBehavior('Search.Search');
		$this->searchManager()
			->value('id')
				->add('search', 'Search.Like', [
					//'before' => true,
					//'after' => true,
					'fieldMode' => 'OR',
					'multiValue' => true,
					'multiValueSeparator' => '|',
					'comparison' => 'LIKE',
					'wildcardAny' => '*',
					'wildcardOne' => '?',
					'fields' => ['id'],
				]);
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
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('position')
            ->maxLength('position', 50)
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }
}
