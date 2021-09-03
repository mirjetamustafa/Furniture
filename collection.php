<?php include 'inc/header.php'; ?>


    <?php  include "inc/aside.php"; ?>

    <main class="container">
        <div class="row">
            <div class="col-md-8 ml-5">
                <?php
                    $produktet = new \Admin\Lib\Produktet();

                    foreach ($produktet->find_all() as $pro) {
                        echo  "<img class='img-fluid justify-content-center mt-5' src='img/".$pro->getImage_name()."' alt='post image'/></a>";
                        echo "<div class='media-body text-center'>";
                        echo "<h4 class='mt-3'><a href='#' >" . $pro->getName() . "</a></h4>";
                    
                        $description=$pro->getDescription();
                        if(strlen($description)>200){
                            $description=substr($description,0,200) . "...";
                        }
                        echo "<p>{$description}</p>";
                       

                        echo "<div class='ml-2'>";
                        echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        echo "</div>";
                        echo "</div>";
                        
                    }
                        
                        
                    

                ?>
            </div>
            <div class="col-md-4 mt-5 pt-5">
                <?php
                    // $produktet = new \Admin\Lib\Produktet();

                    // foreach ($produktet->find_all() as $pro) {
                    //     echo "<div class='media-body'>";
                    //     echo "<h4><a href='#'>" . $pro->getName() . "</a></h4>";
                    
                    //     $description=$pro->getDescription();
                    //     if(strlen($description)>200){
                    //         $description=substr($description,0,200) . "...";
                    //     }
                    //     echo "<p>{$description}</p>";
                    //     echo "</div>";
                        
                    // }
                        // echo "<div class='ml-5 pl-3'>";
                        // echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        // echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        // echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        // echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        // echo "<a href='#' class='stars text-center'><i class='far fa-star'></i></a>";
                        // echo "</div>";
                        // echo "</div>";
                        
                    

                ?>
            </div>
        </div>
        
            

       </section> 
    </section>   
</main>
<!-- Start Footer -->
    <footer class="container-fluid">
        <div class="row text-white text-center" id="row">
            
            <div class="footer2 text-white">
                <p class=" mt-5 mb-4">Copyright © 2021 Palma Furniture. All Rights Reserved. </p>
                
            </div>
            
            
        </div>
        
    </footer>

