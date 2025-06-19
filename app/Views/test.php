<!DOCTYPE html>
<html>
<head>
    <title>Test Design</title>
    <style>
        body {
            background: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 2rem;
        }

        .card {
            background: linear-gradient(#1a1a1a, #1a1a1a) padding-box,
                        linear-gradient(45deg, #4a90e2, #50fa7b) border-box;
            border: 2px solid transparent;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
        }

        .name {
            font-size: 2.5rem;
            margin: 0;
            background: linear-gradient(45deg, #4a90e2, #50fa7b);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .title {
            color: #888;
            margin-top: 0.5rem;
        }

        .skills {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .skill-tag {
            background: rgba(74,144,226,0.1);
            border: 1px solid rgba(74,144,226,0.2);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            transform: translateY(-2px);
            background: rgba(74,144,226,0.2);
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 class="name"><?= esc($name) ?></h1>
        <div class="title"><?= esc($title) ?></div>
        <div class="skills">
            <?php foreach($skills as $skill): ?>
                <div class="skill-tag"><?= esc($skill) ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
