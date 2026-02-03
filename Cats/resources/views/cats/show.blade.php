<h1>
    {{$macska->name}}
</h1>

<ul>
    <li>Faj: {{$macska->breed}}</li>
    <li>Szín: {{$macska->color}}</li>
    <li>Kor: {{$macska->age}}</li>
    <li>Nem: {{$macska->isFemale? "nőstény" : "kandúr"}}</li>

</ul>