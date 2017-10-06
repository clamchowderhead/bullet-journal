function createBullet(bulletText, bulletType, bulletPriority, bulletDate){
    this.bulletText= bulletText;
    this.bulletType= bulletType;
    this.bulletPriority= bulletPriority;
    this.bulletDate= bulletDate;
} 
// Creates a bullet object constructor

var bulletArray=[];

document.getElementById('bullsub').addEventListener("click", function(event) {
    
    event.preventDefault();
    var text= document.getElementById("newbull").value;
    var type=document.getElementById('bulltype');
    var typeContent = type.options[type.selectedIndex].value;
    var priority=document.getElementById('bullpri');
    var priorityContent = priority.options[priority.selectedIndex].value;
    var date=document.getElementById("newbulldate").value;
    var bullet= new createBullet(text, typeContent, priorityContent, date);
    /*var day = date.val().split('-')[2];
    var month= date.val().split('-')[1];
    (document.getElementById(day).lastChild().appendChild(priority + ' ' + type + '  ' + text + '<br/>'));
    document.getElementById('content').appendChild(date + '<br/>' + priority + ' ' + type + '  ' + text + '<br/>');*/
    
    // Post to the server - TBD
    return false;
});
// Gets input values for each input and create the bullet object. Then, write the bullet to the monthly view and daily view. 
    
    
/*document.getElementById('remove').addEventListener("click", function(){
    document.getElementById(day).lastChild().replaceChild(this, '');
    document.getElementById('content').replaceChild(this,'');
    
});
// If the remove is clicked, remove from the monthly view and daily view
*/