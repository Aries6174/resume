<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?= esc($name) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #ffffff;
        }
        .bg-dark-transparent {
            background-color: rgba(0, 0, 0, 0.7) !important;
        }
        .progress {
            height: 8px;
        }
        /* Particles.js styles */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        /* Ensure content is above particles.js */
        .container {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>
    <!-- Add your HTML content here -->
    <div id="particles-js"></div>
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="display-4 mb-4"><?= esc($name) ?></h1>
                
                <section class="profile-section">
                    <p class="lead"><?= esc($profile) ?></p>
                </section>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4 d-flex">
                <div class="card bg-dark-transparent mb-4 w-100">
                    <div class="card-body">
                        <h2 class="h3 mb-4">Contact Info</h2>
                        <p><i class="bi bi-telephone"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($phone) ?></p>
                        <p><i class="bi bi-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($email) ?></p>
                        <p><i class="bi bi-github"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= esc($github) ?>">Aries6174</a></p>
                        <p><i class="bi bi-linkedin"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/in/adrian-joel-jaspa-416a711b6/">Adrian Joel Jaspa</a></p>
                        <p><i class="bi bi-geo-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($address) ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 d-flex">
                <div class="card bg-dark-transparent mb-4 w-100">
                    <div class="card-body">
                        <h2 class="h3 mb-4">Expertise</h2>
                        <br>
                        <div class="chart-container" style="position: relative; height:500px; width:100%">
                            <canvas id="expertiseChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card bg-dark-transparent mb-4 w-100">
                    <div class="card-body">
                        <h2 class="h3 mb-4">Programming Languages</h2>
                        <?php 
                        $languages = [
                            'Python' => 80,
                            'JavaScript' => 65, 
                            'Java' => 70,
                            'PHP' => 90,
                            'C' => 80
                        ];
                        $colors = [
                            'Python' => ['#ffa658', '#58ffff'],
                            'JavaScript' => ['#a6ff58', '#ff58ff'],
                            'Java' => ['#ffa658', '#a6ff58'],
                            'PHP' => ['#58a6ff', '#ff58a6'],
                            'C' => ['#ff58a6', '#58ffff']
                        ];
                        foreach($languages as $lang => $level): ?>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span><?= esc($lang) ?></span>
                                    <span><?= $level ?>%</span>
                                </div>
                                <div class="progress bg-dark" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" 
                                        style="width: <?= $level ?>%; background: linear-gradient(45deg, <?= $colors[$lang][0] ?>, <?= $colors[$lang][1] ?>);" 
                                        aria-valuenow="<?= $level ?>" 
                                        aria-valuemin="0" 
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card bg-dark-transparent mb-4">
                    <div class="card-body">
                        <h2 class="h3 mb-4">Work Experience</h2>
                        <?php foreach($experience as $job): ?>
                            <div class="experience-item mb-5">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <h3 class="h5 mb-1"><?= esc($job['title']) ?></h3>
                                        <h4 class="h6 text-primary"><?= esc($job['company']) ?></h4>
                                    </div>
                                    <span class="text-muted small"><?= esc($job['period']) ?></span>
                                </div>
                                <p class="text-muted mb-2"><?= esc($job['description']) ?></p>
                                <p class="small text-muted"><?= esc($job['details']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="experience-wrapper">
                    <div class="card bg-dark-transparent">
                        <div class="card-body">
                            <h2 class="h3 mb-4">Education</h2>
                            <?php foreach($education as $edu): ?>
                                <div class="experience-item mb-3 <?= ($edu === end($education)) ? 'mb-0' : '' ?>">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h3 class="h5 mb-1"><?= esc($edu['degree']) ?></h3>
                                            <h4 class="h6 text-primary mb-0"><?= esc($edu['school']) ?></h4>
                                        </div>
                                        <span class="text-muted small"><?= esc($edu['period']) ?></span>
                                    </div>
                                    <hr class="my-3 border-secondary">
                                    <?php if(isset($edu['honors'])): ?>
                                        <p class="text-success"><?= esc($edu['honors']) ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="card bg-dark-transparent">
                        <div class="card-body">
                            <h2 class="h3 mb-4">Other Works</h2>
                            <p>
                                <a href="/websites" class="text-decoration-none mb-2 d-block">
                                    <i class="bi bi-globe"></i>&nbsp;&nbsp;Website Projects
                                </a>
                                <a href="/artworks" class="text-decoration-none">
                                    <i class="bi bi-brush"></i>&nbsp;&nbsp;3D Artworks
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add before closing body tag -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', '/js/particles-config.json');
    </script>
</body>
</html>