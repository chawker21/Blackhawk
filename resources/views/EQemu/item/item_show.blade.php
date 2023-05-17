@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_item')

    <div class="container">
        <div class="container">

            <div class="card">
                <h5 class="card-header">Please Enter A item seach term</h5>
                <div class="card-body">
                    <h5 class="card-title">item search Term</h5>
                    <form action="{{route('/EQemu/item/item_result')}}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="item name" class="form-control">

                        <input type="submit" class="btn btn-primary">
                    </form>


                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">item Data</h5>
            <div class="card-body">
                <h5 class="card-title">item name: {{$item->Name}}</h5>


                item id: {{$item->id}}<br>

                @if($item->loregroup == -1)
                    LORE ITEM
                @endif
                @if($item->magic == 1)
                    MAGIC ITEM
                @endif
                @if($item->fvnodrop == 1)
                    NO TRADE
                @endif
                @if($item->norent == 0)
                    NO RENT
                @endif
                <hr>


                @for($i=0; $i < 32; $i++)

                    @if($slotsbin[$i] == 1)
                        <span>Slot: {{$slots[$i-1]['slot_name']}}</span> <br>
                    @endif
                @endfor
                <img src="/EQ_resources/images/icons/item_{{$item->icon}}.png">
                @if($item->ac != NULL)
                    AC: {{$item->ac}}<br>
                @endif

                @if($item->astr != NULL || $item->astr != 0)
                    STR: +{{$item->astr}}
                @endif
                @if($item->asta != NULL || $item->asta != 0)
                    STA: +{{$item->asta}}
                @endif
                @if($item->adex != NULL || $item->adex != 0)
                    DEX: +{{$item->adex}}
                @endif
                @if($item->aagi != NULL || $item->aagi != 0)
                    AGI: +{{$item->aagi}}
                @endif
                @if($item->aint != NULL || $item->aint  != 0)
                    INT: +{{$item->aint}}
                @endif
                @if($item->awis != NULL || $item->awis != 0)
                    WIS: +{{$item->awis}}
                @endif
                @if($item->acha != NULL || $item->acha != 0)
                    CHA: +{{$item->acha}}
                @endif
                @if($item->hp != NULL)
                    HP: +{{$item->hp}}<br>
                @endif

                @if($item->mana != NULL || $item->mana != 0)
                    Mana: +{{$item->mana}}
                @endif

                @if($item->maxdmg != NULL || $item->maxdmg != 0)
                    Max Damage: +{{$item->maxdmg}}<br>
                @endif

                @if($item->mr != NULL || $item->mr != 0)
                    SV MAGIC: +{{$item->mr}}
                @endif
                @if($item->cr != NULL || $item->cr != 0)
                    SV COLD: +{{$item->cr}}<br>
                @endif

                @if($item->dr != NULL || $item->dr != 0)
                    SV DIS: +{{$item->dr}}
                @endif
                @if($item->fr != NULL || $item->fr != 0)
                    SV FIRE: +{{$item->fr}}<br>
                @endif

                @if($item->pr != NULL || $item->pr != 0)
                    SV POI: +{{$item->pr}}<br>
                @endif


                @if($item->attack != NULL || $item->attack != 0)
                    ATK: +{{$item->attack}}
                @endif

                @if($item->haste != NULL || $item->haste != 0)
                    Haste: +{{$item->haste}}%<br>
                @endif
                @if($item->regen != NULL || $item->regen != 0)
                    Regen: +{{$item->regen}}%<br>
                @endif

                @if($item->weight < 10)
                    WT: 0.{{$item->weight}}
                @elseif($item->weight >= 10)
                    WT: {{$item->weight}}.0
                @endif
                @if($item->itemclass == 1)
                    Weight Reduction: {{$item->bagwr}}%<br>
                    Capacity: {{$item->bagslots}}
                @endif
                Size Capacity:
                @if($item->bagsize == 0)
                    <span>TINY</span>
                @elseif($item->bagsize == 1)
                    <span>SMALL</span>
                @elseif($item->bagsize == 2)
                    <span>MEDIUM</span>
                @elseif($item->bagsize == 3)
                    <span>LARGE</span>
                @elseif($item->bagsize == 4)
                    <span>GIANT</span>
                @elseif($item->bagsize == 5)
                    <span>GIGANTIC</span>
                @endif

                <br>
                Class:
                @if($item->itemclass == 0)

                    @for($i=0; $i < 16; $i++)
                        @if($classbin[$i] == true)
                            <span style="">{{$classes[$i]['class']}}</span>
                        @endif
                    @endfor
                @elseif($item->itemclass == 1)
                    <span>None</span>
                @endif
            </div>

            </li>


            </div>
        </div>
    </div>
@endsection