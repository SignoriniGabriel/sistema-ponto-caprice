@extends('errors::minimal')

@section('title', __('Não Autorizado'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Você não tem permissão para acessar esta página!'))
