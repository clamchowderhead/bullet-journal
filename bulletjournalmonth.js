var bullet1= {'text': 'Do homework', 'type': '>', 'priority': '!', 'date': '2017-10-01'}; // Mock JSON response from server


document.getElementById('1').innerHTML=(bullet1.priority + ' ' + bullet1.type + '  ' + bullet1.text + '<br/>');
    
    

// Gets input values for each input and create the bullet object. Then, write the bullet to the monthly view and daily view. 
    
    
/*document.getElementById('remove').addEventListener("click", function(){
    document.getElementById(day).lastChild().replaceChild(this, '');
    document.getElementById('content').replaceChild(this,'');
    
});
// If the remove is clicked, remove from the monthly view and daily view
*/