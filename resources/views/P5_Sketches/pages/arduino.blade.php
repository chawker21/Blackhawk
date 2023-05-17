@extends('layouts.app')

@section('content')

    <arduino></arduino>


@endsection

let n = 0;
const c = 5;

const a = n * 137.5;
const r = c  * p.sqrt(n);
const x = r * p.cos(a) + p.width / 2;
const y = r * p.sin(a) + p.height / 2;
p.fill(255);
p.ellipse(x, y, 8, 8);