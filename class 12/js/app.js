

let addTextButton=document.getElementById("addText");

addTextButton.addEventListener("click",function(){
    let main=document.getElementById("main");
    let tagName=document.createElement("h2");
    tagName.innerHTML="Text Added";
    main.appendChild(tagName);
}
)


let number=document.getElementById('number')

number.addEventListener("keyup",function(){
    console.log(number.value)
})

let num1=document.getElementById('num1');
let num2=document.getElementById('num2');
let num3=document.getElementById('num3');

num1.addEventListener("keyup",function()
{
    if(num1.value!='' && num2.value!='')
        num3.value=Number(num1.value)+Number(num2.value)
})

num2.addEventListener("keyup",function()
{
    if(num1.value!='' && num2.value!='')
        num3.value=Number(num1.value)+Number(num2.value)
})

let calbutton=document.getElementById('calbutton')
let caltable=document.getElementById('caltable')
let calnumber=document.getElementById('calnumber')

calbutton.addEventListener("click",function(){
    let n1=Number(calnumber.value)
    for (let i = 1; i < 11; i++) {
        let tagName=document.createElement("h2");
        tagName.innerHTML=""+n1+" *"+i+" " +"= "+(i*n1);
        caltable.appendChild(tagName);
      }
    
}
)