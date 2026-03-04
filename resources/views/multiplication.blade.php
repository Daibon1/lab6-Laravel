<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bảng cửu chương</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1 class="mb-4">Bảng cửu chương</h1>

    {{-- Nếu có lỗi --}}
    @isset($error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endisset

    {{-- Nếu có số hợp lệ --}}
    @isset($n)
        <div class="card p-3">
            @for ($i = 1; $i <= 10; $i++)
                <p>{{ $n }} x {{ $i }} = {{ $n * $i }}</p>
            @endfor
        </div>
    @endisset

</body>
</html>