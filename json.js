//Json object
let item = {
    name: "Bar of soap",
    price: "200 TZS",
    color: "brown"
};

//Accesing item's name
item.name;
item["name"];
//Accessing items's color
item.color;
item['color'];




let items = [
    {
        name: "Bar of soap",
        price: "200 TZS",
        color: "brown"
    } ,
    {
        name: "Bar of soap",
        price: "200 TZS",
        color: "brown"
    } ,
    {
        name: "Bar of soap",
        price: "200 TZS",
        color: "brown"
    }    
];

//Accessing the first item
items[0];
//Accessing third item's price
items[2].price;
items[2]['price']
items[2]["price"]