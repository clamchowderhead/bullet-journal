function createBullet(bulletText, bulletType, bulletPriority, bulletDate){
    this.bulletText= bulletText;
    this.bulletType= bulletType;
    this.bulletPriority= bulletPriority;
    this.bulletDate= bulletDate;
} 
// Creates a bullet object constructor

var bulletArray=[];

document.getElementById(/* id for submit button element on bulletjournaladdbull.html*/).onClick()= function(){
    var text= document.getElementByName("newbullet");
    var type=document.getElementByName(/* name of bullet type on bulletjournaladdbull.html*/);
    var priority=document.getElementByName( /* name of bullet type on bulletjournaladdbull.html*/);
    var date=document.getElementByName("newbulletdate");
    var bullet= createBullet((text, type, priority, date));
    var day = date.val().split('-')[2];
    var month= date.val().split('-')[1];
    (document.getElementById(day).lastChild().appendChild(bullet));/* have to label tr elements with ids from 1-31*/
    document.getElementById(/*need to make div in bulletjournalday.html & place id here*/).appendChild(bullet);
    
// Gets input values for each input and create the bullet object. Then, write the bullet to the monthly view and daily view. 
    
    
document.getElementById(/* id for remove elements*/).onClick= function(){
    document.getElementById(day).lastChild().replaceChild(this, '');
    document.getElementById(/*need to make div in bulletjournalday.html & place id here*/).replaceChild(this,'');
    
}
// If the remove is clicked, remove from the monthly view and daily view