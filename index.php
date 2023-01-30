<script>
    import bootstrap from 'bootstrap';
</script>

<!DOCTYPE html>
<html lang="pt_Br">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-secondary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Logomarca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <section class="banner">
        <div class="bg text-center">
            <div class="container">
                <h3>Logomarca</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore magnam quod unde optio explicabo.</p>
                <a href="">Saiba mais!</a>
            </div>
        </div>
    </section>

    <section class="chamada">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Entre em nossa lista!</h3>
                </div>
                <div class="col-md-8">
                    <form method="post">
                        <input type="email" name="email">
                        <input type="submit" value="Cadastrar!">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>depoimentos</h3>
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam temporibus porro accusantium laudantium consequatur, quidem, soluta ratione inventore suscipit perferendis sunt harum quod est dolores quis necessitatibus ipsum expedita nesciunt?"</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="diferenciais text-center">
        <div class="container">
            <h3>Conheça nossa empresa!</h3>
            <div class="row">
                <div class="col-md-4">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati rerum, reprehenderit non repellendus velit hic ipsa eligendi sed! Harum dicta doloribus aspernatur quod odio error nobis ea, minus architecto nemo!</p>
                </div>
                <div class="col-md-4">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati rerum, reprehenderit non repellendus velit hic ipsa eligendi sed! Harum dicta doloribus aspernatur quod odio error nobis ea, minus architecto nemo!</p>
                </div>
                <div class="col-md-4">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati rerum, reprehenderit non repellendus velit hic ipsa eligendi sed! Harum dicta doloribus aspernatur quod odio error nobis ea, minus architecto nemo!</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section class="equipe">
        <h3 class="text-center">Nossa equipe</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="img"></div>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <h3>Nome Pessoa</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nisi quam suscipit eveniet quaerat impedit sunt soluta libero consequuntur, repudiandae quia natus quas veniam, nostrum quos dolorem tempore? Optio, facere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="img"></div>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <h3>Nome Pessoa</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est ab consectetur magnam quasi blanditiis minus vel minima explicabo ratione. Placeat itaque quo magni dolorum enim autem quasi officiis ullam ipsa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section class="final">
        <div class="container">
            <h3 class="text-center">Entre em Contato</h3>
            <div class="row">
                <div class="col-md-6 align">
                    <form method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensagem</label>
                            <textarea name="conteudo" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <p class="text-center">Todos os direitos reservados!</p>
    </footer>

<script src="js/bootstrap.min.js"></script>
</body>
</html>