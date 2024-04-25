### Documentation Excelintar Reader (Import Excel)

##### How to install

`composer require heyaender/excelintar-reader`

##### How to use

```$excel = Excel::open($file);

$sheet = $excel->getSheet('Articles');
$sheet->setReadArea('B5');
foreach ($sheet->nextRow() as $rowNum => $rowData) {
    $user = User::create([
        'name' => $rowData['B'],
        'birthday' => new \Carbon($rowData['C']),
        'password' => bcrypt($rowData['D']),
    ]);
    Article::create([
        'user_id' => $user->id,
        'title' => $rowData['E'],
        'date' => new \Carbon($rowData['F']),
        'public' => $rowData['G'] === 'yes',
    ]);
}
```

###### Example Excel to Import
<img width="431" alt="image" src="https://github.com/heyaender/excelintar-reader/assets/59676479/7303d5f2-5dc0-4c79-99cd-45b1f160faae">

