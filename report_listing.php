<?php

	# we read the content of the report folder containing all the lynis reports already in html readable format
	$folder_content = shell_exec('ls -1 '.$reports_folder.'/');

	# we split the content of each string which is the full name of the lynis report
	$filename_to_split = explode(PHP_EOL, $folder_content);

	# we create a table which will contain all the report to display them with the following fields : date // server name //  hardening index
	echo "<center>
	<table border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse; width: 80%; margin: 1.5em; font-family: Arial, Helvetica, sans-serif; font-size: 0.85em;'>
		<tbody>
		<tr>
			<td>Date&emsp;&emsp;<br></td>
			<td>Server Name&emsp;&emsp;<br></td>
			<td>Hardening Index&emsp;&emsp;<br></td>
			<td style='width:20%'>&emsp;</td>
			<td>&emsp;&emsp;<br></td>
		</tr>";
		
	# for every report filename :
	foreach($filename_to_split as $filename)
	{	
	   # we check if the line is not an empty one, 
	   if ($filename != "" )
	   { 
		# we split the filename with the delimiter '@'  which is the delimiter between the name and the date
		$split_of_filename = explode("@", $filename);
		# we read the file and we retrieve the hardening index note of the lynis report
		$check_report_score = shell_exec('grep -E -i "hardening.*index" '.$reports_folder.'/'.$filename.' | awk -F \':\' \'{$1=$2=""; print $0}\' | awk -F \'[\' \'{print $1}\'');
		
		# we put it all in the table for "human reading "
		echo "
		<tr style='border-bottom: 1px solid #ccc; line-height: 1.8em;'>
			<td><b><h2>&emsp;".$split_of_filename[0]."</h2></b>&emsp;</td>
			<td><b><h2>&emsp;".$split_of_filename[1]."</h2></b>&emsp;</td>
			<td><b><h2>&emsp;".$check_report_score."</h2></b>&emsp;</td>
			<td style='width:20%'>&emsp;</td>
			<td><a href='index.php?page=report_reading&report_name=".$filename."'><img src='images/read_report.png' height='60px'></a></td>
		</tr>";
	   }
	}


	echo "</table>";			
			
?>