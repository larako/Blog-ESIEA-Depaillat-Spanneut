<?php


// src/OC/PlatformBundle/Controller/AdvertController.php


namespace BlogBundle\Controller;


// N'oubliez pas ce use :

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class AdvertController extends Controller

{

  public function indexAction()  {
     $url = $this->get('router')->generate(
            'oc_platform_view', // 1er argument : le nom de la route
            array('id' => 5)    // 2e argument : les valeurs des paramètres
        );
        // $url vaut « /platform/advert/5 »
        return new Response("L'URL de l'annonce d'id 5 est : ".$url);
  }


  public function viewSlugAction($slug, $year, $format){
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }


  public function viewAction($id, Request $request){
    // On récupère notre paramètre tag
    /*$tag = $request->query->get('tag');
    return new Response(
      "Affichage de l'annonce d'id : ".$id.", avec le tag : ".$tag
    ); pour recuperer le parametre */
    return $this->redirectToRoute('oc_platform_home');// permet de faire une redirection
  }

}