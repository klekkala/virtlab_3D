<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EasyAuthor</title>
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../prettify.css" rel="stylesheet">

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
<li><a href='#tab0' data-toggle='tab'>Finding out g</a></li><li><a href='#tab1' data-toggle='tab'>Tension in pulley</a></li><li><a href='#tab2' data-toggle='tab'>ATwood machine</a></li><li><a href='#tab3' data-toggle='tab'>Moving wedge</a></li><li><a href='#tab4' data-toggle='tab'>Free fall</a></li>            


</ul>
                <div id="bar" class="progress progress-info progress-striped">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>




                <div class="tab-content">


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
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
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



        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery.bootstrap.wizard.js"></script>
        <script src="../prettify.js"></script>
        <script>
$(document).ready(function() {

        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard .progress-bar').css({width:$percent+'%'});
            }});

        $('#pills').bootstrapWizard({'tabClass': 'nav nav-pills', 'debug': false, onShow: function(tab, navigation, index) {
            console.log('onShow');
            }, onNext: function(tab, navigation, index) {
            console.log('onNext');
            }, onPrevious: function(tab, navigation, index) {
            console.log('onPrevious');
            }, onLast: function(tab, navigation, index) {
            console.log('onLast');
            }, onTabClick: function(tab, navigation, index) {
            console.log('onTabClick');
            alert('on tab click disabled');
            }, onTabShow: function(tab, navigation, index) {
            console.log('onTabShow');
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#pills .progress-bar').css({width:$percent+'%'});
            }});
        $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});

        // Disable step
        $('#disable-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('disable', $('#stepid').val());
                });

        // Enable step
        $('#enable-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('enable', $('#stepid').val());
                });

        // Remove step
        $('#remove-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('remove', $('#stepid').val(), true);
                });

        // Show step
        $('#show-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('display', $('#stepid').val());
                });

        // Hide step
        $('#hide-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('hide', $('#stepid').val());
                });

        var $validator = $("#commentForm").validate({
rules: {
emailfield: {
required: true,
email: true,
minlength: 3
},
namefield: {
required: true,
minlength: 3
},
urlfield: {
required: true,
minlength: 3,
url: true
}
}

});

$('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'onNext': function(tab, navigation, index) {
        var $valid = $("#commentForm").valid();
        if(!$valid) {
        $validator.focusInvalid();
        return false;
        }
        }
        });
window.prettyPrint && prettyPrint()
    });
        </script>
        </body>
        </html>
