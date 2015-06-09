@extends('master.master')
@section('title','lol-name-db')

@section('body')


<div class="main">
  <h2>これなに？</h2>
    <p>league of legendsで「あれ、このsummonerと試合したくね？」ってことありませんか？ <br>
      これに登録しておけば、試合したsummonerを確認することができます<br>

    </p>
  <div class="oauth"><a href="login" class="button small ">Twitter認証</a></div>
  <div class="center">
現在このサービスを利用中のSummonerが出会ったSummoner数：
{{-- {{ DB::table('namelist')->distinct()->count('summoner_name');  }}人 --}}
  </div>

  <div class="howto" id="howto">
    <h2>使い方</h2>
    <ul>
      <li>登録します</li>
      <ul>
        <li><s>登録後、データを取得しますが、APIの仕様で時間がかかります。</s>現在調整中…</li>
      </ul>
      <li>試合します</li>
      <li>更新を待ちます</li>
      <ul>
        <li>更新は１時間に１回です。</li>
      </ul>
      <li>見ます</li>
      <h2>「あ…この人戦ったことあるかも…！」を待ちます</h2>

    </ul>
  </div>
  <!-- <div class="todo">
    <h2>残タスク</h2>
    <ul>
      <li>かっちょいい名前</li>
      <li>namelistのページネーション?</li>
      <li>おされなfavicon</li>
      <li>設定変更機能</li>
      <li>削除機能</li>
      <li>初回登録時の更新がうまくいかない？</li> -->
    </ul>
  </div>
</div>
</div>

@stop
