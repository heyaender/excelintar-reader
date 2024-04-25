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
![](media/17140185527898/17140186877779.jpg)
