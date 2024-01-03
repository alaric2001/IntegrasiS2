@extends('template.main')
@section('title','<nama equipment> Equipment Details -')
@section('header', '<nama equipment> Equipment Details')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="#" class="btn btn-primary btn-block">Edit</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-primary btn-block">Delete</a>
        </div>
    </div>
    <table class="table border-0 my-3">
        <tbody>
            <tr>
                <td><b>ID</b></td>
                <td>:</td>
                <td>2345325</td>
            </tr>
            <tr>
                <td class="fit"><b>Equipment Name</b></td>
                <td class="fit">:</td>
                <td>Conveyor XYZ</td>
            </tr>
            <tr>
                <td><b>Equipment Type</b></td>
                <td>:</td>
                <td>NewXT</td>
            </tr>
            <tr>
                <td><b>Aktivitas</b></td>
                <td>:</td>
                <td>Act. Billet</td>
            </tr>
            <tr>
                <td><b>Kapasitas</b></td>
                <td>:</td>
                <td>53 product/jam</td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>:</td>
                <td>Active</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
