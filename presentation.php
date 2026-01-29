<?php
$pagetitle = "Luxury Watch Media Hub";
$pageclass = "page-home";
$pagedescription = "Join the Happy Horologists community for exclusive watch photography, videos, and discussions.";

include("modules.php");
include("com/open.php");
?>

<div class="container">
<section class="systems">
    
    <!-- Header -->
    <div class="columns is-variable is-12 mb-12">            
        
        <div class="column is-half-desktop is-half-tablet">
            <h2>Systems</h2>
        </div>
        <div class="column is-half-desktop is-half-tablet">
            <p>£7K+ invested into equipment so far</p>
        </div>

    </div>

    <!-- Top Row - 4 Cards -->
    <div class="columns is-variable is-4 mb-4">
        <div class="column is-one-quarter-desktop is-half-tablet">
            <?php echo simpleCard("Sony Alpha 7 II", "mirrorless professional camera - 24MP resolution"); ?>                                                        
        </div>

        <div class="column is-one-quarter-desktop is-half-tablet">
            <?php echo simpleCard("Sony FE 90mm F2.8", "best in class macro lens for ultra high details"); ?>
        </div>

        <div class="column is-one-quarter-desktop is-half-tablet">
            <?php echo simpleCard("Mac Studio M4 Max", "36GB RAM, 5TB SSD Apple Studio Display"); ?>                    
        </div>

        <div class="column is-one-quarter-desktop is-half-tablet">
            <?php echo simpleCard("DaVinci Resolve", "professional 4K+ video editing software"); ?>                    
        </div>
    </div>

    <!-- Bottom Row - 3 Cards (1 small, 1 wide, 1 small) -->
    <div class="columns is-variable is-4">
        <div class="column is-one-quarter-desktop is-half-tablet">
            <?php echo simpleCard("DJI Mic 2 2 sets", "for best in class audio recording for any situation"); ?>
        </div>            

        <div class="column is-half-desktop is-full-tablet">                    
            <?php echo simpleCard("Insta360 Ace Pro 2 (8K), Lumix G80, Lumix GX-8", "supporting cameras for b-rolls, events footage, atmosphere shots and recording on the go"); ?>                            
        </div>

        <div class="column is-one-quarter-desktop is-half-tablet">
            <?php echo simpleCard("Various lighting kits", "light boxes, mobile lights, background panels"); ?>                        
        </div>
    </div>
    
</section>

</div>
<?php include("com/close.php"); ?>