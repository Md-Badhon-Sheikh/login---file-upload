<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Nav Bar</title>
    <link rel="stylesheet" href="styles/nav.css">
</head>

<body>
    <nav class="navbar">
        <div class="brand">MyWebsite</div>
        <button class="toggle" id="menu-toggle">
            ☰
        </button>
        <ul class="nav-links" id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="display.php">Display</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <script src="script.js">
        // script.js
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('show');
        });
    </script>
</body>

</html>