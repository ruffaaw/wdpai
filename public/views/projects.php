<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
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
                    <form>
                        <input placeholder="search project">
                    </form>
                </div>
                <div class="add-project">
                    <i class="fa-solid fa-plus"></i>add project
                </div>

            </header>
            <section class="projects">
                <?php foreach($projects as $project):?>
                <div id="project-1">
                    <img src="public/uploads/<?= $project->getImage() ?>">
                    <div>
                        <h2><?=$project->getTitle() ?></h2>
                        <p><?=$project->getDescription() ?></p>
                        <div class="social-section">
                            <i class="fas fa-heart"> 600</i>
                            <i class="fas fa-minus-square"> 121</i>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </section>
        </main>
    </div>
<body>