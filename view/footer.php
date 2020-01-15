
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
            <div id="popupbox" style="display:none;" class="row justify-content-center"> 
                <div class="col-12 justify-content-center text-center">
                    <form name="login" action="" method="post" >
                        <label for="formGroupExampleInput">Username:</label>
                        <input name="username" type="text" required/>
                        Password:
                        <input name="password" type="password" size="14" required/>
                        <br>                   
                        <button type="submit" class="btn btn-primary mt-2" name="save" >Valider</button>
                    </form>
                    <a href="javascript:login('hide');"><button class="btn btn-danger mt-2">close</button></a> 
                </div>  
            </div> 
        </footer>
    </body>
</html>

