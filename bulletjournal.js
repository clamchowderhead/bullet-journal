function createBullet(bulletText, bulletType, bulletPriority, bulletDate){
    this.bulletText= bulletText;
    this.bulletType= bulletType;
    this.bulletPriority= bulletPriority;
    this.bulletDate= bulletDate;
} 
// Creates a bullet object constructor

var bulletArray=[];

document.getElementById('bullsub').onClick()= function(){
    var text= document.getElementByName("newbullet");
    var type=document.getElementByName('bulltype');
    var priority=document.getElementByName('bullpri');
    var date=document.getElementByName("newbulletdate");
    var bullet= createBullet((text, type, priority, date));
    var day = date.val().split('-')[2];
    var month= date.val().split('-')[1];
    (document.getElementById(day).lastChild().appendChild(priority + ' ' + type + '  ' + text + '<br/>'));
    document.getElementById('content').appendChild(date + '<br/>' + priority + ' ' + type + '  ' + text + '<br/>');
    
    // Post to the server - TBD
    alert("Created a bullet for " + date);
}
// Gets input values for each input and create the bullet object. Then, write the bullet to the monthly view and daily view. 
    
    
document.getElementById(/* id for remove elements*/).onClick= function(){
    document.getElementById(day).lastChild().replaceChild(this, '');
    document.getElementById('content').replaceChild(this,'');
    
}
// If the remove is clicked, remove from the monthly view and daily view