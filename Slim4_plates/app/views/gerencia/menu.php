<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Area</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/adminMenu.css">
    <link rel="stylesheet" href="../../css/adminList.css">
    <link rel="stylesheet" href="../../css/adminForm.css">
</head>
<body>
    <nav class="sidebar">
        <div class="sidebar-inner">
            <header class="sidebar-header">
                <button type="button" class="sidebar-burger btn" onclick="toggleSidebar()">
                    <i class='bx bx-menu'></i>
                </button>
            </header>

            <nav class="sidebar-menu">
                <a href="/" class="btn">
                    <i class='bx bx-home' ></i>
                    <span>Home</span>
                </a>
                <a href="/user/form/0" class="btn">
                    <i class='bx bx-user' ></i>
                    <span>Meus Dados</span>
                </a>
                <a href="/cat/list" class="btn">
                    <i class='bx bx-hotel' ></i>
                    <span>Quartos</span>
                </a>
                <a href="/com/list" class="btn">
                    <i class='bx bx-cube' ></i>
                    <span>Comodidades</span>
                </a>
                <a href="/user/list" class="btn">
                    <i class='bx bx-cog' ></i>
                    <span>Settings</span>
                </a>
            </nav>

        </div>
    </nav>
    <main>
        <?=$this->section('content')?>
    </main>
    <script type="text/javascript">
        const toggleSidebar = () => document.body.classList.toggle("open");
    </script>
</body>
</html>