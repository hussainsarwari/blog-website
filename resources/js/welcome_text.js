let setcookie=(name,value,days)=>{
    var exp="";
    if(days){
        var date=new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        exp="; Expires+"+date.toUTCString();
    }
    document.cookie=name +"=" +(value||"")+exp+"; path=/";
}
let getcookie=(name)=>{
    let nameE=name+"=";
    let c=document.cookie.split(";");
    for (let i = 0; i < c.length; i++) {
       let ca=c[i];
       while (ca.charAt(0)==" ") ca=ca.substring(1,ca.length);
       if (ca.indexOf(nameE)==0) {
        return ca.substring(name.length,ca.length)
       }
        
    }
    return null;

}

setcookie('random',Math.floor(Math.random()* (100-1+1)+1),30);
let welcomeText=document.querySelector("#welcome_text");
if (!getcookie('visited')) {
    // no cookies
    welcomeText.innerText='Hey, Nice to meet you <br> welcome to your website';
    setcookie("visited",true,365);
}else{
    welcomeText.innerText='i am happpy to see you again!';
    console.log(welcomeText);

}