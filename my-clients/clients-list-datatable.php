<?php
$data = array();
$details = array('id'=>1,
'name' => 'Sravan',
'assigned-to' => 'Walter White',
'referred-by' => 'Skyler White',
'added' => '12 OCT 2020',
'start-date' => '17 OCT 2020',
'end-date' => '19 OCT 2020',
'last-login'=> '23 OCT 2020 12:43:00 am',
 'status' => 'Done',
 'action' => '<a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a>'
);
array_push($data,$details);
$whole_data = array('data' => $data);
echo json_encode($whole_data);
?>