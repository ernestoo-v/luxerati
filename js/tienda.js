let inputB = document.getElementById('search-input');

inputB.setAttribute('onkeyup', 'buscar()');

let card = document.getElementsByClassName('div-contenido');
let nameB = document.getElementsByClassName('car-name');

let marca = document.getElementsByClassName('search-car-marca');


function buscar() {

    for (let i = 0; i < card.length; i++) {
        if (nameB[i].textContent.toLowerCase().includes(inputB.value.toLowerCase())) {
            card[i].style.display = '';
        }
        else {
            card[i].style.display = 'none';
        }
    }
}
function buscar2() {

    for (let i = 0; i < card.length; i++) {
        let a = marca[i].textContent;
        let b = nameB[i].textContent;
        console.log(marca[i].textContent.trim());
        console.log(nameB[i].textContent.trim());

        console.log(b.includes(a))
        if (a.includes(b)) {
            card[i].style.display = '';
        }
        else {
            card[i].style.display = 'none';
        }
    }
}



// const coches = [
//     {
//         brand: "Bugatti",
//         name: "Bugatti Centodieci",
//         price: "$9 million",
//         topSpeed: "236 mph",
//         acceleration: "0-60 mph in 2.4 seconds",
//         horsepower: "1,600 hp",
//         torque: "1,180 lb-ft",
//         image: "https://i.imgur.com/fzSJxjW.jpg"
//     },
//     {
//         brand: "Bugatti",
//         name: "Bugatti Divo",
//         price: "$5.8 million",
//         topSpeed: "236 mph",
//         acceleration: "0-60 mph in 2.4 seconds",
//         horsepower: "1,500 hp",
//         torque: "1,180 lb-ft",
//         image: "https://i.imgur.com/37ljYlL.jpg"
//     },
//     {
//         brand: "Ferrari",
//         name: "Ferrari LaFerrari Aperta",
//         price: "$10 million",
//         topSpeed: "217 mph",
//         acceleration: "0-60 mph in less than 3 seconds",
//         horsepower: "950 hp",
//         torque: "664 lb-ft",
//         image: "https://i.imgur.com/v8SRMn6.jpg"
//     },
//     {
//         brand: "Ferrari",
//         name: "Ferrari Pininfarina Sergio",
//         price: "$3 million",
//         topSpeed: "221 mph",
//         acceleration: "0-60 mph in 3 seconds",
//         horsepower: "562 hp",
//         torque: "398 lb-ft",
//         image: "https://i.imgur.com/qA9JSRP.jpg"
//     },
//     {
//         brand: "Koenigsegg",
//         name: "Koenigsegg Jesko Absolut",
//         price: "$4.8 million",
//         topSpeed: "330 mph",
//         acceleration: "0-60 mph in 2.4 seconds",
//         horsepower: "1,600 hp",
//         torque: "1,106 lb-ft",
//         image: "https://i.imgur.com/3P4n0xv.jpg"
//     },
//     {
//         brand: "Koenigsegg",
//         name: "Koenigsegg CCXR Trevita",
//         price: "$4.8 million",
//         topSpeed: "254 mph",
//         acceleration: "0-60 mph in 2.9 seconds",
//         horsepower: "1,004 hp",
//         torque: "796 lb-ft",
//         image: "https://i.imgur.com/qi5DxCn.jpg"
//     },
//     {
//         brand: "Lamborghini",
//         name: "Lamborghini Veneno Roadster",
//         price: "$4.5 million",
//         topSpeed: "220 mph",
//         acceleration: "0-60 mph in 2.9 seconds",
//         horsepower: "740 hp",
//         torque: "507 lb-ft",
//         image: "https://i.imgur.com/8D7WQrp.jpg"
//     },
//     {
//         brand: "Lamborghini",
//         name: "Lamborghini Sian FKP 37",
//         price: "$3.6 million",
//         topSpeed: "217 mph",
//         acceleration: "0-60 mph in 2.8 seconds",
//         horsepower: "819 hp",
//         torque: "538 lb-ft",
//         image: "https://i.imgur"

