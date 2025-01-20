<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
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
							<li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
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

    
    <style>
        .top {
            width: 100%;
            margin: auto;
        }
        .one {
            width: 70%;
            height: 25px;
            background: #292983;
            float:left;
        }
        .two {
            margin-left: 15%;
            height: 25px;
            background: #912891;
        }
        
    </style>

    <section class="top">
            <div class="one"></div>
            <div class="two"></div>
</section>

<hr />
<table width="100%">
<tr>
    <td width="80%" class="text-end">My Resume</td>
    <td></td>
</tr>


</table>



    <div class="table-responsive">
        <table class="table">

        <div class="text">
                <strong><?= __('Summary') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($application->summary)); ?>
                </blockquote>
            </div>

                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($application->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street1') ?></th>
                    <td><?= h($application->street1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street2') ?></th>
                    <td><?= h($application->street2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($application->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($application->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($application->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($application->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill') ?></th>
                    <td><?= $application->hasValue('skill') ? $this->Html->link($application->skill->skill_name, ['controller' => 'Skills', 'action' => 'view', $application->skill->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= $application->hasValue('language') ? $this->Html->link($application->language->language_name, ['controller' => 'Languages', 'action' => 'view', $application->language->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Qualification') ?></th>
                    <td><?= $application->hasValue('qualification') ? $this->Html->link($application->qualification->instituition_name, ['controller' => 'Qualifications', 'action' => 'view', $application->qualification->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $application->hasValue('project') ? $this->Html->link($application->project->project_title, ['controller' => 'Projects', 'action' => 'view', $application->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Refer') ?></th>
                    <td><?= $application->hasValue('refer') ? $this->Html->link($application->refer->name, ['controller' => 'Refers', 'action' => 'view', $application->refer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($application->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($application->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($application->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($application->modified) ?></td>
                </tr>
            </table>
    </div>

			</div>
		</div>
		

            
            


		
	</div>
	<div class="col-md-3">
	  <div class="card">
        <div class="card-body">
            <table>
                <tr>
            <td>Application status</td>
            <td><?= $this->Number->format($application->status) ?></td>
    </tr>
    </table>
    
    <?php echo $this->Html->link('Download PDF', ['action' => 'pdf', $application->id], 
    ['class' => 'btn btn-sm btn-outline-primary', 'escape' => false]); ?>


	</div>
</div>





