# Steps Migration

## 1. creare il database con cui interagire 
- (sia da terminale con MySql oppure con PHPMyAdmin)
  
```SQL
/* avviare shell mysql */
mysql -u root -p (-P 3366)

/* creare database */
CREATE DATABASE `nomedatabase`

/* uscire da shell mysql */
EXIT
```  

## 2. collegare l'applicazione con il database
- accedere al file .env
- modificare nome database e controllare che ci sia una key
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= /*nome database*/
DB_USERNAME=root
DB_PASSWORD=root
```

## 3. creare il file di migrazione
- da terminale
``` bash
php artisan make:migration create_nome-migrazione_table
```

## 4. inserire i dati che voglio inserire nelle colonne
- nel file migration appena creato
``` php
Schema::create('vacanze', function (Blueprint $table) {
    $table->id();
    $table->string('nome-colonna');
    $table->timestamps();
});
```

## 5. effettuare la migrazione
- da terminale
``` bash
php artisan migrate
```

- rimuovere le tabelle
``` bash
php artisan migrate:rollback
```

## 6. aggiungere dati con tinker
``` bash
php artisan tinker

$singolo = new App\Model
$singolo->colonna = valore
$singolo->save()
```