//     },
//     {
//         brand: "McLaren",
//         name: "McLaren Speedtail",
//         price: "$3.5 million",
//         topSpeed: "250 mph",
//         acceleration: "0-60 mph in 2.5 seconds",
//         horsepower: "1,035 hp",
//         torque: "848 lb-ft",
//         image: "https://i.imgur.com/c92pUxo.jpg"
//     },
//     {
//         brand: "McLaren",
//         name: "McLaren P1 LM",
//         price: "$3.7 million",
//         topSpeed: "217 mph",
//         acceleration: "0-60 mph in 2.4 seconds",
//         horsepower: "1,000 hp",
//         torque: "774 lb-ft",
//         image: "https://i.imgur.com/pGnkVw1.jpg"
//     },
//     {
//         brand: "Pagani",
//         name: "Pagani Huayra Roadster BC",
//         price: "$3.5 million",
//         topSpeed: "238 mph",
//         acceleration: "0-60 mph in 2.5 seconds",
//         horsepower: "791 hp",
//         torque: "774 lb-ft",
//         image: "https://i.imgur.com/x2e7VgG.jpg"
//     },
//     {
//         brand: "Pagani",
//         name: "Pagani Huayra Imola",
//         price: "$5.4 million",
//         topSpeed: "230 mph",
//         acceleration: "0-60 mph in 2.4 seconds",
//         horsepower: "827 hp",
//         torque: "811 lb-ft",
//         image: "https://i.imgur.com/knS78jS.jpg"
//     },
//     {
//         brand: "Pininfarina",
//         name: "Pininfarina Battista",
//         price: "$2.5 million",
//         topSpeed: "217 mph",
//         acceleration: "0-60 mph in under 2 seconds",
//         horsepower: "1,900 hp",
//         torque: "1,696 lb-ft",
//         image: "https://i.imgur.com/7V2KtNv.jpg"
//     },
//     {
//         brand: "Pininfarina",
//         name: "Pininfarina Sergio",
//         price: "$3 million",
//         topSpeed: "221 mph",
//         acceleration: "0-60 mph in 3 seconds",
//         horsepower: "562 hp",
//         torque: "398 lb-ft",
//         image: "https://i.imgur.com/qA9JSRP.jpg"
//     },
//     {
//         brand: "Porsche",
//         name: "Porsche 918 Spyder",
//         price: "$1.7 million",
//         topSpeed: "214 mph",
//         acceleration: "0-60 mph in 2.2 seconds",
//         horsepower: "887 hp",
//         torque: "944 lb-ft",
//         image: "https://i.imgur.com/ZPQo8jK.jpg"
//     },
//     {
//         brand: "Porsche",
//         name: "Porsche Carrera GT",
//         price: "$1.5 million",
//         topSpeed: "205 mph",
//         acceleration: "0-60 mph in 3.5 seconds",
//         horsepower: "605 hp",
//         torque: "435 lb-ft",
//         image: "https://i.imgur.com/iXKuEZt.jpg"
//     },
//     {
//         brand: "Rolls-Royce",
//         name: "Rolls-Royce Sweptail",
//         price: "$13 million",
//         topSpeed: "150 mph",
//         acceleration: "0-60 mph in under 5 seconds",
//         horsepower: "453 hp",
//         torque: "361 lb-ft",
//         image: "https://i.imgur.com/K4FJ4lW.jpg"
//     },
//     {
//         brand: "Rolls-Royce",
//         name: "Rolls-Royce Phantom",
//         price: "$450,000",
//         topSpeed: "155 mph",
//         acceleration: "0-60 mph in 5.1 seconds",
//         horsepower: "563 hp",
//         torque: "664 lb-ft",
//         image: "https://i.imgur.com/QqV7X9O.jpg"
//     },
//     {
//         brand: "Tesla",
//         name: "Tesla Roadster",
//         price: "$250,000",
//         topSpeed: "250 mph",
//         acceleration: "0-60 mph in under 1.9 seconds",
//         horsepower: "10,000+ hp",
//         torque: "7,376 lb-ft",
//         image: "https://i.imgur.com/jE1n54T.jpg"
//     },
//     {
//         brand: "Tesla",
//         name: "Tesla Model S Plaid+",
//         price: "$149,990",
//         topSpeed: "200 mph",
//         acceleration: "0-60 mph in under 1.98 seconds",
//         horsepower: "1,100 hp",
//         torque: "1,050 lb-ft",
//         image: "https://i.imgur.com/vZpMjAp.jpg"
//     },
//     {
//         brand: "Zenvo",
//         name: "Zenvo TSRS",
//         price: "$2.8 million",
//         topSpeed: "236 mph",
//         acceleration: "0-60 mph in under 2.8 seconds",
//         horsepower: "1,177 hp",
//         torque: "811 lb-ft",
//         image: "https://i.imgur.com/HEG1J3v.jpg"
//     },
//     {
//         brand: "Zenvo",
//         name: "Zenvo TSR-S",
//         price: "$1.9 million",
//         topSpeed: "202 mph",
//         acceleration: "0-60 mph in under 2.8 seconds",
//         horsepower: "1,177 hp",
//         torque: "811 lb-ft",
//         image: "https://i.imgur.com/qaKGQbA.jpg"
//     }
// ]

