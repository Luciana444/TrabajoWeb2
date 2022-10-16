<?php
/* Smarty version 4.2.1, created on 2022-10-16 04:52:24
  from 'C:\xampp\htdocs\web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b71e84e5117_83384816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7813dff1baf40d1de9a641e58798223a0264454' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\header.tpl',
      1 => 1665888711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b71e84e5117_83384816 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <base href="<?php echo BASE_URL;?>
">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/web2/index">Generos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/web2/videojuego">videojuegos</a>
                    </li>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/web2/ingresar">ingresar</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" aria-current="page" href="cerrarsesion">Cerrar Sesion
                                (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</body><?php }
}
