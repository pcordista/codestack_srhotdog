<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
    <div class="ocultarInMobile">
        <div class="loja_bg">
            <div class="loja_bg_yellow relative">
                <div class="loja_one">
                    <img src="img/loja.png" />
                </div>
                <div class="loja_one_text">
                    <div class="valign-wrapper">
                        <img src="img/place.png" />
                        RUA RIO IGUAÇU, 701 | CAMBÉ
                    </div>
                    <div class="valign-wrapper">
                        <img src="img/phone.png" />
                        43 3154.8700
                    </div>
                </div>
            </div>
        </div>
        <div class="loja_bg_2">
            <div class="loja_bg_red relative">
                <div class="loja_one_text">
                    <div class="valign-wrapper">
                        <img src="img/place_2.png" />
                        RUA RIO IGUAÇU, 701 | CAMBÉ
                    </div>
                    <div class="valign-wrapper">
                        <img src="img/phone_2.png" />
                        43 3154.8700
                    </div>
                </div>
                <div class="loja_two">
                    <img src="img/loja.png" />
                </div>
            </div>
        </div>
        <div class="loja_bg">
            <div class="loja_bg_yellow relative">
                <div class="loja_one">
                    <img src="img/loja.png" class="lastimg" />
                </div>
                <div class="loja_one_text">
                    <div class="valign-wrapper">
                        <img src="img/place.png" />
                        RUA RIO IGUAÇU, 701 | CAMBÉ
                    </div>
                    <div class="valign-wrapper">
                        <img src="img/phone.png" />
                        43 3154.8700
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ocultarInDesk">
        <div class="lojamobile">
            <img src="img/loja.png" width="100%" />
            <div class="loja-text-yellow loja-text">
                <div class="valign-wrapper">
                    <img src="img/place.png" class="marginright" />
                    RUA RIO IGUAÇU, 701 | CAMBÉ
                </div>
                <div class="valign-wrapper">
                    <img src="img/phone.png" class="marginright" />
                    43 3154.8700
                </div>
            </div>
        </div>
        <div class="lojamobile">
            <img src="img/loja.png" width="100%" />
            <div class="loja-text-red loja-text">
                <div class="valign-wrapper">
                    <img src="img/place_2.png" class="marginright" />
                    RUA RIO IGUAÇU, 701 | CAMBÉ
                </div>
                <div class="valign-wrapper">
                    <img src="img/phone_2.png" class="marginright" />
                    43 3154.8700
                </div>
            </div>
        </div>
        <div class="lojamobile">
            <img src="img/loja.png" width="100%" />
            <div class="loja-text-yellow loja-text">
                <div class="valign-wrapper">
                    <img src="img/place.png" class="marginright" />
                    RUA RIO IGUAÇU, 701 | CAMBÉ
                </div>
                <div class="valign-wrapper">
                    <img src="img/phone.png" class="marginright" />
                    43 3154.8700
                </div>
            </div>
        </div>
    </div>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>


<style>
    .loja_bg {
        background: url('img/loja_bg.png') no-repeat;
        background-size: 88% 100%;
        background-position-x: -51px;
        height: 300px;
    }

    .loja_bg_2 {
        background: url(img/loja_bg_2.png) no-repeat;
        background-size: 100% 100%;
        height: 280px;
        background-position-x: 53px;
    }

    .loja_bg_yellow {
        background-color: #fdb713;
        margin-left: 15%;
        display: flex;
        padding: 1.5rem;
    }

    .loja_bg_red {
        background-color: #c02c31;
        margin-right: 25%;
        display: flex;
        padding: 1.5rem;
    }

    .loja_bg_red {
        padding-left: 15%;
    }

    .loja_two {
        position: absolute;
        right: 20%;
        width: 400px;
    }

    .loja_two>img {
        position: absolute;
        width: 350px;
        top: -5rem;
        left: 1rem;
    }

    .loja_one {
        position: relative;
        width: 400px;
    }

    .loja_one>img {
        position: absolute;
        width: 350px;
        top: 1rem;
        left: 1rem
    }

    .loja_one_text {
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 1.3rem
    }

    .loja_one_text>div:first-child {
        margin-bottom: 10px
    }

    .loja_one_text>div>img {
        margin-right: 15px
    }

    .lastimg {
        top: -10rem !important;
    }

    .ocultarInDesk {
        display: none
    }

    .loja-text-yellow {
        background-color: #fdb713;
        padding: 1rem;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    .loja-text-red {
        background-color: #c02c31;
        padding: 1rem;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    .loja-text > div {
        justify-content: center
    }

    .loja-text>div:first-child {
        margin-bottom: 10px
    }

    .lojamobile {
        margin-bottom: 10px
    }


    @media (max-width: 961px) {
        .ocultarInMobile {
            display: none
        }

        .ocultarInDesk {
            display: block
        }

        .marginright {
            margin-right: 10px;
        }
    }
</style>