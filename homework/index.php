<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .o-loading {
            position: fixed;
            top: 0;
            left: 0;
            /* z-index: 9999; */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: #fff;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        body.start-animation .o-loading {
            opacity: 0;
        }

        .o-loading__icon {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            padding: 30px;
            width: 30px;
            height: 30px;
            padding: 0;
        }

        .o-loading__icon-line {
            position: absolute;
            top: 50%;
            width: 30px;
            height: 0.5px;
            background: #000;
            animation: spin 1.5s infinite ease;
        }

        .o-loading__icon-line:nth-of-type(2) {
            animation-delay: 0.1s;
        }

        .o-loading__icon-line:nth-of-type(3) {
            animation-delay: 0.2s;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <html>

<body>
    <div class="o-loading">
        <div class="o-loading__icon">
            <div class="o-loading__icon-line"></div>
            <div class="o-loading__icon-line"></div>
            <div class="o-loading__icon-line"></div>
        </div>
    </div>

    <script>
        setTimeout(function() {

            document.body.classList.add("start-animation");

            setTimeout(function() {
                window.location.href = "calendar.php";

            }, 900);
        }, 3100);
    </script>


</body>

</html>