<?php
if(isset($_REQUEST['insert'])){

$servername = "localhost";
$username = "root";
$password = "qwertyuiop";
$dbname = "virtual";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



	$field_values_array = $_REQUEST['field_name'];
	$name = $_REQUEST['stepfield'];
	$desc = $_REQUEST['descfield'];
	$outcome = $_REQUEST['outcomefield'];
	$action = $_REQUEST['actionfield'];
	
	
	$step = 1;
	$sql = "INSERT INTO step(name,description,action,outcome) VALUES('$name','$desc','$action','$outcome')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


	foreach($field_values_array as $value){
		
		$sql = "INSERT INTO constrain(sid,cons) VALUES($step,'$value')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}



mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EasyAuthor</title>
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../prettify.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="devheart-examples.css" media="screen" />
<?php
require '/home/kiran/vendor/autoload.php';
use Stichoza\GoogleTranslate\TranslateClient;
function translate($text, $lang){
    $tr = new TranslateClient(); // Default is from 'auto' to 'en'
    $tr->setSource('en'); // Translate from English
    $tr->setTarget($lang); // Translate to Georgian
    echo $tr->translate($text);
}
   
?>


</head>
<body>
<div class='container'>

    <section id="wizard">
        <div class="page-header">


<?php$lang = 'ta'?>            <h1><?php translate('3D Physics virtual lab', $lang) ?> </h1>
    <h5> <?php translate('You can design your experiments. Input the given details and generate your lab', $lang) ?></h2>
        </div>
        <form id="commentForm" method="get" action="" class="form-horizontal">
            <div id="rootwizard">
                <ul>
<li><a href='#tab1' data-toggle='tab'>Tension in pulley</a></li><li><a href='#tab2' data-toggle='tab'>ATwood machine</a></li><li><a href='#tab3' data-toggle='tab'>Moving wedge</a></li><li><a href='#tab4' data-toggle='tab'>Free fall</a></li><li><a href='#tab5' data-toggle='tab'> Pusing blocks</a></li>


</ul>
                <div id="bar" class="progress progress-info progress-striped">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>




                <div class="tab-content">


<div class="tab-pane" id="tab1">
                              <div class="control-group">
                                <label class="control-label" for="step">step</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="stepfield" class="required">
                                </div>
                              </div>
			       <div class="control-group">
                                <label class="control-label" for="desc">description</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="descfield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="actions">actions</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="actionfield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="outcomes">outcomes</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="outcomefield" class="required">
                                </div>
                              </div>

                               <div class="control-group">
                                <label class="control-label" for="constraints">constraints</label>
                               <div class="field_wrapper">
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>

<input type="submit" class="button" name="insert" value="insert" />

                    </div>



<div class="tab-pane" id="tab1">

 <div class="control-group">
                                <label class="control-label" for="name">hello</label>
                                <div class="controls">
                                 <div id="example-1-2">

                <div class="column left first">

                    <ul class="sortable-list">
                        <li class="sortable-item">Sortable item A</li>
                        <li class="sortable-item">Sortable item B</li>
                    </ul>

                </div>

                <div class="column left">

                    <ul class="sortable-list">
                        <li class="sortable-item">Sortable item C</li>
                        <li class="sortable-item">Sortable item D</li>
                    </ul>

                </div>



                <div class="clearer">&nbsp;</div>

            </div>
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">step</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">actions</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">outcomes</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                               <div class="control-group">
                                <label class="control-label" for="name">constraints</label>
                               <div class="field_wrapper">
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>
                        </div>



<div class="tab-pane" id="tab1">
                              <div class="control-group">
                                <label class="control-label" for="name">step</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">actions</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">outcomes</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                               <div class="control-group">
                                <label class="control-label" for="name">constraints</label>
                               <div class="field_wrapper">
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>
                        </div>



<div class="tab-pane" id="tab1">
                              <div class="control-group">
                                <label class="control-label" for="name">step</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">actions</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">outcomes</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                               <div class="control-group">
                                <label class="control-label" for="name">constraints</label>
                               <div class="field_wrapper">
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>
                        </div>



<div class="tab-pane" id="tab1">
                              <div class="control-group">
                                <label class="control-label" for="name">step</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">actions</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">outcomes</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>

                               <div class="control-group">
                                <label class="control-label" for="name">constraints</label>
                               <div class="field_wrapper">
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>
                        </div>



</div>
                <ul class="pager wizard">
                    <li class="previous first" style="display:none;"><a href="#"><?php translate('First', $lang) ?></a></li>
                    <li class="previous"><a href="#"><?php translate('Previous', $lang) ?></a></li>
                    <li class="next last" style="display:none;"><a href="#"><?php translate('Last', $lang) ?></a></li>
                    <li class="next"><a href="#"><?php translate('Next', $lang) ?></a></li>
                    <li class="finish"><a href=**><?php translate('Finish', $lang) ?></a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12">
            <input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
            <input type='button' class='btn' id='disable-step' value=<?php translate('disable', $lang) ?> />
            <input type='button' class='btn' id='enable-step' value='<?php translate('enable', $lang) ?>' />
            <input type='button' class='btn' id='enable-step' value='<?php translate('add', $lang) ?>' />
            <input type='button' class='btn' id='remove-step' value='<?php translate('remove', $lang) ?>' />
        </div>
    </form>




</section>
</div>

<!-- Example JavaScript files -->
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>

<!-- Example jQuery code (JavaScript)  -->
<script type="text/javascript" src="drag_drop.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="add_field.js"></script>
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->





<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->


<!--***********Script for the wizard options and the animations. Consists of the functions declared in the above html body****************-->
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->

 <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../jquery.bootstrap.wizard.js"></script>
<script src="../prettify.js"></script>
<script src="wizard.js"></script>
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->
        </body>
        </html>
