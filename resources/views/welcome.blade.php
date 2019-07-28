@extends('layouts.admin')
@guest
    <script>window.location = "login";</script>
@else 
    <script>window.location = "home";</script>
@endguest

