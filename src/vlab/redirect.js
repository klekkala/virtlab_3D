$('document').ready(function(){
$('#button').click(function(){

jQuery.post("process.php", {
actionfield:actionfield,
outcomefield: outcomefield,
stepfield:stepfield,
descfield:descfield,
field_name:field_name
}
});
});
