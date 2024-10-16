<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <style>
        /* Style for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: white;
        }
        footer {
            background-color: #4CAF50;
            padding: 10px;
            text-align: center;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Welcome to Our Website</h1>
    </header>

    <!-- Body Content -->
    <div class="container">
        @yield('content')   
        {{-- This is important to change the content in another template page  --}}
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 OurWebsite. All rights reserved.</p>
    </footer>

</body>
</html>
