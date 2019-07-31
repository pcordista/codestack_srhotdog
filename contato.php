<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
    <section class="container contato">
        <form>
            <div class="form-left left">
                <div class="input-field">
                    <input type="text" placeholder="Nome*" class="contato-input">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email*" class="contato-input">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Telefone*" class="contato-input">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Assunto" class="contato-input">
                </div>
            </div>
            <div class="form-right right">
                <textarea name="" id="" placeholder="Mensagem*" class="materialize-textarea contato-textarea"></textarea>
                <button class="btn waves-effect waves-light contato-btn" type="submit" name="action">Enviar

                </button>
            </div>
        </form>
    </section>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>


<style>
    input::placeholder {
        padding-left: 15px;
        color: #484848
    }

    textarea::placeholder {
        padding-left: 15px;
        color: #c02c31
    }

    .contato {
        margin-top: 2rem
    }

    .form-right {
        background: url('img/contato_textarea.png') no-repeat;
        background-size: 100% 100%;
        height: 450px;
        margin-left: 2%;
        padding: 6.5rem 3rem;
    }

    .form-left {
        margin-top: 7rem
    }

    .form-left,
    .form-right {
        width: 48%;
    }

    .contato-input {
        border: 1px solid #c02c31 !important;
        height: 2rem !important;
        line-height: 2rem !important
    }

    .contato-textarea {
        background-color: white !important;
        border: 0px !important;
        height: 200px !important;
    }

    .contato-btn {
        background-color: #c02c31 !important;
        color: white;
        font-size: 1.3rem;
        font-weight: bold;

    }

    @media (max-width: 961px) {

        .form-left,
        .form-right {
            width: 100%
        }

        .form-right {
            height: 350px;
            padding: 5.5rem 3rem;
        }

        .contato-textarea {
            height: 150px !important;
        }
    }
</style>