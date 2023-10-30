let url ='https://sayc2023.000webhostapp.com/api.php?id=GetDiaUno';
let request = new Request(url, {headers:{"Content-Type": "application/json"}})

fetch(request)
    .then((response) => {return response.json()})
    .then((data) => console.log(data))