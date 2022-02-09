var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        albums: [],
    },
    created() {
        // ho dovuto resettare le porte su mamp, all'inizio non trovava le api ma facendo vari tentatiti il problema era la cartella "boolean" di troppo nel percorso 
        axios.get('http://localhost:8888/php-ajax-dischi/server/controller-api.php').then((result) => {
            console.log(result.data.result);
            this.albums = result.data.result;
        }).catch((error) => { console.log(error); });
    }
})