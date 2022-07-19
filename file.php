Route::get('televisi/', [LatihanController::class, 'tv']);

Route::get('belanja/', [LatihanController::class, 'belanja']);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TV Station</title>
</head>
<body>
    
    <fieldset>
        <legend>
            <h2>
                Daftar Penyiaran Televisi
            </h2>
        </legend>
        @foreach($tv as $siaran)
                Channel : {{ $siaran['channel']  }} <br />
                Acara : {{ $siaran['acara'] }} <br />
                Jam Tayang : {{ $siaran['jam'] }} <br />
            <hr />
        @endforeach

        Tanggal dibuat : {{ $tgl }}
    </fieldset>

</body>
</html>
</body>
</html>



public function tv() {

$tv = [
    ['channel' => 'Net TV', 'acara' => 'Talk Show', 'jam' => '19.00'],
    ['channel' => 'TVRI', 'acara' => 'Berita Sore', 'jam' => '17.00'],
    ['channel' => 'BEIRNSPORT', 'acara' => 'Sepak Bola', 'jam' => '20.00'],
    ['channel' => 'Ochannel', 'acara' => 'Film', 'jam' => '10.30'],
    ['channel' => 'Indosiar', 'acara' => 'Sinetron', 'jam' => '09.00']
];
$tgl = "13 Juli 2022";

// dd($tv);
return view('pages.televisi', ['tv' => $tv, 'tgl' => $tgl]);
}