<?php

// navbar bootstrap

echo " <nav class=\" text-center navbar navbar-expand-lg navbar-light bg-info\">
<div class=\"container-fluid\">
  <a class=\"navbar-brand\" href=\"Accueil.php\">Ma Boutique</a>
  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Accueil</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"./Ajouter.php\">Ajouter une annonce</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"./Consulter.php\">Consulter toutes les annonces</a>
      </li>
    </ul>
  </div>
</div>
</nav>";

?>
