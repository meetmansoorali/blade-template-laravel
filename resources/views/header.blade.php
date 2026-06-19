<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Header Example</title>
<style>
    /* Reset basic styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f4f7f6;
}

/* Key Static Header Styles */
.static-header {
    position: fixed;    /* Keeps the header fixed at the top */
    top: 0;
    left: 0;
    width: 100%;
    height: 70px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;      /* Ensures header stays on top of other content */
}

.header-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Logo Styling */
.logo a {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    text-decoration: none;
    letter-spacing: 1px;
}

.logo a span {
    color: #0076ff; /* Accent color */
}

/* Navigation Links */
.nav-links ul {
    display: flex;
    list-style: none;
}

.nav-links li {
    margin-left: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #555;
    font-weight: 500;
    font-size: 16px;
    transition: color 0.3s ease;
}

/* Hover & Active States */
.nav-links a:hover,
.nav-links a.active {
    color: #0076ff;
}

    </style>
</head>

<body>

    <header class="static-header">
        <div class="header-container">
            <div class="logo">
                <a href="/">Brand<span>Name</span></a>
            </div>
            <nav class="nav-links">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                </ul>
            </nav>
        </div>
    </header>
   

</body>

</html>
