<style>
    .particles-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 200vh;
        z-index: 0;
        overflow: hidden;
    }
    
    .particle {
        position: fixed;
        border-radius: 50%;
        animation: float 20s infinite linear;
        opacity: 0.2;
        box-shadow: 0 0 3px rgba(153, 153, 153, 0.2);
    }

    .particle:nth-child(3n) {
        width: 12px;
        height: 12px;
        animation: float-right 25s infinite linear;
    }

    .particle:nth-child(4n) {
        width: 8px;
        height: 8px;
        animation: float-left 22s infinite linear;
    }

    .particle:nth-child(5n) {
        width: 16px;
        height: 16px;
        animation: float 28s infinite linear;
    }

    .particle:nth-child(7n) {
        width: 4px;
        height: 4px;
        animation: float-right 30s infinite linear;
    }

    @keyframes float {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }
        100% {
            transform: translateY(-100vh) translateX(30vw) rotate(360deg);
        }
    }

    @keyframes float-right {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }
        100% {
            transform: translateY(-100vh) translateX(60vw) rotate(360deg);
        }
    }

    @keyframes float-left {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }
        100% {
            transform: translateY(-100vh) translateX(-30vw) rotate(360deg);
        }
    }

    .name-glow {
        text-shadow: 0 0 10px rgba(74, 144, 226, 0.5),
                    0 0 20px rgba(74, 144, 226, 0.3),
                    0 0 30px rgba(74, 144, 226, 0.2);
    }

    .subtitle-wrapper {
        font-size: 1.1rem;
        margin-top: -1rem;
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        background: linear-gradient(45deg, #888888, #cccccc);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .subtitle-wrapper p {
        margin: 0;
        display: inline-block;
    }

    .subtitle-text {
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                     0 0 20px rgba(255, 255, 255, 0.8),
                     0 0 30px rgba(255, 255, 255, 0.8);
        animation: textGlow 2s ease-in-out infinite alternate;
    }

    .subtitle-divider {
        color: #444;
        margin: 0 0.5rem;
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.5),
                     0 0 10px rgba(255, 255, 255, 0.5);
    }

    .roles {
        color: #888;
        font-size: 1rem;
        margin-bottom: 2rem;
    }
    
    /* Improve card interactions */
    .card {
        position: relative;
        border: none;
        background: linear-gradient(#121212, #121212) padding-box,
                    linear-gradient(45deg, #ffd700, #ff6b6b, #4a90e2) border-box;
        border: 2px solid transparent;
        border-radius: 15px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.1);
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.4),
                   0 0 40px rgba(255, 215, 0, 0.2),
                   0 0 60px rgba(255, 215, 0, 0.1);
        border-width: 2.5px;
    }
    
    .edit-button {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: transparent;
        border: none;
        color: #4a90e2;
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.3s ease;
        z-index: 2;
    }

    .edit-button:hover {
        opacity: 1;
        transform: scale(1.1);
        color: #64ffda;
        text-shadow: 0 0 8px rgba(100, 255, 218, 0.5);
    }
    
    /* Better link interactions */
    a {
        transition: color 0.2s ease;
        position: relative;
    }
    
    a:hover {
        color: #4a90e2;
    }
    
    /* Improve section headers */
    .card-body h2 {
        position: relative;
        padding-bottom: 0.5rem;
    }
    
    .card-body h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background: linear-gradient(45deg, #4a90e2, #000);
    }

    .skills-container {
        display: grid;
        gap: 1.5rem;
    }
    
    .skill-category {
        margin-bottom: 1rem;
    }
    
    .skill-category-name {
        font-size: 0.9rem;
        color: #4a90e2;
        margin-bottom: 0.8rem;
        font-weight: 500;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    
    .skill-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    
    .skill-tag {
        padding: 0.4rem 1rem;
        border-radius: 20px;
        background: rgba(74,144,226,0.1);
        border: 1px solid rgba(74,144,226,0.2);
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }
    
    .skill-tag:hover {
        background: rgba(74,144,226,0.2);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(74,144,226,0.15);
    }

    .language-logo {
        object-fit: contain;
        filter: brightness(0.9);
        transition: filter 0.3s ease;
    }

    .language-logo:hover {
        filter: brightness(1.2);
    }

    .profile-photo-wrapper {
        position: relative;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        background: linear-gradient(45deg, #4a90e2, #ffd700);
        padding: 3px;
        box-shadow: 
            0 0 20px rgba(74, 144, 226, 0.2),
            inset 0 0 10px rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .profile-photo-wrapper::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(315deg, #4a90e2, #ffd700);
        border-radius: 50%;
        z-index: -1;
        animation: rotate 4s linear infinite;
    }

    .profile-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    .profile-section {
        position: relative;
        margin: 1rem 0;  /* Further decreased margin */
        padding: 0.75rem;  /* Further decreased padding */
        background: linear-gradient(
            135deg,
            rgba(74, 144, 226, 0.05) 0%,
            rgba(255, 215, 0, 0.05) 100%
        );
        border-radius: 10px;
        border-left: 4px solid;
        border-image: linear-gradient(to bottom, #4a90e2, #ffd700) 1;
    }

    .profile-content {
        position: relative;
        z-index: 1;
        margin: 0 0.15rem;  /* Further decreased horizontal margin */
    }

    .profile-text {
        position: relative;
        z-index: 1;
        line-height: 1.8;
        letter-spacing: 0.3px;
        font-size: 1.2rem; /* Increased from default size */
    }

    .certification-item {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
        padding: 1rem;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }

    .cert-icon {
        font-size: 3rem;
        color: #ffd700;
        transition: all 0.3s ease;
    }

    .certification-item:hover .cert-icon {
        transform: scale(1.1);
        color: #ffe44d;
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
    }

    .cert-content {
        flex: 1;
    }

    .cert-title {
        margin-bottom: 0.5rem;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .cert-issuer {
        color: #4a90e2;
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
    }

    .cert-date {
        color: #888;
        font-size: 0.8rem;
        margin: 0;
    }

    .btn-work {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        padding: 0.6rem 1rem;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        color: #fff;
        text-decoration: none;
        transition: all 0.2s ease;
        backdrop-filter: blur(5px);
    }

    .btn-work i {
        font-size: 1.2rem;
        color: #4a90e2;
    }

    .btn-work:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.2);
        color: #fff;
        transform: translateY(-1px);
    }

    .other-works-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .card-body {
        padding: 1.25rem;
    }

    .education-card {
        height: auto;
        margin-bottom: 1rem;
    }

    .education-card .card-body {
        padding: 1rem;  /* Reduce padding specifically for education card */
    }

    .education-card .experience-item {
        margin-bottom: 0.5rem;  /* Reduce space between education items */
    }

    .education-card hr {
        margin: 0.5rem 0;  /* Reduce space around divider */
    }

    .experience-item {
        margin-bottom: 0.75rem;  /* Further reduce spacing between items */
    }

    .experience-item:last-child {
        margin-bottom: 0;
    }

    /* Add these styles for contact icons */
    .contact-list i {
        background: linear-gradient(45deg, #4a90e2, #50fa7b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        transition: filter 0.3s ease;
    }

    .contact-list i.bi-telephone {
        background: linear-gradient(45deg, #ff6b6b, #ffd700);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .contact-list i.bi-envelope {
        background: linear-gradient(45deg, #bd93f9, #ff79c6);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .contact-list i.bi-github {
        background: linear-gradient(45deg, #8be9fd, #50fa7b);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .contact-list i.bi-linkedin {
        background: linear-gradient(45deg, #4a90e2, #64ffda);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .contact-list i.bi-facebook {
        background: linear-gradient(45deg, #4267B2, #898F9C);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .contact-list i.bi-geo-alt {
        background: linear-gradient(45deg, #ff6b6b, #ff79c6);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .contact-list i:hover {
        filter: brightness(1.2);
    }

    /* Modal styles */
    .modal-content {
        background: #1a1a1a !important;
        border: 1px solid rgba(74, 144, 226, 0.2);
    }

    .modal-header {
        border-bottom: 1px solid rgba(74, 144, 226, 0.2);
    }

    .modal-footer {
        border-top: 1px solid rgba(74, 144, 226, 0.2);
    }

    .form-control {
        background: rgba(255, 255, 255, 0.05) !important;
        border: 1px solid rgba(74, 144, 226, 0.2);
        color: #fff !important;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.1) !important;
        border-color: rgba(74, 144, 226, 0.5);
        box-shadow: 0 0 0 0.25rem rgba(74, 144, 226, 0.25);
    }
</style>

<div class="particles-container" aria-hidden="true">
    <?php
    // Array of colors for gradients
    $colors = [
        '#4a90e2', '#ffd700', '#ff6b6b', '#50fa7b', '#bd93f9', 
        '#ff79c6', '#8be9fd', '#f1fa8c', '#ffb86c', '#64ffda'
    ];
    
    for ($i = 0; $i < 1000; $i++) {
        $left = rand(0, 100);
        if ($i < 500) {
            $left = rand(0, 40);
        }
        $top = rand(0, 200);
        $duration = rand(15, 30);
        $delay = rand(-20, 0);
        
        // Get two random colors for gradient
        $color1 = $colors[array_rand($colors)];
        $color2 = $colors[array_rand($colors)];
        
        echo "<div class='particle' style='
            left: {$left}%; 
            top: {$top}%; 
            animation-duration: {$duration}s; 
            animation-delay: {$delay}s;
            background: linear-gradient(45deg, {$color1}, {$color2});
        '></div>";
    }
    ?>
</div>
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12">
            <div class="d-flex align-items-center gap-4">
                <figure class="profile-photo-wrapper">
                    <img src="photos/profile/profile.jpg" alt="<?= esc($name) ?>" class="profile-photo">
                </figure>
                <div>
                    <h1 class="display-4 mb-4 name-glow" tabindex="0"><?= esc($name) ?></h1>
                    <div class="subtitle-wrapper">
                        <p class="subtitle-text">Bachelor of Computer Science</p>
                        <p class="subtitle-divider">|</p>
                        <p class="subtitle-text">Game Developer</p>
                        <p class="subtitle-divider">|</p>
                        <p class="subtitle-text">3D Artist</p>
                    </div>
                </div>
            </div>
            
            <section class="profile-section mt-4 mb-6" aria-label="Profile Summary">
                <div class="profile-content box has-background-black-ter p-5">
                    <p class="is-size-5 has-text-grey-lighter profile-text"><?= esc($profile) ?></p>
                </div>
            </section>
        </div>
    </div>

    <div class="row mb-5" role="main">
        <div class="col-md-4 d-flex">
            <div class="card bg-dark-transparent mb-4 w-100" tabindex="0">
                <div class="card-body">
                    <button class="edit-button" title="Edit contact information">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <h2 class="h3 mb-4" data-glow class="contact-glow">Contact Info</h2>
                    <div class="contact-list">
                        <p><i class="bi bi-telephone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only"></span><?= esc($phone) ?></p>
                        <p><i class="bi bi-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($email) ?></p>
                        <p><i class="bi bi-github"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= esc($github) ?>">GitHub</a></p>
                        <p><i class="bi bi-linkedin"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/in/adrian-joel-jaspa-416a711b6/">LinkedIn</a></p>
                        <p><i class="bi bi-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/adrianjoel.jaspa">Facebook</a></p>
                        <p><i class="bi bi-geo-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($address) ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 d-flex">
            <div class="card bg-dark-transparent mb-4 w-100">
                <div class="card-body">
                    <button class="edit-button" title="Edit expertise">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <h2 class="h3 mb-4" data-glow class="expertise-glow">Expertise</h2>
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <div class="chart-container" style="position: relative; height: 260px; width:100%; margin: 0;">
                            <canvas id="expertiseChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="card bg-dark-transparent mb-4 w-100">
                <div class="card-body">
                    <button class="edit-button" title="Edit languages">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <h2 class="h3 mb-4" data-glow class="languages-glow">Languages</h2>
                    <?php 
                    $languages = [
                        'Python' => 80,
                        'JavaScript' => 65, 
                        'Java' => 70,
                        'PHP' => 90,
                        'C Sharp' => 80
                    ];
                    $colors = [
                        'Python' => ['#366C9C', '#FFD847'], // Blue to Yellow (Python logo colors)
                        'JavaScript' => ['#F0DB4F', '#F7DF1E'], // Yellow to lighter yellow (JS logo colors)
                        'Java' => ['#E76F00', '#5382A1'], // Orange to Blue (Java logo colors)
                        'PHP' => ['#8993BE', '#232531'], // Light purple to dark blue (PHP logo colors)
                        'C Sharp' => ['#9B4F96', '#68217A']  // Purple gradients (C# logo colors)
                    ];
                    foreach($languages as $lang => $level): ?>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1 align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="/photos/languages/<?= strtolower(str_replace('#', 'sharp', $lang)) ?>.png" alt="<?= $lang ?> logo" class="language-logo" width="20" height="20">
                                    <span><?= esc($lang) ?></span>
                                </div>
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
                    <button class="edit-button" title="Edit work experience">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <h2 class="h3 mb-4" data-glow class="work-glow">Work Experience</h2>
                    <!-- Add Tagpuan before other experiences -->
                    <div class="experience-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h3 class="h5 mb-1">CTO</h3>
                                <h4 class="h6 text-primary">Tagpuan</h4>
                            </div>
                            <span class="text-muted small">2025</span>
                        </div>
                        <p class="text-muted mb-2">Contract Farming Application for Farmers</p>
                        <p class="small text-muted">Pitched to YFC of the Department of Agriculture.</p>
                    </div>
                    <?php foreach($experience as $job): ?>
                        <div class="experience-item mb-3">
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

            <div class="card bg-dark-transparent mb-4">
                <div class="card-body">
                    <button class="edit-button" title="Edit certifications">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <h2 class="h3 mb-4" data-glow>Certifications</h2>
                    <div class="certification-item mb-3">
                        <div class="cert-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="cert-content">
                            <h3 class="cert-title">2025 YFC Provincial Level Awardees</h3>
                            <p class="cert-issuer">Department of Agriculture</p>
                            <p class="cert-date">February 2025</p>
                        </div>
                    </div>
                    <div class="certification-item">
                        <div class="cert-icon">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <div class="cert-content">
                            <h3 class="cert-title">Innovation Challenge Top 13 - Aquachain</h3>
                            <p class="cert-issuer">Avamos</p>
                            <p class="small text-muted mb-1">Application for fishermen</p>
                            <p class="cert-date">March 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="experience-wrapper">
                <div class="card bg-dark-transparent education-card">
                    <div class="card-body">
                        <button class="edit-button" title="Edit education">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <h2 class="h3 mb-4" data-glow class="education-glow">Education</h2>
                        <?php foreach($education as $edu): ?>
                            <div class="experience-item mb-0">
                                <div class="d-flex justify-content-between align-items-center mb-1">
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

                <div class="card bg-dark-transparent mb-4">
                    <div class="card-body">
                        <button class="edit-button" title="Edit skills">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <div class="skills-container">
                            <div class="skill-category">
                                <div class="skill-category-name">Game Development</div>
                                <div class="skill-tags">
                                    <div class="skill-tag">Unity3D</div>
                                    <div class="skill-tag">Unreal Engine</div>
                                    <div class="skill-tag">Game Design</div>
                                </div>
                            </div>
                            <div class="skill-category">
                                <div class="skill-category-name">3D & Design</div>
                                <div class="skill-tags">
                                    <div class="skill-tag">3D Modeling</div>
                                    <div class="skill-tag">UI/UX Design</div>
                                </div>
                            </div>
                            <div class="skill-category">
                                <div class="skill-category-name">Development Tools</div>
                                <div class="skill-tags">
                                    <div class="skill-tag">Git</div>
                                    <div class="skill-tag">Agile/Scrum</div>
                                    <div class="skill-tag">Test Driven Dev</div>
                                    <div class="skill-tag">React</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-dark-transparent">
                    <div class="card-body">
                        <button class="edit-button" title="Edit other works">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <h2 class="h3 mb-4">Other Works</h2>
                        <div class="other-works-container">
                            <a href="/websites" class="btn-work">
                                <i class="bi bi-globe"></i>
                                <span>Website Projects</span>
                            </a>
                            <a href="/artworks" class="btn-work">
                                <i class="bi bi-brush"></i>
                                <span>3D Artworks</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <p class="text-muted small mb-0">&copy; <?= date("Y") ?> Adrian Joel Jaspa. All rights reserved.</p>
        </div>
    </div>
</div>

<div class="modal fade" id="editContactModal" tabindex="-1" aria-labelledby="editContactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header border-secondary">
                <h5 class="modal-title" id="editContactModalLabel">Edit Contact Information</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control bg-dark text-light" id="phone" value="<?= esc($phone) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-dark text-light" id="email" value="<?= esc($email) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="github" class="form-label">GitHub URL</label>
                        <input type="url" class="form-control bg-dark text-light" id="github" value="<?= esc($github) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn URL</label>
                        <input type="url" class="form-control bg-dark text-light" id="linkedin" value="https://www.linkedin.com/in/adrian-joel-jaspa-416a711b6/">
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook URL</label>
                        <input type="url" class="form-control bg-dark text-light" id="facebook" value="https://www.facebook.com/adrianjoel.jaspa">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control bg-dark text-light" id="address" value="<?= esc($address) ?>">
                    </div>
                </form>
            </div>
            <div class="modal-footer border-secondary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveContactInfo">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add tooltip functionality and chart initialization
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    // Initialize expertise chart
    const ctx = document.getElementById('expertiseChart').getContext('2d');

    // Add gradient creation function
    function createGradient(startColor, endColor) {
        const gradient = ctx.createLinearGradient(0, 0, 200, 200);
        gradient.addColorStop(0, startColor);
        gradient.addColorStop(1, endColor);
        return gradient;
    }

    // Create gradients for each dataset with transparency
    const mainGradient = ctx.createLinearGradient(0, 0, 200, 200);
    mainGradient.addColorStop(0, 'rgba(74, 144, 226, 0.5)');  // More transparent blue
    mainGradient.addColorStop(1, 'rgba(80, 250, 123, 0.5)');  // More transparent green

    const maxGradient = createGradient('#ff6b6b', '#ffd700');
    const avgGradient = createGradient('#bd93f9', '#ff79c6');

    const expertiseChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Front-end', 'Back-end', 'Documentation', 'Manager', 'Tester'],
            datasets: [
                {
                    label: 'Skills',
                    data: [80, 55, 70, 40, 60],
                    fill: true,
                    backgroundColor: mainGradient,
                    borderColor: mainGradient,
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(80, 250, 123, 0.8)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(74, 144, 226, 0.8)'
                },
                {
                    label: 'Maximum',
                    data: [100, 100, 100, 100, 100],
                    fill: false,
                    backgroundColor: 'transparent',
                    borderColor: maxGradient,
                    borderDash: [3, 3],
                    pointRadius: 0,
                    borderWidth: 1
                },
                {
                    label: 'Average',
                    data: [61, 61, 61, 61, 61],
                    fill: false,
                    backgroundColor: 'transparent',
                    borderColor: avgGradient,
                    borderDash: [5, 5],
                    pointRadius: 0,
                    borderWidth: 2
                }
            ]
        },
        options: {
            scales: {
                r: {
                    angleLines: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    pointLabels: {
                        color: '#fff',
                        font: {
                            size: 12
                        }
                    },
                    ticks: {
                        display: false,  // This hides the numbers
                        backdropColor: 'transparent'
                    },
                    suggestedMin: 0,
                    suggestedMax: 100,
                    display: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

    // Update the data handling functions
    async function loadData() {
        try {
            const response = await fetch('/data');
            if (!response.ok) throw new Error('Network response was not ok');
            return await response.json();
        } catch (error) {
            console.error('Load error:', error);
            return null;
        }
    }

    async function saveData(section, data) {
        try {
            console.log('Saving data:', { section, data });  // Debug log
            const response = await fetch('/data/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ 
                    section: section, 
                    data: data 
                })
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
            }

            const result = await response.json();
            console.log('Save result:', result);  // Debug log
            
            if (!result.success) {
                throw new Error(result.message || 'Save failed');
            }

            return result;
        } catch (error) {
            console.error('Save error:', error);
            throw error;
        }
    }

    // Contact modal functionality
    let contactModal;
    document.addEventListener('DOMContentLoaded', async function() {
        // Initialize modal
        contactModal = new bootstrap.Modal(document.getElementById('editContactModal'));
        
        // Add specific handler for contact info edit button
        document.querySelector('button[title="Edit contact information"]').addEventListener('click', function(e) {
            e.preventDefault();
            contactModal.show();
        });

        // Load initial data
        const data = await loadData();
        
        // Update contact info
        if (data.contact) {
            document.getElementById('phone').value = data.contact.phone;
            document.getElementById('email').value = data.contact.email;
            document.getElementById('github').value = data.contact.github;
            document.getElementById('linkedin').value = data.contact.linkedin;
            document.getElementById('facebook').value = data.contact.facebook;
            document.getElementById('address').value = data.contact.address;
        }

        // Update expertise chart
        if (data.expertise) {
            expertiseChart.data.datasets[0].data = data.expertise.data.map(item => item.value);
            expertiseChart.update();
        }

        // Add generic handler for other edit buttons
        document.querySelectorAll('.edit-button:not([title="Edit contact information"])').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const cardTitle = this.closest('.card-body').querySelector('h2').textContent;
                alert(`Edit ${cardTitle} - Functionality coming soon`);
            });
        });
    });

    // Update contact save handler
    document.getElementById('saveContactInfo').addEventListener('click', async function() {
        try {
            const formData = {
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                github: document.getElementById('github').value,
                linkedin: document.getElementById('linkedin').value,
                facebook: document.getElementById('facebook').value,
                address: document.getElementById('address').value
            };

            const result = await saveData('contact', formData);
            
            if (result && result.success) {
                // Update UI
                const contactList = document.querySelector('.contact-list');
                contactList.querySelector('p:nth-child(1)').innerHTML = `<i class="bi bi-telephone"></i>&nbsp;&nbsp;&nbsp;&nbsp;${formData.phone}`;
                contactList.querySelector('p:nth-child(2)').innerHTML = `<i class="bi bi-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;${formData.email}`;
                contactList.querySelector('p:nth-child(3)').innerHTML = `<i class="bi bi-github"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="${formData.github}">GitHub</a>`;
                contactList.querySelector('p:nth-child(4)').innerHTML = `<i class="bi bi-linkedin"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="${formData.linkedin}">LinkedIn</a>`;
                contactList.querySelector('p:nth-child(5)').innerHTML = `<i class="bi bi-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="${formData.facebook}">Facebook</a>`;
                contactList.querySelector('p:nth-child(6)').innerHTML = `<i class="bi bi-geo-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;${formData.address}`;

                contactModal.hide();
                alert('Contact information updated successfully!');
            } else {
                throw new Error('Save failed');
            }
        } catch (error) {
            console.error('Error saving contact info:', error);
            alert('Failed to save changes. Please try again.');
        }
    });
</script>
</script>

</script>
</script>

</script>
</script>
