const fetchRozmerdani = ("./galeria.json");

fetch(fetchRozmerdani).then(function(response){
    return response.json()
}).then(function(res){
    // console.log(res)
    let limit = 10;
    let nums=[]
    for(let i=0;i<limit;i++){
        nums.push(i)
        document.querySelector(`.rozmerdany-container:nth-of-type(${nums[i]+1})`).innerHTML = `<div class="person_img rozmerdany_img"><img src=${res.rozmerdani[nums[i]].img}></div><div class="person_text rozmerdany_text">
        <h2>${res.rozmerdani[nums[i]].name}</h2>
        <p>${res.rozmerdani[nums[i]].opis}</p>
        </div>` 
    }

})

