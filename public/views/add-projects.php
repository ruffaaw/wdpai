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
            <img src="public/img/name.svg">
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
            <section class="project-form">
                <h1>UPLOAD</h1>
                <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                    <input name="title" type="text" placeholder="title">
                    <textarea name="description" rows="5" placeholder="description"></textarea>

                    <input type="file" name="file">
                    <button type="submit">send</button>
                </form>
            </section>
        </main>
    </div>
<body>