$(document).ready(function(){
    var maxField = 3; 
    var addButton = $('.add_button'); 
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="minus.png"/></a></div>'; //New input field html


    var x = 1; //Initial field counter is 1

//function to add a field
    $(addButton).click(function(){ 
        if(x < maxField){ //Check maximum number of input fields
            x++; 
            $(wrapper).append(fieldHTML);
        }
    });


//function to remove a field
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); 
        x--; //Decrement field counter
    });
});
