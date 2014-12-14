<?php
// src/AppBundle/Menu/MenuBuilder.php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function aboutMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
    
        $menu->setChildrenAttribute('class', 'nav');
    
        $menu->addChild('About', array('label' => 'About'))
            ->setAttribute('dropdown', true)
            ->setAttribute('icon', 'icon-user');

        $menu['About']->addChild('The company', array('route' => 'homepage'));
        $menu['About']->addChild('Value proposal', array('route' => 'homepage'));
        $menu['About']->addChild('Structure', array('route' => 'homepage'));
        $menu['About']->addChild('Customers', array('route' => 'homepage'));
        $menu['About']->addChild('Quality', array('route' => 'homepage'));
        $menu['About']->addChild('Opportunities', array('route' => 'homepage'));
        $menu['About']->addChild('Our offices', array('route' => 'homepage'));
        
        return $menu;
    } 

    public function automationMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
    
        $menu->setChildrenAttribute('class', 'nav');
    
        $menu->addChild('Automation', array('label' => 'Automation'))
            ->setAttribute('dropdown', true)
            ->setAttribute('icon', 'icon-user');

        $menu['Automation']->addChild('Services offer', array('route' => 'homepage'));
        $menu['Automation']->addChild('Service details', array('route' => 'homepage'));
        $menu['Automation']->addChild('Service mode', array('route' => 'homepage'));
        $menu['Automation']->addChild('Products', array('route' => 'homepage'));
        $menu['Automation']->addChild('Success cases', array('route' => 'homepage'));
        
        return $menu;
    }

    public function itMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
    
        $menu->setChildrenAttribute('class', 'nav');
    
        $menu->addChild('IT', array('label' => 'IT'))
            ->setAttribute('dropdown', true)
            ->setAttribute('icon', 'icon-user');

        $menu['IT']->addChild('Services offer', array('route' => 'homepage'));
        $menu['IT']->addChild('Service account', array('route' => 'homepage'));
        $menu['IT']->addChild('Service modality', array('route' => 'homepage'));
        $menu['IT']->addChild('Methodological support', array('route' => 'homepage'));
        $menu['IT']->addChild('Success cases', array('route' => 'homepage'));
        
        return $menu;
    }

    public function contactMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
    
        //$menu->setChildrenAttribute('class', 'nav');
    
        $menu->addChild('Contact', array('route' => 'homepage'));
        
        return $menu;
    } 

    public function userMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->setChildrenAttribute('class', 'nav pull-right');
        /*
        You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.
        if($this->container->get('security.context')->isGranted(array('ROLE_ADMIN', 'ROLE_USER'))) {} // Check if the visitor has any authenticated roles
        $username = $this->container->get('security.context')->getToken()->getUser()->getUsername(); // Get username of the current logged in user
        */  
        $menu->addChild('User', array('label' => 'Hi visitor'))
            ->setAttribute('dropdown', true)
            ->setAttribute('icon', 'icon-user');
        
        $menu['User']->addChild('Edit profile', array('route' => 'homepage'))
            ->setAttribute('icon', 'icon-edit');
        
        return $menu;
    } 
}