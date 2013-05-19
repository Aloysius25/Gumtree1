<?php
/* ****************************************
 * Author: Aloysius Singarayar
 * Date: 
 *
 * *************************************** */

define("MY_INC_CODE", 1);

define("APPLICATION_PATH", "app");
define("TEMPLATE_PATH", APPLICATION_PATH . "/view");
define("LIBRARY_PATH", "lib");

include (APPLICATION_PATH . "/inc/config.inc.php");
//include (APPLICATION_PATH . "/inc/db.inc.php");
//include (APPLICATION_PATH . "/inc/functions.inc.php");

include (TEMPLATE_PATH . "/private/header.php");

?>

<!-- main page content ................................. -->

<div class="wrapper">
<!-- main page content -->

<div class="container">

                  <div class="row ">
                       <div class="span12 docpanel2">
                            <h2 class="whitefont"> Place Add </h2>
						</div> <!-- .span12 -->
                  </div><!-- .row -->
				  
				  
				  <div class="row ">
                       <div class="span4">
                            <p class="padFirstP">
							<p>Type of Ad <button> For Sale </button> <button> Free </button></p>
							</div>
							
							<div class="row ">
                       <div class="span4">
                            <p class="padFirstP">
							<p>Currency <button> EUR </button> <button> GBP </button></p>
							</div>
							
							<div class="row ">
                       <div class="span4">
                            <p class="padFirstP">
							   <p>Location <select name="Location">
			 
			<optgroup label="Leinster">
							<option value="Carlow">Carlow</option>
							<option value="Dublin">Dublin</option>
							<option value="Kildare">Kildare</option>
							<option value="Kilkenny">Kilkenny</option>
							<option value="Laois">Laois</option>
							<option value="Longford">Longford</option>
							<option value="Louth">Louth</option>
							<option value="Meath">Meath</option>
							<option value="Offaly">Offaly</option>
							<option value="Westmeath">Westmeath</option>
							<option value="Wexford">Wexford</option>
							<option value="Wicklow">Wicklow</option>
						</optgroup>
						
						<optgroup label="Ulster">
							<option value="Antrim">Antrim</option>
							<option value="Armagh">Armagh</option>
							<option value="Cavan">Cavan</option>
							<option value="Derry">Derry</option>
							<option value="Donegal">Donegal</option>
							<option value="Down">Down</option>
							<option value="Fermanagh">Fermanagh</option>
							<option value="Monaghan">Monaghan</option>
							<option value="Tyrone">Tyrone</option>
						</optgroup>
						
			                <optgroup label="Connacht">
							<option value="Galway">Galway</option>
							<option value="Leitrim">Leitrim</option>
							<option value="Mayo">Mayo</option>
							<option value="Roscommon">Roscommon</option>
                            <option value="Sligo">Sligo</option>
						</optgroup>

						<optgroup label="Munster">
							<option value="Clare">Clare</option>
							<option value="Cork">Cork</option>
							<option value="Kerry">Kerry</option>
							<option value="Limerick">Limerick</option>
							<option value="Tipperary">Tipperary</option>
							<option value="Waterford">Waterford</option>
						</optgroup>
						</select></p>
							
                       </div> <!-- .span12 -->
                  </div><!-- .row -->
				  </div>
				  </div>
				  
                  <div class="row ">
                       <div class="span12">
                            <p class="padFirstP">
							<p><textarea name ="Ad Title" span="12" rows="10">Ad Title:</textarea></p>
                       </div> <!-- .span12 -->
                  </div><!-- .row -->
				  </div>
				 
				  <div class="container">

                  <div class="row ">
                       <div class="span12 docpanel2">
                            <h2 class="whitefont"> Add Photos </h2>
						</div> <!-- .span12 -->
                  </div><!-- .row -->
				  
				  <div class="row ">
                       <div class="span12">
                            <p class="padFirstP">
							<form action="uploadfile.php" method="post" enctype="multipart/form-data">
		                    <img src ="./img/upload.png" width="150"/> Choose Photo <input type="file" name="photos"/>
			                <input type="submit" value="Upload"/>
			           </form>
							</div>
							</div>
				  
<!-- keep this at the bottom to push down the footer-->
<div class="push"><!--//--></div>
</div><!-- .wrapper -->

<!-- main page  end .................................... -->

<?php include (TEMPLATE_PATH . "/private/footer.html"); ?>