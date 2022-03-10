<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
        
    <div class="chatbox">

        <div class="header">
            <div class="d-flex align-items-center justify-content-between px-4">
                <h4>Atendimento Virtual</h4>
            
                <figure class="col-2">
                    <img class="w-100" src="./imagens/logo.png" alt="">
                </figure>
            </div>
        </div>

        <div class="body" id="chatbody">
            <div class="scroller"></div>
        </div>

        <form class="chat" method="post" autocomplete="off" onsubmit="scrollDown()">
            <div id="user-row" class="d-flex overflow-hidden">
                <input type="number" name="chat" id="chat" placeholder="Escolha a opção correspondente..." class="form-control">

                <button type="submit" id="btn" class="col-1" title="Enviar">
                    <i class="fas fa-share"></i>
                </button>
            </div>
        </form>

    </div>

    <script src="app.js"></script>
    
    <script>
        getMessage("Inicio");
    </script>
</body>

</html>