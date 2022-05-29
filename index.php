<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/nav.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Roboto:wght@300&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
        <nav>
            <h1 id="navtitle">To-Do List</h1>
            <ul id="navbar" class="hidden">
                <li>Home</li>
                <li>To-Do List</li>
                <li>Contact</li>
            </ul>
            <button id="navopentoggle" class="navtoggle">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </nav>
    </header>
    <main>
        <div class="notepad">
            <h2 class="cinzel">My list</h2>
            <div class="row">
                <button class="todouncheck hidden">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p class="cross">Study Lesson 1</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="row">
                <button class="todouncheck hidden">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p class="cross">Exercise Lesson 1</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="row">
                <button class="todouncheck hidden">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p class="cross">Study Lesson 2</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="row">
                <button class="todouncheck hidden">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p class="cross">Exercise Lesson 2</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="row">
                <button class="todouncheck hidden">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p class="cross">Study Lesson 3</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="row">
                <button class="todouncheck ">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck hidden">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p>Exercise Lesson 3</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="row">
                <button class="todouncheck ">
                    <span class="material-symbols-outlined">radio_button_unchecked</span>
                </button>
                <button class="todocheck hidden">
                    <span class="material-symbols-outlined">radio_button_checked</span>
                </button>
                <p>Finish course</p>
                <button class="deltoggle">
                    <span class="material-symbols-outlined font-red">delete</span>
                </button>
            </div>
            <div class="newtask">
                <h2 class="cinzel">New task:</h2>
                <input type="text" name="newtask" id="newtask">
                <button id="newtaskbtn">Add</button>
            </div>
        </div>
    </main>
    <footer>
        <p>Codeberry jQuery course</p>
        <p>Created by Zsuzsa Hajdu, 26/05/2022.</p>
    </footer>
</body>
</html>