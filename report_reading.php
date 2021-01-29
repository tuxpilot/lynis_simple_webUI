<?php

	# we retrieve the report name selected for reading ion the GET variable
	if(isset($_GET['report_name']))
	{
		$report_name = $_GET['report_name'];
	}else{
		echo "Error : No report selected";
	}
	

	# we read the content of the selected report
$reportfile = file_get_contents($reports_folder.'/'.$report_name);
echo $reportfile;
?>