// let div, div2, div3, p, div_coches, img;
// div_coches = document.getElementById('coches');

// for (elemento in coches) {
//     div = document.createElement('div');
//     /**********NAME*************/
//     div2 = document.createElement('div');
//     img = document.createElement('img');
//     img.src = 'Ftos/Tienda/2021 Bugatti Centodieci/2021 Bugatti Centodieci.jpg'


//     div.appendChild(img)
//     p = document.createElement('p');
//     p.textContent = coches[elemento]['name'];
//     p.setAttribute('class', 'name');
//     div.appendChild(p);

//     /**********Price*************/
//     div2 = document.createElement('div');

//     p = document.createElement('p');
//     p.textContent = 'Price: ';
//     div2.appendChild(p);

//     p = document.createElement('p');
//     p.textContent = coches[elemento]['price'];
//     div2.appendChild(p);

//     div.appendChild(div2);


//     /**********NAME*************/
//     div2 = document.createElement('div');

//     p = document.createElement('p');
//     p.textContent = 'topSpeed: ';
//     div2.appendChild(p);

//     p = document.createElement('p');
//     p.textContent = coches[elemento]['topSpeed'];
//     div2.appendChild(p);

//     div.appendChild(div2);

//     /**********Acceleration*************/
//     div2 = document.createElement('div');

//     p = document.createElement('p');
//     p.textContent = 'Acceleration: ';
//     div2.appendChild(p);

//     p = document.createElement('p');
//     p.textContent = coches[elemento]['acceleration'];
//     div2.appendChild(p);

//     div.appendChild(div2);


//     /**********Horsepower*************/
//     div2 = document.createElement('div');

//     p = document.createElement('p');
//     p.textContent = 'Horsepower: ';
//     div2.appendChild(p);

//     p = document.createElement('p');
//     p.textContent = coches[elemento]['horsepower'];
//     div2.appendChild(p);

//     div.appendChild(div2);


//     /**********Torque*************/
//     div2 = document.createElement('div');

//     p = document.createElement('p');
//     p.textContent = 'Torque: ';
//     div2.appendChild(p);

//     p = document.createElement('p');
//     p.textContent = coches[elemento]['torque'];
//     div2.appendChild(p);

//     div.appendChild(div2);




//     div.setAttribute('class', 'cocheid');
//     div_coches.appendChild(div);
//     console.log(div)
// }
