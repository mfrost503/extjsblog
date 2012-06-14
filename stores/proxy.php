<?php

$data = array();
$data['people'] = array(
array('id'=>1,'first_name'=>'Matt','last_name'=>'Frost'),
array('id'=>2,'first_name'=>'Jane','last_name'=>'Doe'),
array('id'=>3,'first_name'=>'Bill','last_name'=>'Schwartsky'),
array('id'=>4,'first_name'=>'Sue','last_name'=>'Swanson'),
array('id'=>5,'first_name'=>'Lloyd','last_name'=>'Weinachten')
);


echo json_encode($data);
