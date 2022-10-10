<?php
/* Smarty version 4.2.1, created on 2022-10-10 21:53:52
  from 'C:\xampp\htdocs\web2a\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344785097a638_87197297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec31d2b3b3a22747f172d4369ad086c468a15d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2a\\templates\\header.tpl',
      1 => 1665431622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344785097a638_87197297 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/web2a/index">Generos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/web2a/videojuego">videojuegos</a>
                    </li>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="/web2a/ingresar">ingresar</a>
                        </li>
                      <?php } else { ?> 
                        <li class="nav-item ml-auto">
                          <a class="nav-link" aria-current="page" href="cerrarsesion">Cerrar Sesion(<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</body><?php }
}
