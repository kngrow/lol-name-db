@extends ('master.master')

@section('title')
register - lol-name-db
@stop

@section('body')

@foreach( $errors->all() as $message )

{!! $message !!}

@endforeach


{!! Form::open( ['action' => 'AuthController@postRegister' ] ) !!}
<h2>Summoner Nameを登録します。</h2>
<div class="row">
  <div class="large-2 columns">
    <label for="summoner_name" class="right inline">Summoner Name</label>
  </div>
  <div class="large-8 columns">
    {!! Form::text('lol_myname', '', ['id' => 'summoner_name','placeholder' => '']) !!}
  </div>
</div>
<div class="row">
  <div class="large-2 columns">
    <label for="server" class="right inline"> Server </label>
  </div>
  <div class="large-3 columns">
    {!!  Form::select('server', array('br' => 'BR',
    'eune' => 'EUNE',
    'euw'=> 'EUW',
    'kr' => 'KR' ,
    'lan' => 'LAN',
    'las' => 'LAS',
    'na' => 'NA',
    'oce' => 'OCE',
    'ru' => 'RU',
    'tr' => 'TR' ), 'na') !!}
  </div>
</div>
<div class="row">
  {!! Form::button('Sign up', ['class' => 'small large-offset-9 large-3', 'type' => 'submit']) !!}
  {!! Form::close() !!}

</div>

@stop
