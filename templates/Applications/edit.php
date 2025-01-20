<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 * @var string[]|\Cake\Collection\CollectionInterface $skills
 * @var string[]|\Cake\Collection\CollectionInterface $languages
 * @var string[]|\Cake\Collection\CollectionInterface $qualifications
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $refers
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $application->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'dropdown-item', 'escapeTitle' => false]
            ) ?>
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
				</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
            <?= $this->Form->create($application) ?>
            <fieldset>
                <legend><?= __('Edit Application') ?></legend>
                
                    <?php echo $this->Form->control('name'); ?>
                    <?php echo $this->Form->control('street1'); ?>
                    <?php echo $this->Form->control('street2'); ?>
                    <?php echo $this->Form->control('postcode'); ?>
                    <?php echo $this->Form->control('state'); ?>
                    <?php echo $this->Form->control('email'); ?>
                    <?php echo $this->Form->control('phone_number'); ?>
                    <?php echo $this->Form->control('summary'); ?>
                    <?php echo $this->Form->control('skill_id', ['options' => $skills, 'empty' => true]); ?>
                    <?php echo $this->Form->control('language_id', ['options' => $languages, 'empty' => true]); ?>
                    <?php echo $this->Form->control('qualification_id', ['options' => $qualifications, 'empty' => true]); ?>
                    <?php echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]); ?>
                    <?php echo $this->Form->control('refer_id', ['options' => $refers, 'empty' => true]); ?>
                    <?php echo $this->Form->control('status'); ?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>