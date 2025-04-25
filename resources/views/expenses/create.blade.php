@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Incomes</h1>
    <a href="{{ route('incomes.create') }}" class="btn btn-primary">Add Income</a>
    <table class="table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Transaction Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incomes as $income)
            <tr>
                <td>{{ $income->description }}</td>
                <td>{{ $income->amount }}</td>
                <td>{{ $income->transaction_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection