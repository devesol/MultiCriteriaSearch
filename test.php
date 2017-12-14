 <nav id="menu">        
    <div class="element_menu">
        <h3>Titre menu</h3>
        <ul>
            <li><a href="page1.html">Lien</a></li>
            <li><a href="page2.html">Lien</a></li>
            <li><a href="page3.html">Lien</a></li>
        </ul>
    </div>    
</nav>
	<?php
        
       
                
 function VolumeCone($rayon, $hauteur) {
            $volume = $rayon * $rayon * 3.14 * $hauteur * (1 / 3); // calcul du volume
            return $volume;
        }

        $volume = VolumeCone(3, 1);
        echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume. 'cm<sup>3</sup>';
        ?>

