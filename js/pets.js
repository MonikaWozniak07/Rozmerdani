// menu toggler
// const menuToggler = document.querySelector(".menu-toggler");
// const mainMenu = document.querySelector(".main");
// menuToggler.addEventListener("click", () => {
//     menuToggler.classList.toggle("open");
//     mainMenu.classList.toggle("open");
// });

/*
- todać tutaj z app.js otwieranie sie menu
- przepisac ponizszy kod tak aby nie dodawal zdjec i tekstu do juz istniejacego div'a, a zrobic zeby znalazl diva z klasa "pets" i wrzucil tam calosc kodu samodzielnie jako pattern
*/


const fetchRozmerdani = ("../pets.json");

fetch(fetchRozmerdani).then(function(response){
    return response.json()
}).then(function(res){
    // console.log(res)
    let limit = 20;
    let nums=[]
    for(let i=0;i<limit;i++){
        nums.push(i)
        document.querySelector(`.rozmerdany-container:nth-of-type(${nums[i]+1})`).innerHTML = `<div class="person_img rozmerdany_img"><img src=${res.rozmerdani[nums[i]].img}></div><div class="person_text rozmerdany_text">
        <h2>${res.rozmerdani[nums[i]].name}</h2>
        <p>${res.rozmerdani[nums[i]].opis}</p>
        </div>` 
    }

})

