<?php

function setPageTitle($page){
    
  $title = '';
    
  switch($page){
      case 'home':
          $title = 'Fjordstudio | Katrine-Marie Burmeister';
          break;
      case 'about':
          $title = 'Fjordstudio | My Skills';
          break;
      case 'cases':
          $title = 'Fjordstudio | My Work';
          break;
      case 'projects':
          $title = 'Fjordstudio | Selected Projects';
          break;
      case 'project':
          $title = 'Fjordstudio | Project Details';
          break;
      case 'contact':
          $title = 'Fjordstudio | Contact Me';
          break;
      case 'timeline':
          $title = 'Fjordstudio | Timeline';
          break;
			case 'personal':
					$title = 'Fjordstudio | About Me';
					break;
      default:
          $title = 'Fjordstudio | Katrine-Marie Burmeister';
          break;
  }
    
  return $title;

}