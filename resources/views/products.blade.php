<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        .vip {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Danh sách sản phẩm</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>
                    @if ($product['price'] > 10000000)
                        <span class="vip">
                            {{ number_format($product['price']) }} VND (Vip)
                        </span>
                    @else
                        {{ number_format($product['price']) }} VND
                    @endif
                </td>
            </tr>
        @endforeach

    </table>

</body>
</html>