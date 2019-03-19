<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>InfoBank Login Console</title>
		<link rel="stylesheet" type="text/css" href="ext/addex.css"/>
		<script src="ext/jquery.js"></script>
		<script src="ext/jquery-uis.1.10.7.js"></script>
		<script src="ext/jquery-uis.1.10.2.js"></script>
		<script src="ext/jquery-uis.1.10.2.min.js"></script>
    </head>
    <body id="appConteiners">
        <div id="body_container">
		  <div id="body_container_login">
		    <div id="left"></div>
			<div id="right">
			<form id="formUserAuth">
			  <table width="328" border="1" cellpadding="4" cellspacing="4" id="table_id">
  				 <tr>
    				 <td width="117"><div id="formtitle">User Name:</div></td>
 				     <td width="195"><div id="formtitle_input"><input type="text" name="userName"/></div></td>
  				 </tr>
 			     <tr>
   					 <td><div id="formtitle">Password:</div></td>
  				     <td><div id="formtitle_input"><input type="password" name="userPass"/></div></td>
 			     </tr>
  				 <tr>
    				 <td>&nbsp;</td>
  				     <td><div id="submitButton"><input type="submit" value="Login" id="logB">
  				       <img src="ext/rot_small.gif" id="loaders"></div></td>
  				 </tr>
			</table> 
			</form>
			</div>
		  </div>
		</div>
		
		 <div id="body_footer">
            <div id="body_footer_copy">
                InfoBank  Web Application<br>
              Copyright © 2016 Infonet Management Consultants Limited and/or its affiliates. All rights reserved.
                </div>
        </div>
    </body>
</html>
