let daynight = document.querySelector('.daynight')
let menutoggle = document.querySelector('.menutoggle')
let body = document.querySelector('body')
let navi = document.querySelector('.navi')


daynight.onclick = function(){
    body.classList.toggle('dark');
    daynight.classList.toggle('active');
    // console.log("all ok");
}
menutoggle.onclick = function(){
    menutoggle.classList.toggle('active');   
    navi.classList.toggle('active');   
    // console.log("all ok 2");
}


// ----------------------------------------------------------HOME
let number = document.getElementById("number");
let num = document.getElementById("number1");
let num1 = document.getElementById("number2");
let counter = 0;
let countr = 0;
let coun = 0;
setInterval(() => {
    if(counter == 70){
        clearInterval();
    }else{
        counter += 1;
        number.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;"+counter + "%"+ "<br> Hygiene";
    }
   
},30);
setInterval(() => {
    if(countr == 85){
        clearInterval();
    }else{
        countr += 1;
        num.innerHTML = "&nbsp;&nbsp;"+countr + "%" + " <br> Taste";
    }
},25);
setInterval(() => {
    if(coun == 70){
        clearInterval();
    }else{
        coun += 1;
        num1.innerHTML = "&nbsp;&nbsp;&nbsp;"+coun + "%" + " <br> Quality";
    }
},30);
// **********SEND EMAIL***********
function sendEmail(){
    Email.send({

        SecureToken : "434395d2-de26-426d-9f46-bcbb79382b65",
        Host : "smtp.gmail.com",
        // Username : "shreyanshcse202@gmail.com",
        // Password : "owargrizpqwmyuzd",
        To : "shreyanshsaagar77@gmail.com",
        From : document.getElementById("email").value,
        Subject : "New feedback from web",
        Body : "Name: " + document.getElementById("name").value + "<br> Email: " + document.getElementById("email").value +  "<br> Feedback: " + document.getElementById("message").value
    }).then(
      message => alert("ALL OK")
    );
}
// ********************************************
// POPUP
// ********************************************
const popup = document.querySelector('.popup');
const close = document.querySelector('.close');
window.onload = function(){
    setTimeout(function(){
        popup.style.display="block";
    },2000)
}
close.addEventListener('click',() =>{
    popup.style.display="none";
} 
)