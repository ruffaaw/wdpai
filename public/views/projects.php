<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title> LOGIN PAGE</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <div>
                <a href="homepage">
                    <img src="public/img/name.svg">
                </a>
            </div>
            <ul>
                <li>
                    <i class="fa-sharp fa-solid fa-diagram-project"></i>
                    <a href="#" class="button">projects</a>
                </li>
                <li>
                    <i class="fa-solid fa-user-group"></i>
                    <a href="#" class="button">users</a>
                </li>
                <li>
                    <i class="fa-regular fa-message"></i>
                    <a href="#" class="button">messages</a>
                </li>
                <li>
                    <i class="fa-solid fa-bell"></i>
                    <a href="#" class="button">notification</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-gear"></i>
                    <a href="#" class="button">settings</a>
                </li>
            </ul>

        </nav>
        <main>
            <header>
                <div class="search-bar">
                    <input placeholder="search project">
                </div>
                <div class="add-project">
                    <i class="fas fa-plus"></i> add project
                </div>
            </header>
            <section class="projects">
                <?php foreach ($projects as $project): ?>
                    <div id="project-1">
                        <img src="public/uploads/<?= $project->getImage(); ?>">
                        <div>
                            <h2><?= $project->getTitle(); ?></h2>
                            <p><?= $project->getDescription(); ?></p>
                            <div class="social-section">
                                <i class="fas fa-heart"> 600</i>
                                <i class="fas fa-minus-square"> 121</i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>
    </div>
<body>

<template id="project-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
                <i class="fas fa-minus-square"> 0</i>
            </div>
        </div>
    </div>
</template>