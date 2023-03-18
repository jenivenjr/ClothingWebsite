let featuredProds = document.getElementById("featured-prod")
let newProds = document.getElementById("new-prod")
let featuredProdItemsData = [{
    id: "111",
    brand:"Jeni Cloth",
    name: "Cartoon Pattern Shirt",
    img: "images/products/f1.jpg",
    price: 460
},
{
    id: "112",
    brand:"Huz Cloth",
    name: "Floral Shirt",
    img: "images/products/f2.jpg",
    price: 475
},
{
    id: "113",
    brand:"Adnaan Cloth",
    name: "Floral Shirt",
    img: "images/products/f2.jpg",
    price: 425
},
];

let basket=[{
    id:"dfd",
    item:1
}];

let newProdsItemData =[{
    id: "111",
    brand:"Kathrada Clothing",
    name: "Cartoon Pattern Shirt",
    img: "images/products/n1.jpg",
    price: 460
},
{
    id: "112",
    brand:"Kathrada Clothing",
    name: "Cartoon Pattern Shirt",
    img: "images/products/n2.jpg",
    price: 460
},
{
    id: "111",
    brand:"Kathrada Clothing",
    name: "Cartoon Pattern Shirt",
    img: "images/products/n4.jpg",
    price: 460

},
{
    id: "111",
    brand:"Kathrada Clothing",
    name: "Cartoon Pattern Shirt",
    img: "images/products/n3.jpg",
    price: 460

}]

let generateFeaturedProds =()=>{
    return (featuredProds.innerHTML= featuredProdItemsData.map((x)=>{
        let{id,brand,name,img,price}=x;
        return `<div id="prod-id${id}" class="product">
                <img src="${img}" alt="">
                <div class="desc">
                    <span>${brand}</span>
                    <h5>${name}</h5>
                    <h4>${price}</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
            </div>`
    }).join(""));
};

let generateNewArrivals =()=>{
    return (newProds.innerHTML= newProdsItemData.map((x)=>{
        let{id,brand,name,img,price}=x;
        return `<div id="prod-id${id}" class="product">
                <img src="${img}" alt="">
                <div class="desc">
                    <span>${brand}</span>
                    <h5>${name}</h5>
                    <h4>${price}</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
            </div>`
    }).join(""))
};

generateFeaturedProds();
generateNewArrivals();