<style>
.card-container {  /* kontainer katalog */
    display: flex;
    
    background-color: #ebd5ff;
    background-position: flex;
    border-radius: 40px;
    margin-left: 20px;
    margin-right: 20px;
    
}

.card {  /* class untuk masing" card 1,2,dan3 */
    flex: 1;
    margin: 10px;
    padding-left: 20px;
    /* width: 300px;
    margin-bottom: 20px;
    margin-left: 40px;
    margin-top: 25px;
    margin-right: 40px; */

}



.card-img-top {     /* konten dari masing" card */
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 30px;
}

.card-body {    /* card untuk deskripsi masing" card */
    height: 250px;
    width: 300px;
    background-color: #0F1C2F;
    padding: 20px;
    border-radius: 30px;

}

.card-title {  /* teks nama produk katalog */
    font-size: 20px;
    margin-bottom: 10px;
    margin-left: 85px;
    color: aliceblue;
}

.card-text {  /* teks deskripsi dari konten masing" card */
    font-size: 12px;
    margin-bottom: 15px;
    color: aliceblue;
}

.list-group-item { /*  style teks untuk mendeskripsikan konten card*/
    background-color: transparent;
    border: #333;
    color: aliceblue;
    font-size: 14px;
    

    
}

/* .btn-primary {
    background-color: #007bff;
    border-color: #2e3843;
    text-decoration: none;
    list-style-type: none;
    
} */

/* .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
    
} */
    /* tombol sewa */
.tombol{
    background-color: #19bf00;
    width: 70px;
    border-radius: 20px;
    margin-left: 95px;
    margin-top: 0px;
}

.tombol:hover{
    background-color: #158e02;
}


.button-text {
text-decoration: none;
color: #ffffff;
margin-left: 15px;
margin-top: 30px;

}


.card-button {
height: 20px;
justify-content: center;
align-items: center;
list-style-type: none;
margin-left: 20px;
border: #fff;
text-decoration: none;
padding-top: 5px;
padding-left: 12px;

}

.btn .btn-primary {
   
   
}

.card-body2 {
    height: 250px;
    width: 300px;
    background-color: #0F1C2F;
    padding: 20px;
    border-radius: 30px;
    margin-left: 300px;

}

.card-img-top2 {
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 30px;
    margin-left: 300px;
}


.card-title2 {
    font-size: 20px;
    margin-bottom: 10px;
    margin-left: 85px;
    color: aliceblue;
}

.card-text2 {
    font-size: 12px;
    margin-bottom: 15px;
    color: aliceblue;
}
</style>

<div class="card" data-id="${room.id_kamar}">
    <a href="info_kamar.php?id_kamar=${room.id_kamar}&no_kamar=${encodeURIComponent(room.no_kamar)}&deskripsi=${encodeURIComponent(room.deskripsi)}&harga=${room.harga}&lokasi=${encodeURIComponent(room.lokasi)}&foto=${encodeURIComponent(room.foto)}">
        <img src="${room.foto}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">${room.no_kamar}</h5>
            <p class="card-text">${room.deskripsi}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Harga:</strong> ${room.harga}</li>
                <li class="list-group-item"><strong>Lokasi:</strong> ${room.lokasi}</li>
            </ul>
            <div class="tombol">
                <a href="payment.php?id_kamar=${room.id_kamar}&no_kamar=${encodeURIComponent(room.no_kamar)}&deskripsi=${encodeURIComponent(room.deskripsi)}&harga=${room.harga}&lokasi=${encodeURIComponent(room.lokasi)}&foto=${encodeURIComponent(room.foto)}" class="button-text">Sewa</a>
            </div>
        </div>
    </a>
</div>