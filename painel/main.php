<!DOCTYPE html>
<html lang="pt_Br">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-secondary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logomarca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center" id="primeiro-menu">
                    <li class="nav-item">
                        <a ref_sys="sobre" class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a ref_sys="cadastro" class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a ref_sys="lista" class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right text-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3>Painel de Controle</h3>
                </div>
                <div class="col-md-3">
                    <p>Seu ultimo login foi em: 26/05/2022</p>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <section class="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="principal">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group" id="segundo-menu"> 
                        <a ref_sys="sobre" href="#" class="list-group-item list-group-item-action active" aria-current="true">Editar Sobre</a>
                        <a ref_sys="cadastro" href="#" class="list-group-item list-group-item-action">Cadastrar Equipe</a>
                        <a ref_sys="lista" href="#" class="list-group-item list-group-item-action">Listar Equipe</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action active">Sobre</div>
                        <div class="list-group-item">
                            <h3 class="fs-5">Editar HTML</h3>
                            <form method="post">
                                <label class="form-label">HTML</label>
                                <textarea style="height: 150px;" name="conteudo" class="form-control"></textarea>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action active">Cadastrar Equipe</div>
                        <div class="list-group-item">
                            <h3 class="fs-5">Cadastrar</h3>
                            <form method="post">
                                <label class="form-label">Nome do mebro:</label>
                                <input type="text" name="nome_membro" class="form-control">
                                <label class="fomr-label">Descrição do membro:</label>
                                <textarea style="height: 150px;" name="descricao_membro" class="form-control"></textarea>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action active">Lista de membros</div>
                        <div class="list-group-item">
                            <h3 class="fs-5">Membros da equipe</h3>
                        </div>
                        <div class="list-group-item">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">0</th>
                                    <td>Mark</td>
                                    <td>#</td>
                                    <td>#</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        clickMenu();
        function clickMenu() {
            $('#primeiro-menu a,#segundo-menu a').click(function() {
                $('#primeiro-menu a,#segundo-menu a').removeClass('active');
                $('#primeiro-menu a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active');
                $('#segundo-menu a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active');
                return false;

            })
        }

    </script>
</body>
</html>