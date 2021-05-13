<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Play</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/style.css" />
</head>

<body id="body">
    <!--Tạo ra thanh để login hoặc register-->
    <header>
        <div class="top-most-bar">
            <a href="/login.php" class="login-text">Login </a>
            <a href="/register.php" class="register-text">Register</a>
        </div>
    </header>
    <!--Hàng có chữ Google Play-->
    <div class="divide">
        <h2 class="web-title">Google Play</h2>
        <div class="searchbar">
            <form action="/search.php">
                <input type="text" id="search-input" placeholder="Search..." method="get" />
                <button type="button"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div><br /><br /><br />
    <!--Các loại mặt hàng-->
    <center><h5>Cửa hàng game tốt nhất 2021</h5></center>
    <center>
        <table id="new-games">
            <tr>
                <td class="text-title">App mới</td>
            </tr>
            <tr>
                <td class="appdata">Cột trái</td>
                <td class="appdata">Cột giữa 1</td>
                <td class="appdata">Cột giữa 2</td>
                <td class="appdata">Cột phải</td>
            </tr>
        </table>
        <table id="top-games">
            <tr>
                <td class="text-title">App hay nhất</td>
            </tr>
            <tr>
                <td class="appdata">Cột trái</td>
                <td class="appdata">Cột giữa 1</td>
                <td class="appdata">Cột giữa 2</td>
                <td class="appdata">Cột phải</td>
            </tr>
        </table>
        <table id="recommended">
            <tr>
                <td class="text-title">Đề xuất cho bạn</td>
            </tr>
            <tr>
                <td class="appdata">Cột trái</td>
                <td class="appdata">Cột giữa 1</td>
                <td class="appdata">Cột giữa 2</td>
                <td class="appdata">Cột phải</td>
            </tr>
        </table>
        <table id="top-free-games">
            <tr>
                <td class="text-title">App miễn phí được tải nhiều</td>
            </tr>
            <tr>
                <td class="appdata">Cột trái</td>
                <td class="appdata">Cột giữa 1</td>
                <td class="appdata">Cột giữa 2</td>
                <td class="appdata">Cột phải</td>
            </tr>
        </table>
        <table id="top-paid-games">
            <tr>
                <td class="text-title">App trả phí được tải nhiều</td>
            </tr>
            <tr>
                <td class="appdata">Cột trái</td>
                <td class="appdata">Cột giữa 1</td>
                <td class="appdata">Cột giữa 2</td>
                <td class="appdata">Cột phải</td>
            </tr>
        </table><br />
        <!--Footer-->
        <p class="footer">&copy; 2021 | Vị trí: Việt Nam | Ngôn Ngữ: Tiếng Việt </p>
    </center>
</body>

</html>