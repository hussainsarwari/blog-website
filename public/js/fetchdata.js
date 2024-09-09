let submitbtn=document.querySelector("#callAPI");
submitbtn.addEventListener('click',e=>{
   
    let email=document.querySelector('#email').value;
    fetch('http://127.0.0.1:8000/api/api/'+email+'', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data[0]!=undefined) {// check database has data or not 
            let arr=Object.entries(data[0])
            for(let i=1;i<=7;i++){
                
                sessionStorage.setItem(arr[i][0],arr[i][1])//save data to session storage
          }}
        if (data[1]!=undefined) {
            let arr=Object.entries(data[1])
            for(let i=1;i<=8;i++){
                
                sessionStorage.setItem(arr[i][0],arr[i][1])
          }}
          
    document.querySelector("#loginform").submit();
    })
    .catch(error => console.error('Error:', error));


    
})