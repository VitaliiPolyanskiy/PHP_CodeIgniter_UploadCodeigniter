<?php
$this->load->view('header');
if(isset($error))
{
	echo '<div style="color:red;">'.$error.'</div>';
}

$st['class']='form-horizontal';
echo form_open_multipart('home/selectImages',$st);
echo '<div class="col-md-offset-3">';
echo form_label('Выберите изображение: ','image',array('class'=>'control-label'));
echo '&nbsp;';
echo form_upload('image',array('class'=>'control-label')); 
echo '&nbsp;';
echo form_submit(array('name'=>'send','value'=>'Отправить', 
	'class'=>'btn btn-success'));
echo '</div>';
echo form_close();


$this->load->view('footer');
?>