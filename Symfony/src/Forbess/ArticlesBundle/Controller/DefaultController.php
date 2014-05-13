<?php

namespace Forbess\ArticlesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forbess\ArticlesBundle\Document\Article;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction( )
    {
       $articles = $this->get('doctrine_mongodb' )
                        ->getManager()
                        ->getRepository('ForbessArticlesBundle:Article') 
                        ->findAll(); 
       return $this->render('ForbessArticlesBundle:Default:index.html.twig', array('articles' => $articles ));
    }
    
    public function newAction( Request $request )
    {

      $article = new Article();
      $article->setTitle( 'new Article ' );
      $article->setTeaser( 'blah blah ');
      $article->setContent( 'foo bar' );
  
      $form = $this->createFormBuilder( $article )
              ->add( 'title', 'text' )
              ->add( 'teaser', 'textarea',
                array('attr' => array('cols' => '30', 'rows' => '20')))
              ->add( 'content', 'textarea' , 
                array('attr' => array('cols' => '30', 'rows' => '20')))
              ->add( 'save', 'submit' )
              ->getForm();  
     $form->handleRequest($request);


     
     $request_arr = $request->request->all();
     if ( $form->isValid())
        {

          $article = new Article();
          $article->setTitle( $request_arr['form']['title'] );
          $article->setTeaser( $request_arr['form']['teaser'] ); 
          $article->setContent( $request_arr['form']['content'] ); 
          $article->setDateEntered = time(); 
          $dm = $this->get('doctrine_mongodb')->getManager();
          $dm->persist($article);
          $dm->flush();
 
        }
       
     return $this->render('ForbessArticlesBundle:Default:new.html.twig',
                          array('form' => $form->createView(), ));


   }
   
}
