## Projekt létrehozása
1. Visual Studio Code rendszergazda módban
2. composer create-project laravel/laravel ProjektNeve

__Projekt megnyitása újra - csak a laravel__

3. Db rész kiszedése kommentől az env. fájlban + adatbázis név megadása + adatbázis típus átírása

## Model
1. Model létrehozása: php artisan make:model ModelName (egyes szám és angol) --all -> 8 db osztály
    * Az osztályok a ModelName kezelésére szolgálnak és biztonságért
    *Osztályok:
        * Model -
        * Factory - 
        * Migration -
        * Seeder - 
        * 2 Request - új adat felvétele frissírésére való engedély
        * Contorller
        * Policy - különböző felhasználók mi alapján csinálhatnak dolgokat, vannak alap szabályok

## Factory
* 
## Migration
* Jobs - mi tanulmányaink során nem
* Autentikációs rendszernek kell: user és cache 
1. Tábla elkészítése
    *softDelete() -> Deleted_at oszlopot hoz létre, így nem törlődik teljesen az adat
2. Táblák elküldése 
    * új: php artisan migrate - megcsinálja db, ha nincs
    * frissítés: php artisan migrate:fresh --seed

## Seeder
* Meghívjuk az osztályokat

## Controller
*Index funkcionalitás - összes resource kilistázása
*Create - új sor, erőforrás felvétele
* Store - bármilyen funkció álltal elküldött adatokat elmentse
* Show - egy erőforrás adatait továbbítja
* Edit - meglévő könyv szerkesztése, param-ba ott vannak a módosítandó adatok
* Update - egy erőforrás frissítése
* Destroy - tötöljön egy erőforrást a helyéről, ha nem adjuk meg a modelnek a softDelete részt, akkor nem használja -> ModelName modelje -> use SoftDeletes

## Routes
* Webapp címét ha beírja, hova navigálja az oldal
* 


return view("books.index", ["books" => "books"]) - books néven átadjuk az összes nevet
 * Itt még csak egy tömb

CSS
* public -> css -> style.css


elérések:
Adott kontrollerbe kimentjük az adatokat ->ö,m, meghívjuk az adott index fájlba a kontroller osztáylt 

NévRequest.php 
fuction rules - validálás
fuctin authorize - profil létrehozásakor fontos

