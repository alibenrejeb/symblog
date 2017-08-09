<?php
/**
 * Created by PhpStorm.
 * User: nouha gharbi
 * Date: 29/07/2017
 * Time: 12:15
 */

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
}