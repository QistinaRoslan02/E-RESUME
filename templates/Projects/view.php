<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
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
							<li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
            <h3><?= h($project->project_title) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Project Title') ?></th>
                    <td><?= h($project->project_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($project->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($project->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($project->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($project->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($project->modified) ?></td>
                </tr>
            </table>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($project->description)); ?>
                </blockquote>
            </div>

			</div>
		</div>
		

            
            

            <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">
                <h4><?= __('Related Applications') ?></h4>
                <?php if (!empty($project->applications)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Street1') ?></th>
                            <th><?= __('Street2') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Attachment') ?></th>
                            <th><?= __('Summary') ?></th>
                            <th><?= __('Cover Letter') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th><?= __('Language Id') ?></th>
                            <th><?= __('Qualification Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Refer Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->applications as $applications) : ?>
                        <tr>
                            <td><?= h($applications->id) ?></td>
                            <td><?= h($applications->name) ?></td>
                            <td><?= h($applications->street1) ?></td>
                            <td><?= h($applications->street2) ?></td>
                            <td><?= h($applications->postcode) ?></td>
                            <td><?= h($applications->state) ?></td>
                            <td><?= h($applications->email) ?></td>
                            <td><?= h($applications->phone_number) ?></td>
                            <td><?= h($applications->attachment) ?></td>
                            <td><?= h($applications->summary) ?></td>
                            <td><?= h($applications->cover_letter) ?></td>
                            <td><?= h($applications->skill_id) ?></td>
                            <td><?= h($applications->language_id) ?></td>
                            <td><?= h($applications->qualification_id) ?></td>
                            <td><?= h($applications->project_id) ?></td>
                            <td><?= h($applications->refer_id) ?></td>
                            <td><?= h($applications->status) ?></td>
                            <td><?= h($applications->created) ?></td>
                            <td><?= h($applications->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $applications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $applications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $applications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>

		
	</div>
	<div class="col-md-3">
	  Column
	</div>
</div>




