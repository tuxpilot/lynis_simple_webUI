# Lynis Simple WebUI

## Description : 
	Just a simple WebUI with a playbook to make some automation in generating lynis reports and retrieve them on your web server in order to read them and collect them easily.

### Ansible playbook :
	The playbook is for your own use if you want it.
	The web interface is only here to show the reports in html format.
	The playbook :
		- install : Aha
		- install : Lynis 
		- Place all the reports in the /tmp/

## Prerequisites: 
- A Web server (Apache2, Nginx, etc.)
- Php 7.x
- Ansible
- all reports must already be in html format (conversion made by the package : 'aha' in the playbook if you do it with the included playbook)

## Installation: 
1) Download the folder as it is
2) (for default installation) Place it in /var/www/html/lynis
3) Create your vhost on your web server app (Apache2, Nginx, etc.)
4) Define the root folder at "/var/www/html/lynis"
5) In the folder "ansible_playbook" : edit the playbook "lynis_report_maker.yaml"
==> Customize the playbook section "hosts" to match it to the group or host you want to target.



### For any customization of the web root folder of the WebUI: 
1) In the folder "ansible_playbook" : edit the playbook "lynis_report_maker.yaml"
2) In the "Fectch" section at the end of the playbook, edit the "dest" sections, and place it where you want
3) In the index.php, change by the relative or absolute path of the folder in the variable definition section at the variable "$report_folder"

## How to use it
### With the playbook and Ansible : 
- Run the Playbook in the folder "ansible_playbook".
- Open your favorite web browser and open the website
- By default, the first page you'll see is a listing of all the reports available in the $report_folder defined variable in the index.php (folder "reports" by default)
- The numbers on the right side of the page are the "Hardening index" of each reports available.
- Click on the board icon to open the report fully and read it.

### Without the playbook 
- Run Lynis on your distant server
- Retrieve by your own way the generated report made by Lynis, convert it in HTML format ("aha" Package can do it very nicely)
- Place the reports in the $report_folder defined variable in the index.php (folder "reports" by default)
- Open your favorite web browser and open the website
- By default, the first page you'll see is a listing of all the reports available in the $report_folder defined variable in the index.php (folder "reports" by default)
- The numbers on the right side of the page are the "Hardening index" of each reports available.
- Click on the board icon to open the report fully and read it.

## Additional informations : 
- All the tests were made on Debian10 and Ubuntu 20.04, with Nginx and Apache2
- Sorry for probably not respecting the best pratcices about Ansible and PHP (I'm not a Dev), If you have some advices, share them, i love to learn :)
- Hope to have been useful,   Enjoy.
