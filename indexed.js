<html>
<head>
<title>Garantia</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    

<script>

const DB_NAME = "Garantia-indexeddb";
const DB_VERSION = 3;
const DB_STORE_NAME = "Garantia";

var db;
var current_view_pub_key;

function openDb() {
	console.log("openDb: abrindo banco...");
	var request = window.indexedDB.open(DB_NAME, DB_VERSION); //So cria o banco

	request.onsuccess = function (event) {
	db = this.result;
	console.log("openDb done");
	};
	
	request.onerror = function(event) {
		console.error("openDb:", evt.target.errorCode);
	};
	
	request.onupgradeneeded = function(event){
		console.log("openDb.onupgradeneeded");
		var store = evt.currentTarget.result.createObjectStore(
			DB_STORE_NAME, {keyPath: 'id', autoIncrement: true});
		
		store.createIndex('id' , 'id' , { unique: true});
		store.createIndex('produto' , 'produto' , { unique: false});
		store.createIndex('loja' , 'loja' , { unique: false});
		store.createIndex('garantiaLoja' , 'garantiaLoja' , { unique: false});
	};
	
	function getObjectName(store_name, mode) {
		var tx = db.transaction(store_name, mode);
		return tx.objectStore(store_name);		
	}
}

request.onupgradeneeded = function (event) {
	console.log
}

</script>
