
fetch("http://127.0.0.1:8000/breukh-api/niveaux?join=classes",{
    method:'GET',
    headers:{
        "Accept":'Application/json'
    }
})
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })


// function chargerClasses(params) {
    
// }