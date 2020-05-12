
@extends('layouts.app')

@section('css')
<style>
    /* css */
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    Você está logado!
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // js
</script>
@endsection