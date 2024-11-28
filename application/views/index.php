<?php
$this->load->view('header');

echo '<div class="col-md-offset-3">';
if(isset($upload_data))
{
	echo '<div style="color:green;">';
	echo '<ul>';
	foreach ($upload_data as $item => $value)
	{
		echo '<li>'.$item.':'.$value.'</li>';
	}
	echo '</div>';
	echo '</ul>';
}
else
	echo "<h1>".$result."</h1>";
echo '</div>';

$this->load->view('footer');
?>