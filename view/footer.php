

        <footer class="font-small ">
            <div class=" text-center py-3 links " >
                <?php echo'<img src ="ressources/logo-pokemon-company.svg" alt="img nintendo" />';?>
                <br>
                <br>
                <?php
                  echo '<img src="ressources/logo-nintendo.svg" alt="img nintendo">';                 
                ?>
                <br>
                <br>
                <a href="https://www.pokemon.com/fr/conditions-d-utilisation/">
                Conditions d'utilisation
                </a> |
                <a href="https://www.pokemon.com/fr/avis-de-confidentialite/"> 
                Avis de confidentialité
                </a> |
                <a href="https://www.pokemon.com/fr/juridique/"> Informations juridiques</a>  |
                
                <a href="javascript:login('show');"> Admin</a>
                <br>
                <br>
                <text>©2019 Pokémon. ©1995–2019 Nintendo / Creatures Inc. / GAME FREAK inc. Pokémon et Nintendo Switch sont des marques de Nintendo. ©2019 Nintendo.
                </text>
            </div>
            <div id="popupbox" style="display:none;"> 
                <form name="login" action="" method="post">
                    <center>Username:</center>
                    <center><input name="username" type="text"/></center>
                    <center>Password:</center>
                    <center><input name="password" type="text" size="14" /></center>
                    <br>                   
                    <center><button type="submit" class="btn btn-primary" name="save" >Valider</button></center>
                </form>
                <br />
                <center><a href="javascript:login('hide');">close</a></center> 
            </div> 
        </footer>
    </body>
</html>

