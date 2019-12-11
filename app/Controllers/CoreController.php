<?php 
//*********************************************** */
// CoreController
//*********************************************** */
namespace Dashboard\Controllers;
class CoreController {
         
    // On protège la méthode pour qu'elle ne puisse pas être 
    // appelée depuis l'extérieur
    
    protected function show($viewName, $viewVars=array()) {
        // Url absolue pour les views
        $absoluteUrl = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
        // $viewVars est disponible dans chaque fichier de vue
        require __DIR__.'/../views/header.tpl.php';      
        require __DIR__.'/../views/board.tpl.php';   
        require __DIR__.'/../views/'.$viewName.'.tpl.php';  
        require __DIR__.'/../views/footer.tpl.php';
      }
}