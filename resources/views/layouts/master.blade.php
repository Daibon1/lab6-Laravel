<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            background: #333;
            color: white;
            padding: 15px;
        }

        header a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        footer {
            background: #f1f1f1;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <a href="/">Trang chủ</a>
        <a href="/contact">Liên hệ</a>
    </header>

    <!-- Nội dung riêng từng trang -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        © 2026 - Bản quyền thuộc về Website của tôi
    </footer>

</body>
</html>