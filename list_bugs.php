
<?php
// list_bugs.php
require_once "bootstrap.php";

//$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ORDER BY b.created DESC";

$dql = "SELECT b FROM Bug b";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach ($bugs as $bug) {
    echo $bug->getDescription()." - ".$bug->getCreated()->format('d.m.Y')."<br/>";
    //echo "    Reported by: ".$bug->getReporter()->getName()."<br/>";
   // echo "    Assigned to: ".$bug->getEngineer()->getName()."<br/>";
   
    echo "<br/><br/>";
}