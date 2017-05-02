@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="height: 10%"></div>
        </div>
        <div class="row">
            <div class="col-md-6">Enter Model Name</div>
            <div class="col-md-6"><input type="text"></div>
        </div>
        <div class="row pad-top-5">
            <div class="col-md-12 text-center">Select the fields for your table</div>
        </div>
        <form>
            <div class="wrap" id="tablefield">
                <div class="row" id="1">
                    <div class="col-md-3">Name</div>
                    <div class="col-md-3"><input type="text"></div>
                    <div class="col-md-3">Type</div>
                    <div class="col-md-1">
                        <select>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <button type="button" onclick="$(this).parent().remove()">Delete</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <button type="button" id="add">Add</button>
                </div>
                <div class="col-md-6 text-center">
                    <input type="submit">
                </div>
            </div>
        </form>
    </div>
@endsection
@section('custom-js')
    <script>
        $('#add').click(function () {
            var a = $('#1').html();
            $('#tablefield').append("<div class='row'>" + a + "</div>");
        });
    </script>
@endsection