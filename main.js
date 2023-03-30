const cartBtn = document.querySelector(".cart-btn")

const plus = document.querySelector(".plus");
minus = document.querySelector(".minus");
num = document.querySelector(".prod-qty").value;

plus.addEventListener("click",()=>{
    document.querySelector(".prod-qty").value++;

});

minus.addEventListener("click",()=>{
    if(document.querySelector(".prod-qty").value>1){
        document.querySelector(".prod-qty").value--;
    }
})

cartBtn.addEventListener("click",()=>{
    num = document.querySelector(".prod-qty").value;
    document.querySelector(".cartAmount").innerHTML = num;
})

//cart
var removeCartItemsBtn = document.getElementsByClassName("btn-danger")
console.log(removeCartItemsBtn);

for(var i = 0; i<removeCartItemsBtn;i++){
    var button =removeCartItemsBtn[i]
    button.addEventListener("click",()=>{
        console.log("clicked");
    })
}