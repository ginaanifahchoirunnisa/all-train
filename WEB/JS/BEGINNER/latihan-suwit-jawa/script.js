function getPiihanComputer(){
    const comp = Math.random();


    if(comp < 0.34) return 'gajah';
    if (comp >= 0.34 && comp < 0.67) return 'orang';
    return 'semut';
}


function getHasil(comp, player){

    if( player == comp ) return 'SERI!'; 
    // if( player == 'gajah' && comp == 'orang') return 'menang' 
    // if( player == 'orang' && comp == 'semut') return 'menang'
    // if( player == 'semut' && comp == 'gajah') return 'menang'

    //KETIKA PLAYER PILIH GAJAH , MAKA KEMBALIKAN : (LIAT DULU COMP NYA MEMILIH APA, MISAL COMP MEMILIH ORANG , MAKA MENANG, SELAIN ITU MAKA KALAH)
    if( player == 'gajah' ) return (comp == 'orang') ? 'MENANG' : 'KALAH';
    if( player == 'orang' ) return (comp == 'gajah') ? 'KALAH' : 'MENANG';
    if( player == 'semut' ) return (comp == 'orang') ? 'KALAH' : 'MENANG';
}


//MENJALANKAN LISTENER
//ketika player meng klik gajah (jempol)
const info = document.querySelector('.info');
const imgComputer = document.querySelector('.img-computer');
const pGajah = document.querySelector('.gajah');
pGajah.addEventListener('click', function(){
    //kita ambil pilihan komputer
    const pilihanKomputer = getPiihanComputer();
    const pilihanPlayer = pGajah.className;

    const hasil = getHasil(pilihanKomputer, pilihanPlayer);
    imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
    info.innerHTML = '<h5>'+hasil+'</h5>';

    
  
    console.log("computer : " + pilihanKomputer);
    console.log("player : " + pilihanPlayer);
    console.log(hasil);

    // alert("ANDA "+ hasil);
});


const pOrang = document.querySelector('.orang');
pOrang.addEventListener('click', function(){
    //kita ambil pilihan komputer
    const pilihanKomputer = getPiihanComputer();
    const pilihanPlayer = pOrang.className;

    const hasil = getHasil(pilihanKomputer, pilihanPlayer);
    imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
    info.innerHTML = '<h5>'+hasil+'</h5>';
    
    console.log("computer : " + pilihanKomputer);
    console.log("player : " + pilihanPlayer);
    console.log(hasil);

    // alert("ANDA "+ hasil);
});



const pSemut = document.querySelector('.semut');
pSemut.addEventListener('click', function(){
    //kita ambil pilihan komputer
    const pilihanKomputer = getPiihanComputer();
    const pilihanPlayer = pSemut.className;

    const hasil = getHasil(pilihanKomputer, pilihanPlayer);
    //set gambar komputer nya 
    imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
    info.innerHTML = '<h5>'+hasil+'</h5>';
    console.log("computer : " + pilihanKomputer);
    console.log("player : " + pilihanPlayer);
    console.log(hasil);

    // alert("ANDA "+ hasil);
});