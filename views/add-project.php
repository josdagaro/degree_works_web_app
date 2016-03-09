<?php
  require ('../controllers/init.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php
			head ('Add project', 'other');
      javascript ('undefined');
      loader ();
		?>
	</head>
  <body>
    <header id = "form-header">
      <div class = "container">
        <h2 id = "h2-title">Add project</h2>
      </div>
    </header
    <div class = "container">
      <div class = "main row">
        <div class = "col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 container-fluid panel-color">
          <form name = "add-project-form">
            <table class = "table" id = "project-1">
              <tr>
        	       <td colspan = "2">Register project</td>
    	        </tr>
    	        <tr>
    	           <td align = "left">Name:</td>
    	           <td>
                   <input class = "form-control" type = "text" name = "name" placeholder = "Project name" required/>
                 </td>
    	        </tr>
    	        <tr>
    	           <td align = "left">Date:</td>
    	           <td>
                   <input class = "form-control" type = "date" name = "date" placeholder = "Added date"/>
                 </td>
    	        </tr>
    	        <tr>
    	           <td align = "left">Calification:</td>
    	           <td>
                   <input class = "form-control" type = "number" min = "0" max = "5" name = "calification" placeholder = "Final calification"/>
                 </td>
    	        </tr>
    	        <tr>
    	           <td align = "left">Investigation line:</td>
    	           <td>
                   <input class = "form-control" type = "text" name = "investigationLine" placeholder = "Specific research line" required/>
                 </td>
    	        </tr>
    	        <tr>
    	           <td colspan = "2">
                   <div class = "container button-container">
                     <div class = "main row">
                       <div class = "col-xs-6 col-sm-6 col-md-6 col-lg-6">
                         <input class = "btn btn-lg btn-success button-width center-block" type = "button" value = "Continue" name = "accept">
                       </div>
                       <div class = "col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	  				         <input class = "btn btn-lg btn-danger button-width center-block" type = "reset" value = "Back" onclick = "document.location='../public/index.php'" />
                       </div>
                     </div>
                   </div>
                 </td>
    	        </tr>
            </table>
            <div class = "container" id = "project-2">
              <div class = "main row">
                <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 form-label" id = "authors-label">
                  <label>Authors (multiselection [Ctrl + click]):</label>
                </div>
                <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 div-select">
                  <select class = "form-control" multiple = "multiple" name = "authors">
                    <option value = "1">Value 1</option>
                    <option value = "2">Value 2</option>
                    <option value = "3">Value 3</option>
                    <option value = "3">Value 4</option>
                    <option value = "3">Value 5</option>
                  </select>
                </div>
                <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 form-label">
                  <label>Adviser:</label>
                </div>
                <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 move-select">
                  <select class = "form-control" name = "advisers">
                    <option value = "0" selected>Choose adviser</option>
                    <option value = "1">Value 1</option>
                    <option value = "2">Value 2</option>
                    <option value = "3">Value 3</option>
                  </select>
                  <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class = "container button-container">
                      <div class = "row">
                      </div>
                      <div class = "main row">
                        <div class = "col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <input class = "btn btn-lg btn-success button-width center-block" type = "submit" value = "Save" name = "accept-2">
                        </div>
                        <div class = "col-xs-6 col-sm-6 col-md-6 col-lg-6">
     	  				         <input class = "btn btn-lg btn-danger button-width center-block" type = "button" value = "Back" name = "back-2"/>
                        </div>
                      </div>
                    </div>
                    </select>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src = "../public/js/add-project.js"></script>
  </body>
</html>