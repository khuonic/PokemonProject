<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

    <div class="containder-fluid mt-5" style="overflow: hidden;">
            <div class="col-2">
                <ol class="carousel-indicators row ">
                    <li data-target="#slideshow1" data-slide-to="0" class=" col-12" onclick="$('#slideshow2').carousel(0)">
                        <img src="ressources/rougebleu.png" >
                    </li>
                    <li data-target="#slideshow1" data-slide-to="1" class="col-12" onclick="$('#slideshow2').carousel(1)"> 
                        <img src="ressources/orargent.png">
                    </li>
                    <li data-target="#slideshow1" data-slide-to="2" class="col-12" onclick="$('#slideshow2').carousel(2)"> 
                        <img src="ressources/rubissaphir.png">
                    </li>
                    <li data-target="#slideshow1" data-slide-to="3" class="col-12" onclick="$('#slideshow2').carousel(3)">
                        <img src="ressources/diamantperle.png">
                    </li>
                    <li data-target="#slideshow1" data-slide-to="4" class="col-12" onclick="$('#slideshow2').carousel(4)"> 
                        <img src="ressources/noireblanche.png">
                    </li>
                    <li data-target="#slideshow1" data-slide-to="5" class="col-12" onclick="$('#slideshow2').carousel(5)"> 
                        <img src="ressources/xy.png">
                    </li>
                    <li data-target="#slideshow1" data-slide-to="6" class="col-12" onclick="$('#slideshow2').carousel(6)"> 
                        <img src="ressources/soleillune.png">
                    </li>
                    <li data-target="#slideshow1" data-slide-to="7" class="col-12" onclick="$('#slideshow2').carousel(7)"> 
                        <img src="ressources/epeebouclier.png">
                    </li>
                </ol>
            </div>
        <div class="row ">
            <div  id="slideshow1" class=" col-md-6 col-lg-6  col-sm-8 carousel container " data-interval="false">
               
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="ressources/rouge-bleu.png" class="d-block w-100 magictime spaceInDown" alt=" version rouge-bleu" >
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/or-argent.png" class="d-block w-100 magictime spaceInDown" alt="version or-argent">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/rubis-saphir.png" class="d-block w-100 magictime spaceInDown" alt="version rubis-saphir">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/diamant-perle.png" class="d-block w-100 magictime spaceInDown" alt="version diamant-perle">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/noire-blanche.png" class="d-block w-100 magictime spaceInDown" alt="version noire-blanche">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/x-y.png" class="d-block w-100 magictime spaceInDown" alt="version x-y">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/soleil-lune.png" class="d-block w-100 magictime spaceInDown" alt="version soleil-lune">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/epee-bouclier-2.png" class="d-block w-100 magictime spaceInDown" alt="version épée-bouclier">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#slideshow1" role="button" data-slide="prev" onclick="$('#slideshow2').carousel('prev')">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slideshow1" role="button" data-slide="next" onclick="$('#slideshow2').carousel('next')">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="slideshow2" class=" col-md-7 col-lg-7  col-sm-8 carousel  container mt-5 " data-interval="false">
                <div class="carousel-inner innerP">
                    <div class="carousel-item active text-center magictime spaceInDown">                       
                            <h5>Pokemon 1ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at.
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at.
                            </p>                      
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">                     
                            <h5>Pokemon 2ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                            <h5>Pokemon 3ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                            <h5>Pokemon 4ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                            <h5>Pokemon 5ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                            <h5>Pokemon 6ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                            <h5>Pokemon 7ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                            <h5>Pokemon 8ère Génération</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur maxime veritatis id consequatur dolorum itaque architecto aliquid officiis placeat. Porro libero distinctio rerum quaerat quos, nihil numquam incidunt cumque.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum harum debitis provident vitae dignissimos nulla sint, veniam deleniti similique unde. Quibusdam laudantium et molestias officia error accusamus in quae magnam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facilis illo vel, at veritatis, deleniti cumque commodi optio vitae iste quidem odio exercitationem similique recusandae ut dolorem impedit, ab adipisci.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nulla quis vitae officia! Nam quia amet, nesciunt laborum consectetur ratione, accusantium aspernatur nihil numquam praesentium esse fuga hic saepe rem.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et vero, esse doloremque excepturi suscipit labore, ipsam quos cupiditate delectus exercitationem, saepe voluptate omnis impedit corporis accusantium explicabo nemo officia at..</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>