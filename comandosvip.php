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
    
    <table style="border-spacing: 0px;" align="center">
        <tr>
            <td>
                <div class="navigation">

                    <div class="menuToggle">
            
                    </div>

                    <ul>
                        <li class="list" style="--clr:#28963a;">
                            <a href="economiavip.php" target=centro>
                                <span class="icon">
                                    <ion-icon name="cash"></ion-icon>
                                </span>
                                <span class="text">Economía</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#c4bb62;">
                            <a href="diversiónvip.php" target=centro>
                                <span class="icon">
                                    <ion-icon name="happy"></ion-icon>
                                </span>
                                <span class="text">Diversión</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#b337a2;">
                            <a href="reacciónvip.php" target=centro>
                                <span class="icon">
                                    <ion-icon name="rocket"></ion-icon>
                                </span>
                                <span class="text">Reacción</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#c07116;">
                            <a href="cbdvip.php" target=centro>
                                <span class="icon">
                                    <ion-icon name="wine"></ion-icon>
                                </span>
                                <span class="text">CBD</span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#ff1302;">
                            <a href="nsfwvip.php" target=centro>
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

</body>
</html>