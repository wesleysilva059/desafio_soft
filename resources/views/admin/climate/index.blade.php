@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        Clima da Região
    </div>

    <div class="body">
        <div class="w-full">
            <?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
            <?php echo $dados['results']['description']; ?><br>
            Nascer do Sol: <?php echo $dados['results']['sunrise']; ?> - Pôr do Sol: <?php echo $dados['results']['sunset']; ?><br>
            Velocidade do vento: <?php echo $dados['results']['wind_speedy']; ?><br>
            <img src="/imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@parent
<script>
    
</script>
@endsection