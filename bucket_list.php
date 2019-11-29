<?php
$aantalActiviteiten;
$bucketList = array();
echo "Hoe veel activiteiten wil je toevoegen? ";
$aantalActiviteiten = readline();
if (!is_numeric($aantalActiviteiten))
{
  echo $aantalActiviteiten . ' is geen getal, probeer het opnieuw';
  exit();
}
for ($i=0; $i < $aantalActiviteiten; $i++)
{
  $teller = $i + 1;
  echo "Wat wil je toevoegen aan jouw bucket list? " . $teller . ' : ';
  $bucketList[$i] = readline();
}
echo "Op jouw bucket list staat:" . "\n";
foreach ($bucketList as $val)
{
  echo $val . "\n";
}
 ?>
