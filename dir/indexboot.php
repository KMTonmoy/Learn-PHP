<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo '#'; ?>"><?php echo "Navbar"; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo '#navbarSupportedContent'; ?>" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="<?php echo 'navbarSupportedContent'; ?>">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo '#'; ?>"><?php echo "Home"; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo '#'; ?>">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo '#'; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo "Dropdown"; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo '#'; ?>">Action</a></li>
                                <li><a class="dropdown-item" href="<?php echo '#'; ?>">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?php echo '#'; ?>">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true"><?php echo "Disabled"; ?></a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="<?php echo 'Search'; ?>" aria-label="<?php echo 'Search'; ?>">
                        <button class="btn btn-outline-success" type="submit"><?php echo 'Search'; ?></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>