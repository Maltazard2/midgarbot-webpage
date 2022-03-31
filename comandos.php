<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDGARD BOT</title>
    <meta name="description" content="Página Web del Bot Midgard">
    <meta name="keywords" content="midgard, maltabot, malta, midgardbot">
    <meta name="authors" content=" Maltazard">
    <link rel="stylesheet" type="text/css" href="css/stylecomandos.css">

</head>
<body>
    <header>
        <div class="contenedor">
            <div id="marca">
                <table style="border-spacing: 0px;" align="center">
                    <tr>
                        <td rowspan =3>
                            <a class="actual" href="index.php"><img src ="img/LOGOBOT.gif" style="width:70%;border-color: rgb(46, 152, 194);"></a>
                        </td>
                        <td align = center> 
                            <a class="actual" href="index.php"><h1>MIDGARD BOT</h1></a>
                            <h4><a href="">Menú de Comandos</a></h4>
                        </td>
                    </tr>
                    <tr>
                        <td align = center>
                            <hr style="width:80%">
                        </td>
                    </tr>
                    <tr>
                        <td align = center>
                            <h6><a href=""">_help</a></h6>
                            <h6><a href=""">/help</a></h6>
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </header>

    <!-- <table style="border-spacing: 0px;" align="center">
        <tr>
            <td>
                <div class="loader">
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                    <span style="--i:4;"></span>
                    <span style="--i:5;"></span>
                    <span style="--i:6;"></span>
                    <span style="--i:7;"></span>
                    <span style="--i:8;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:10;"></span>
                </div>
            </td>
        </tr>
    </table> -->

    <table style="border-spacing: 0px;" align="center">
        <tr>
            <td>
                <div class="navigation">

                    <div class="menuToggle">
            
                    </div>

                    <ul>
                        <li class="list" style="--clr:#c03d33;">
                            <a href="info.php" target=centro>
                                <span class="icon">
                                    <ion-icon name="information-circle"></ion-icon>
                                </span>
                                <span class="text">Información</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#6f7a77;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="construct"></ion-icon>
                                </span>
                                <span class="text">Utilidad</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#070707;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="hammer"></ion-icon>
                                </span>
                                <span class="text">Moderación</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#28963a;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="cash"></ion-icon>
                                </span>
                                <span class="text">Economía</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#c4bb62;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="happy"></ion-icon>
                                </span>
                                <span class="text">Diversión</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#b337a2;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="rocket"></ion-icon>
                                </span>
                                <span class="text">Reacción</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#c07116;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="wine"></ion-icon>
                                </span>
                                <span class="text">CBD</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#ff1302;">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="flame"></ion-icon>
                                </span>
                                <span class="text">Nsfw</span>
                            </a>
                        </li>
                    </ul>
            
                </div>

                <script>
                    const menuToggle = document.querySelector('.menuToggle');
                    const navigation = document.querySelector('.navigation');
                    menuToggle.onclick = function(){
                        navigation.classList.toggle('open')
                    }
                    
                    const list = document.querySelectorAll('.list');
                    function activeLink(){
                        list.forEach((item) => {
                            item.classList.remove('active')
                            this.classList.add('active')
                        });
                    }
                    list.forEach((item) => {
                        item.addEventListener('click',activeLink)
                    })

                </script>

                <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

            </td>
        </tr>
    </table> 

    <footer>
        <p>Malta's Bot</p>
        <p>Copyright © 2022</p>
    </footer>

</body>
</html>