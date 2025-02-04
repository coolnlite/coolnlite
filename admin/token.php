<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOL N LITE</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- Styles -->
    <link rel="stylesheet" href="./css/style.css">
    <style>
    :root {
        --text-color : #fff;
        --text-color-b: #000;
        --color-blue: #437CBF;
    }
      #notfound {
         position: relative;
         height: 65vh;
      }

      #notfound .notfound {
         position: absolute;
         left: 50%;
         top: 50%;
         -webkit-transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
      }

      .notfound {
         max-width: 520px;
         width: 100%;
         text-align: center;
         line-height: 1.4;
      }

      .notfound .notfound-404 {
         height: 190px;
      }

      .notfound .notfound-404 h1 {
         font-size: 146px;
         font-weight: 700;
         margin: 0px;
         color: var(--text-color-b);
      }

      .notfound .notfound-404 h1>span {
         display: inline-block;
         width: 120px;
         height: 120px;
         background-image: url('http://localhost/CoolNLite/shared/img/emoji.png');
         background-size: cover;
         -webkit-transform: scale(1.4);
         -ms-transform: scale(1.4);
         transform: scale(1.4);
         z-index: -1;
      }

      .notfound h2 {
         font-size: 22px;
         font-weight: 700;
         margin: 0;
         text-transform: uppercase;
         color: var(--text-color-b);
      }

      .notfound p {
         color: #000;
         font-weight: 300;
         font-size: 16px;
         margin-bottom: 1em;
      }

      .notfound a {
         display: inline-block;
         padding: 12px 30px;
         font-weight: 700;
         font-size: 16px;
         background-color: var(--color-blue);
         color: var(--text-color);
         border-radius: 40px;
         text-decoration: none;
         -webkit-transition: 0.2s all;
         transition: 0.2s all;
      }

      .notfound a:hover {
         opacity: 0.8;
      }

      @media only screen and (max-width: 767px) {
         .notfound .notfound-404 {
            height: 115px;
         }

         .notfound .notfound-404 h1 {
            font-size: 86px;
         }

         .notfound .notfound-404 h1>span {
            width: 86px;
            height: 86px;
         }
      }
   </style>
</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
            <h1>4<span></span>4</h1>
            </div>
            <h2>Oops! Trang Không Tìm Thấy Hay Token đã hết hạn</h2>
            <p>
            Xin lỗi nhưng trang bạn đang tìm kiếm không tồn tại, đã bị xóa. Tên đã thay đổi hoặc tạm thời không có
            sẵn hay token đã hết hạn
            </p>
            <a href="./">Quay lại trang đăng nhập</a>
        </div>
    </div>

</body>

</html>