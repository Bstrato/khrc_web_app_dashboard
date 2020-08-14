<?php



$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");


$column=array('pid','pname','mname','compno','sex','dov','dob','Lower_Limit','Duedate','Upper_Limit','village_name','remarks','lmark','tel','district','cluster','visits_','groupings','villCode','vname', 'status_x','cpermid','mpermid');

$query="SELECT * FROM Weekly_Listings_current_datab";

if (isset($_POST['filter_cluster'],$_POST['filter_grouping'], $_POST['filter_district']) && (!empty(trim($_POST['filter_cluster'])) && !empty(trim($_POST['filter_grouping'])) && !empty(trim($_POST['filter_district']))))
{
	$query .=" WHERE cluster='".$_POST['filter_cluster']."' AND groupings='".$_POST['filter_grouping']."' AND district='".$_POST['filter_district']."'";

}

if(isset($_POST['order']))
{

	$query .= ' ORDER BY '.$column[$_POST['order']['0']['column']].''.$_POST['order']['0']['dir'].'';
}
else
{
	$query .= ' ORDER BY pid DESC';
}
$query1 = '';

if($_POST['length'] != -1)
{
	$query1 = ' LIMIT ' .$_POST['start'].','.$_POST['length'];
}


$statement= $connect->prepare($query);

$statement->execute();

$number_filter_row=$statement->rowCount();

$statement=$connect->prepare($query.$query1);

$statement->execute();

$result=$statement->fetchAll(PDO::FETCH_ASSOC);

$data=array();

foreach($result as $row)
{
	$sub_array[] = array();
	$sub_array[] = $row['cluster'];
	$sub_array[] = $row['compno'];
	$sub_array[] = $row['cpermid'];
	$sub_array[] = $row['district'];
	$sub_array[] = $row['dob'];
	$sub_array[] = $row['dov'];
	$sub_array[] = $row['Duedate'];
	$sub_array[] = $row['groupings'];
	$sub_array[] = $row['lmark'];
	$sub_array[] = $row['Lower_Limit'];
	$sub_array[] = $row['mname'];
	$sub_array[] = $row['mpermid'];
	$sub_array[] = $row['pid'];
	$sub_array[] = $row['pname'];
	$sub_array[] = $row['remarks'];
	$sub_array[] = $row['sex'];
	$sub_array[] = $row['status_x'];
	$sub_array[] = $row['tel'];
	$sub_array[] = $row['Upper_Limit'];
	$sub_array[] = $row['village_name'];
	$sub_array[] = $row['villCode'];
	$sub_array[] = $row['visits_'];
	$sub_array[] = $row['vname'];
	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$query ="SELECT * FROM Weekly_Listings_current_datab";
	$statement = $connect->prepare($query);
	$statement->execute();
	return $statement->rowCount();
}

$output= array(

	'draw'				=> intval($_POST['draw']),
	'recordsTotal'		=> count_all_data($connect),
	'recordsFiltered'	=> $number_filter_row,
	'data'				=> $data,
	'starts'             =>$_POST['start'],
	'lengths'            =>$_POST['length'],
	'query_info'         =>$query.$query1,
	'data_info'         =>$_POST['filter_grouping'].$_POST['filter_cluster'].$_POST['filter_district']
);
 echo json_encode($output);
?>