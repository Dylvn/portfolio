<?php
$page = $_GET['p'];
include('includes/_header.php');
include('includes/_nav.php');



var_dump($page);

if($page == 'formation'){

  include('controller/formation.php');

} else if ($page == "about") {

  include('controller/about.php');

} else if ($page == "contact") {

  include('controller/contact.php');

} else if ($page == "projects") {

  include('controller/projects.php');

} else if ($page == "skills") {

  include('controller/skills.php');

} else {

  include('controller/index.php');

}

include('includes/_footer.php');