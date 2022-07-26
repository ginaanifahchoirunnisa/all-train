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


function putarPilihanComputer(){
    const imgComputer = document.querySelector('.img-computer');
    const gambar = ['gajah','semut','orang'];

    let i = 0;
    //waktu awal 
    //DIMANA SAAT FUNGSI PUTAR DIPANGGIL , MAKA AKAN MENGAMBIL WAKTU SAAT ITU , UNTUK MENDAPATKAN WAKT USAAT ITU
    const waktuMulai = new Date().getTime();

    setInterval(function(){
        //apakah sudah 1 second
        //APABILA WAKTU NYA SELISIH NYA SUDAH 1 DETIK (1000ms)
        if(new Date().getTime()-waktuMulai>1000)
        {
            clearInterval; //maka berhentikan 
            return;
        }

        imgComputer.setAttribute('src','img/'+ gambar[i++] +'.png');
        if(i == gambar.length) i=0;
    },100)
}




//ambil semua element dihalaman(menhasilkan node list)
const choosen = document.querySelectorAll('li img');
//LOOPING TIAP IMAGE
//UNTUK SETIAP IMAGE YANG ADA PADA LIST CHOOSEN , JALANKAN FUNCTION BERIKUT
//PILIHAN , DIGUNAKAN UNTUK PASSING DARI IMAGE YANG ADA DIDALAM LIST
choosen.forEach(function(pilihan){
    //UNTUK GAMBAR YANG DI KLIK
    pilihan.addEventListener('click',function(){
        // console.log(pilihan);
        
    const pilihanKomputer = getPiihanComputer();
    const pilihanPlayer = pilihan.className;

    const hasil = getHasil(pilihanKomputer, pilihanPlayer);
    const info = document.querySelector('.info');

    putarPilihanComputer();
    //MENUNGGU SELAMA SATU DETIK, LALU JALANKAN FUNCTION BERIKUT (NUNGGU MEMUTAR DULU)
    setTimeout(function() {
        const imgComputer = document.querySelector('.img-computer');
        imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
        info.innerHTML = '<h5>'+hasil+'</h5>';
    },1000);


    const imgComputer = document.querySelector('.img-computer');
    imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
    info.innerHTML = '<h5>'+hasil+'</h5>';

    
    })
 
})




// //MENJALANKAN LISTENER
// //ketika player meng klik gajah (jempol)
// const info = document.querySelector('.info');
// const imgComputer = document.querySelector('.img-computer');
// const pGajah = document.querySelector('.gajah');
// pGajah.addEventListener('click', function(){
//     //kita ambil pilihan komputer
//     const pilihanKomputer = getPiihanComputer();
//     const pilihanPlayer = pGajah.className;

//     const hasil = getHasil(pilihanKomputer, pilihanPlayer);
//     imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
//     info.innerHTML = '<h5>'+hasil+'</h5>';

    
  
//     console.log("computer : " + pilihanKomputer);
//     console.log("player : " + pilihanPlayer);
//     console.log(hasil);

//     // alert("ANDA "+ hasil);
// });


// const pOrang = document.querySelector('.orang');
// pOrang.addEventListener('click', function(){
//     //kita ambil pilihan komputer
//     const pilihanKomputer = getPiihanComputer();
//     const pilihanPlayer = pOrang.className;

//     const hasil = getHasil(pilihanKomputer, pilihanPlayer);
//     imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
//     info.innerHTML = '<h5>'+hasil+'</h5>';
    
//     console.log("computer : " + pilihanKomputer);
//     console.log("player : " + pilihanPlayer);
//     console.log(hasil);

//     // alert("ANDA "+ hasil);
// });



// const pSemut = document.querySelector('.semut');
// pSemut.addEventListener('click', function(){
//     //kita ambil pilihan komputer
//     const pilihanKomputer = getPiihanComputer();
//     const pilihanPlayer = pSemut.className;

//     const hasil = getHasil(pilihanKomputer, pilihanPlayer);
//     //set gambar komputer nya 
//     imgComputer.setAttribute('src','img/'+pilihanKomputer+'.png'); //kebetulan nama fiel nya sesuai
//     info.innerHTML = '<h5>'+hasil+'</h5>';
//     console.log("computer : " + pilihanKomputer);
//     console.log("player : " + pilihanPlayer);
//     console.log(hasil);

//     // alert("ANDA "+ hasil);
// });