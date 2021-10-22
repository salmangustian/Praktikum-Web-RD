function vibe(){
    let pilihmood = document.getElementById("pilihmood");    
    let val = pilihmood.options[pilihmood.selectedIndex].value;
    let desc = document.getElementById("desc");

    if (val == "Senang"){
        desc.innerText =  "YOLO!";}
    else if (val == "marah"){
        desc.innerText =  "Yooo Chill!";}
    else{
        desc.innerText =  "Keep Your Head Up!";
    }
};

function theme(){
    let pilihtema = document.getElementById('pilihtema');
    let val = pilihtema.options[pilihtema.selectedIndex].value;
    let element = document.body;

    if(val == 'light'){
        element.classList.remove("dark");}
    else{
        element.classList.toggle("dark");       
    }
};

function count(){
    let Numbers = document.getElementById('Numbers').value;    
    let hasilfaktor = document.getElementById('hasilfaktor');    
    let hitung = Numbers;
    for(i = hitung-1; i>1 ; i--){
        hitung*=i;
    };
    
    hasilfaktor.innerText = "Hasil dari faktorial " + Numbers + " adalah " + hitung;
};