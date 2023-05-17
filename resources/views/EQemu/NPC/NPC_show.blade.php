@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_NPC')
    <div class="container">

        <div class="card">
            <h5 class="card-header">NPC Data</h5>
            <div class="card-body">
                <h5 class="card-title">NPC name: {{$NPC->name}}</h5>


                NPC Name: {{$NPC->name}}<br>
                NPC id: {{$NPC->id}}<br>
                NPC level: {{$NPC->level}}<br>
                AC: {{$NPC->AC}} HP: {{$NPC->hp}} Mana: {{$NPC->mana}}
                Max Damage: {{$NPC->maxdmg}} <br> Magic Resistance: {{$NPC->MR}}
                Cold Resistance: {{$NPC->CR}}<br> Disease Resistance: {{$NPC->DR}} Fire Resistance: {{$NPC->FR}}
                <br> Poison Resistance: {{$NPC->PR}}<br> STR: {{$NPC->STR}} STA: {{$NPC->STA}}<br> DEX: {{$NPC->DEX}}
                AGI: {{$NPC->AGI}}<br> INT: {{$NPC->_INT}} WIS: {{$NPC->WIS}}<br> CHA: {{$NPC->CHA}} ATK: {{$NPC->ATK}}
                </li>


            </div>
        </div>
    </div>
@endsection