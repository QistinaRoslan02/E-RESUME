<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resume</title>
    <style>
        @page {
            margin: 20px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            background-color: #292983;
            color: #fff;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .header p {
            margin: 5px 0;
        }

        .section {
            margin: 20px 40px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #292983;
            border-bottom: 2px solid #912891;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }

        .content {
            margin-left: 20px;
        }

        .content p, .content li {
            margin: 5px 0;
        }

        ul {
            list-style-type: disc;
            margin: 10px 0 10px 20px;
            padding: 0;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 10px;
            color: #777;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1><?= h($application->name) ?></h1>
        <p><?= h($application->email) ?> | <?= h($application->phone_number) ?></p>
        <p><?= h($application->street1) ?>, <?= h($application->street2) ?>, <?= h($application->postcode) ?>, <?= h($application->state) ?></p>
    </div>

    <!-- Summary Section -->
    <div class="section">
        <div class="section-title">Summary</div>
        <div class="content">
            <p><?= $this->Text->autoParagraph(h($application->summary)) ?></p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="section">
        <div class="section-title">Skills</div>
        <div class="content">
            <ul>
                <li><?= $application->has('skill') ? h($application->skill->skill_name) : 'No skills available' ?></li>
            </ul>
        </div>
    </div>

    <!-- Languages Section -->
    <div class="section">
        <div class="section-title">Languages</div>
        <div class="content">
            <ul>
                <li><?= $application->has('language') ? h($application->language->language_name) : 'No languages available' ?></li>
            </ul>
        </div>
    </div>

    <!-- Qualifications Section -->
    <div class="section">
        <div class="section-title">Qualifications</div>
        <div class="content">
            <ul>
                <li><?= $application->has('qualification') ? h($application->qualification->instituition_name) : 'No qualifications available' ?></li>
            </ul>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="section">
        <div class="section-title">Projects</div>
        <div class="content">
            <ul>
                <li><?= $application->has('project') ? h($application->project->project_title) : 'No projects available' ?></li>
            </ul>
        </div>
    </div>

    <!-- References Section -->
    <div class="section">
        <div class="section-title">References</div>
        <div class="content">
            <ul>
                <li><?= $application->has('refer') ? h($application->refer->name) : 'No references available' ?></li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Generated on <?= date('d-m-Y') ?> using My Application System</p>
    </div>
</body>
</html>
