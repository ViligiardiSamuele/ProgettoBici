# Presentazione progetto

#### Questo progetto consente di organizzare delle gare ciclistiche amministrate da più utenti dove ogni partecipante potrà visualizzare le proprie statistiche.

![Diagramma ER Database](READMEimgs/diagramma-er.png 'Diagramma ER')

# Tecnologie utilizzate

Il sito web sarà sviluppato in [PHP](https://www.php.net/) in [MVC](https://it.wikipedia.org/wiki/Model-view-controller) con l’utilizzo di molteplici framework / tecnologie:
-	[Bootstrap](https://getbootstrap.com/): Per la creazione della GUI
-	[Mustache](https://github.com/bobthecow/mustache.php/wiki): Per la creazione dei template / partials in html
-	[Slim / PSR7](https://www.slimframework.com/): Per lo sviluppo secondo il modello MVC
-	[MySQL](https://www.mysql.com/): Per l’hosting del Database
-	[Apache Web Server](https://httpd.apache.org/): Per l’hosting del sito web, con un engine di PHP
-	[Git](https://git-scm.com/): per gestire il versioning dell’app su [GitHub](https://github.com/)

Il sito sarà strutturato in molteplici pagine composte dinamicamente grazie ad un Template Engine rispettando una struttura [Model View Controller](https://it.wikipedia.org/wiki/Model-view-controller).

Sarà necessaria una registrazione per poter organizzare gare o parteciparvi e vi saranno richiesti il minimo dei dati possibili (cognome, nome, e-mail e password).
L’organizzatore di una gara potrà elevare altri utenti al ruolo di organizzatore per poter condividere la gestione della gara e quindi facilitarne l’amministrazione.

Sarà possibile visualizzare le statistiche del proprio account, infatti, gli utenti avranno a disposizione una dashboard con delle statistiche generali, sarà possibile filtrare le statistiche relative ad una singola gara.

## Avvio
`composer update` per generare la directory vendor.

## Crediti
L’idea, la progettazione, lo sviluppo ed il mantenimento del progetto sono a curati da Viligiardi Samuele.