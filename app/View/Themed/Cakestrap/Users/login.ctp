<?php 
echo $this->fetch('content');

echo phpCAS::getUser();
?>

<ul>

<?php
$attributes = phpCAS::getAttributes();
foreach ($attributes as &$value) {
	echo '<li>' . $value . '</li>';
}
?>
</ul>