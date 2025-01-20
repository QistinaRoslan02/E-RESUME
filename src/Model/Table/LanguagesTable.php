<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Languages Model
 *
 * @property \App\Model\Table\ApplicationsTable&\Cake\ORM\Association\HasMany $Applications
 *
 * @method \App\Model\Entity\Language newEmptyEntity()
 * @method \App\Model\Entity\Language newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Language> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Language get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Language findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Language patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Language> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Language|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Language saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Language>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Language>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Language>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Language> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Language>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Language>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Language>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Language> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LanguagesTable extends Table
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

        $this->setTable('languages');
        $this->setDisplayField('language_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Applications', [
            'foreignKey' => 'language_id',
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
            ->scalar('language_name')
            ->maxLength('language_name', 255)
            ->requirePresence('language_name', 'create')
            ->notEmptyString('language_name');

        $validator
            ->integer('rating')
            ->notEmptyString('rating');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }
}
