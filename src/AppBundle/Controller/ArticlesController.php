<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ArticlesController extends Controller
{
	/**
	* @Route("/articles")
     * @Method("GET")
	*/
	public function indexAction()
	{

        $articles = [
            ['id' => 1, 'author' => 'Riri', 'title' => 'Titre', 'content' => 'Lorem ipsum ...'],
            ['id' => 2, 'author' => 'Loulou', 'title' => 'Titre 2', 'content' => 'Lorem ipsum ...'],
            ['id' => 3, 'author' => 'Fifi', 'title' => 'Titre 3', 'content' => 'Lorem ipsum ...' ],
        ];

        $data = [
            'articles' => $articles
        ];
        return new Response($data);
		return $this->render('articles/index.html.twig', [
		    'title' => 'titre 1'
            ]);

	}

	/**
	* @Route("/articles/{id}" name="articles_view")
	*/
	public function viewAction($id)
	{
	    $content = [
	      'lorem ipsum deq foajh faojfe opahfiobai ...'
        ];
	    $title = [
	        'Article 1.'
        ];
	    $author = [
	        'Marco1'
        ];
        return $this->render('articles/view.html.twig', [
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'author'=> $author
        ]);	}

	/**
	* @Route("/articles/add")
	*/
	public function addAction()
	{

	}

	/**
	* @Route("/articles/edit/{id}")
	*/
	public function editAction()
	{

	}

	/**
	* @Route("/articles/delete/{id}")
	*/
	public function deleteAction()
	{

	}
}