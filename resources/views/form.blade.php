@extends('layout')

@section('content')
                    <div class = "form">
                        <h1>Input</h1>
                            <form action="/store" method="post">
                            {{ csrf_field() }}
                                <label>firstname</label>
                                <input type="text" name= "firstname">
                                <br>
                                <br>
                                <label>lastname</label>
                                <input type="text" name= "lastname" >
                                <br>
                                <button type="submit"> submit </button>
                            </form>
                    </div>
                    <br>
                    <div class = "hasil">
                        <h1>Hasil </h1>
                        <table class = "tblhasil">
                        <tr>
                            <th>firstname</th>
                            <th>lastname</th>
                        </tr>
                        @foreach ($data as $p)
                        <tr>
                            <td>{{ $p -> firstname}}</td>
                            <td>{{ $p -> lastname }}</td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
@endsection