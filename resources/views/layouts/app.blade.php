<!DOCTYPE html>
<html>

<head>
    <title>Sistema RPG</title>

    <meta charset="UTF-8">
</head>

<body>

    <header>

        <h1>Sistema RPG</h1>

        <hr>

        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

        |

        <a href="{{ route('racas.index') }}">
            Raças
        </a>

        |

        <a href="{{ route('classes.index') }}">
            Classes
        </a>

        |

        <a href="{{ route('itens.index') }}">
            Itens
        </a>

        |

        <a href="{{ route('npcs.index') }}">
            NPCs
        </a>

        |

        <a href="{{ route('personagens.index') }}">
            Personagens
        </a>

        <hr>

    </header>

    <main>

        @yield('content')

    </main>

</body>

</html>