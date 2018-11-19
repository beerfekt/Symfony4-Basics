//alert('test: js loaded');


const articles = document.getElementById('articles');


if (articles) {
    articles.addEventListener(
        'click',
        e => {
            //prüfen dass genau ein button des typs delete getriggert wird:
            if ( e.target.className === 'btn btn-danger delete-article') {

                //Popup : soll es wirklich gelöscht werden?
                if (confirm('are you sure? ')) {
                    //id aus doom auslesen:
                    const id = e.target.getAttribute('data-id');

                    console.log(id);
                    //erstellt route aus der anfrage die controller aufruft ...
                    fetch(`/article/delete/${id}`, { //wichtig: schräge(!!) anführungsstricke damit {$id} richtig gerendert wird
                        //ruft in @annotation im Article-controller definierte Methode auf:
                        method: 'DELETE'
                        //... wenn dies gelingt wird man zurückgeleitet
                    }).then(res => window.location.reload());

                }
            }
            //alert('test2: click works');
        }
    );
}

