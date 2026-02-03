# Backend
## API
### Miért van szükség API-kra a modern fejlesztésben
Az API-k (Application Programming Interface) arra szolgálnak, hogy különböző rendszerek szabványos módon kommunikáljanak egymással.
A modern alkalmazások ritkán egyetlen nagy rendszerként működnek — általában modulokra, szervizekre és rétegekre bontjuk őket.
### Mit old meg az, ha különválasztjuk a frontendet és backendet
* __Önálló fejlesztés__: frontend csapat és backend csapat párhuzamosan dolgozhat.
* __Többféle kliens__ használhatja ugyanazt a backend API-t: mobil appok, web appok, külső partnerek.
* __Skálázhatóság__: külön skálázható a szerver és a kliens.
* __Biztonság__: backend küld adatot csak ellenőrzött, szűrt formában.

Ez része a kliens–szerver architektúrák és a mikroszolgáltatások fejlődésének, szemben a monolit rendszerekkel.
### Mit jelent az API
Interfész, amelyen keresztül egy szoftver szolgáltatásokat vagy adatokat biztosít más szoftvereknek.
#### Típusai
* __Web API__ – HTTP-n keresztül (REST, GraphQL, SOAP stb.)
    * Különböznek a hagyományos függvényhívásos API-tól:
        * hálózaton át kommunikál,
        * JSON/HTTP protokollt használ,
        * kliens–szerver kapcsolatban működik, nem közös memórián.
* __Library API__ – könyvtárak által biztosított függvények
* __OS API__ – operációs rendszer szolgáltatásai
* __Hardware API__ – pl. GPU API-k (OpenGL, Vulkan)
### API-alapú fejlesztés előnyei
* Modularitás - egymástól független részek
* Újrahasznosíthatóság
* Integrálhatóság más rendszerekkel
* Független fejlesztés és skálázás
Swagger, OpenAPI szerepe:
* dokumentálja az API-t,
* generálható belőle klienskód, szerverkód, tesztkészlet,
* segít csapaton belüli együttműködésben.

### API biztonság
* HTTPS kötelező
* API kulcsok, tokenek
* JWT
* OAuth2
* Authorization (RBAC, ABAC)
* Rate limiting
* Input validáció, sanitization

### API-k tezstelése
* __Postman, Insomnia__ – kézi teszt
* __curl__ – parancssoros teszt
* __Integrációs tesztek__
* __Unit tesztek__ a logikára

## MVC architektúra
Az MVC három rétegre bontja az alkalmazást:
* __Model:__ Adatok, adatkezelés, üzleti logika
* __View:__ Megjelenítés (UI)
* __Controller:__ Kérések fogadása, Model/Views közötti szervezés
### Hogyan segít
* tisztább kód
* jobb tesztelhetőség
* könnyebb karbantartás

### Tipikus hibák
* üzleti logika Controllerbe vagy View-ba kerül
* túlságosan vastag Controller
* modellek túl sok feladatot kapnak (God Object)

### MVC + API
API-s rendszereknél a Controller kezeli a REST végpontokat, a Model adja az adatokat, és nincs klasszikus „View”, helyette JSON kimenet van.

## REST alapelvei
REST (Representational State Transfer) = architekturális stílus web API-khoz
### Fő elvek:
* Stateless – a szerver nem tárol kliensállapotot
* Resource-based – az URL erőforrásokra mutat
    * pl. /users/1
* Uniform interface – szabványos HTTP műveletek
* Cacheable – válaszok gyorsítótárazhatók
* Layered system

### HTTP metódusok REST-ben:
* GET – lekérés
* POST – létrehozás
* PUT – teljes módosítás
* PATCH – részleges módosítás
* DELETE – törlés
### Választípusok:
* JSON
    * Ez lett a standard mert: 
        * Könnyű
        * Gyors
        * Ember számára érthető
        * Minden nyelv natívan kezeli - szinte minden modern programozási nyelvben van beépített (vagy alapszinten elérhető) támogatás a JSON olvasására és írására – külön telepítés, külső könyvtár vagy bonyolult megoldások nélkül.
* XML
* Protobuf(kevésbbé REST-es)

### REST vs GraphQL vs SOAP
* REST – erőforrás-alapú, HTTP metódusokkal
* GraphQL – a kliens határozza meg, milyen mezőket kér
* SOAP – XML-alapú, nagyon formális, vállalati környezetben régebbi szabvány

### REST tervezés legnagyobb kihívásai:
* erőforrások határai
* verziókezelés (/api/v1/)
* komplex lekérdezések (REST-ben nehéz → GraphQL alternatíva)
* teljesítmény (N+1 lekérdezések)
* biztonság

## MVC + REST a modern technológiákban
Példák:
* Django REST Framework – Django modell + serializer + viewset
* Spring Boot – Controller + Service + Repository
* Express.js + React – Express kezeli az API-t, React a klienst
### REST API tipikus felépítése:
1. Model (adatbázis entitások)
2. Service (üzleti logika)
3. Controller(végpontok)
4. Routes (útvonalak)
5. Middleware (auth, logging stb.)

## Miért fontos mindezt ismerni?
* A modern szoftverfejlesztés 90%-a API-ra épül
* Csapatmunka egyszerűsödik (frontend/backend)ű
* Mikroszolgáltatások alapja
* Átláthatóbb, modulárisabb rendszerek

## Hova fejlődhet tovább REST?
* GraphQL – rugalmasabb adatlekérdezés
* gRPC – gyors, bináris, mikroservizeknél ideális
* Async API-k (WebSocket, SSE, MQTT) – valós idejű kommunikáció