<?php 

$array = ['am','jam', 'kathal'];

for($i = 0; $i < count($array); $i++) {
  echo $array[$i] . "\n";
}
 ?>
<?php foreach($array as $a): ?>
<?php echo $a . "\n"; ?>
<?php endforeach ?>

