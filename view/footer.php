
        <footer class="font-small footer">
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
                
                <a href="" data-toggle="modal" data-target="#modalLoginForm"> Admin</a>
                <br>
                <br>
                <text>©2019 Pokémon. ©1995–2019 Nintendo / Creatures Inc. / GAME FREAK inc. Pokémon et Nintendo Switch sont des marques de Nintendo. ©2019 Nintendo.
                </text>
            </div>


            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Se connecter</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="login" action="" method="post">
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <input type="text" name="username" class="form-control validate" id="orangeForm-name" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Identifiant</label>
                                </div>
                                <div class="md-form mb-4">
                                    <input type="password" id="defaultForm-pass" class="form-control validate" name="password" required>
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center ">
                                <button type="submit" class=" btn btn-default btn-primary btn-rounded ">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

