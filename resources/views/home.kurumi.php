<div>
  @if 1 == 1 :
  <h1>Selamat Datang Di {{ $data['title'] }}</h1>
  @elif 1 == 1 :
  <h1>ok</h1>
  @else
  <h1>salah!</h1>
  @endif
</div>


@each $data['hewan'] as $hewan :
{{ $hewan }} <br />
@endeach