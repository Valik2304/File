<?php

namespace App\Http\Controllers;

use App\Excel_Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use PHPExcel_Reader_CSV;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Http\Requests\UploadPhotoRequest;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\Uppercase;

class File_ExcelController extends Controller
{

    public function execute(Request  $request){



        if ($request->isMethod('post')) {

            $input = $request->except('_token');



            $file = $request->file('name_file');
//            dd($_FILES);
            $rule = [//mimes:xlsx,xls,csv|
                'name_file' => 'required|file|
                mimetypes:text/csv,text/plain,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,
                application/vnd.ms-excel|min:1|max:100000'
            ];

            $messages = [
//                'required'  => "Поле :attribute обов'язкове  до заповнення",
                'file' => 'Повинно бути файлом',
                //'mimes' => 'Розширення повинно бути - xlsx,xls,csv',
                //'size' =>'Розмір повинен бути не більше 10000'
            ];
            $validator = Validator::make([
                'name_file' => $file
            ],$rule, $messages);
            if ($validator->fails()){
                return redirect()->route('index')->withErrors($validator);
            }

//            dd('ok');


           $path = public_path().'/file_csv';

           $file_2 = public_path().'/original_file_csv';

           $file_name = $file->getClientOriginalName();//dd($file_name);
           $file_type = $file->getClientMimeType();//dd($file_type);
           $file->move($path,$file_name);
           $file_folder = $file_name;





//            $row = 1;
//            if ($handle = fopen($file, 'r')){
//
//                while ($datA = fgetcsv($handle,10000, ",")){
//
//                    $num = count($datA);
//                    echo "<p> $num полей в строке $row: <br /></p>\n";
//                    $row++;
//                    for ($c=0; $c < $num; $c++) {
//                        echo $datA[$c] . "<br />\n";
//                    }
//
//                }
//
//                fclose($handle);
//            }
//            echo '<br/>';



//            $fp = fopen($file, 'r');
//            if (!$fp) {
//                echo 'Ошибка при открытии'. $file;
//            }
//            while (!feof($fp)) {
//
//                $content = fgetcsv($fp);
//                $count = count($content);
//                for ($i = 0; $i < $count; $i++)
//                {
//                    echo $content[$i];
//                }
//
//                echo "<br/>";
//            }

//            function getLines($file) {
//                $f = fopen($file, 'r');
//                if (!$f) echo 'Помилка зчитування файлу!!!';
//
//                while ($line = fgetcsv($f,100000,'|')) {
//                    yield $line;
//                    $count = count($line);
//
//                    for ($i = 0;$i<$count;$i++){
//                        yield $i;
//                        echo $line[$i];
//                    }
//
//                    echo '<br/>';
//                }
//                fclose($f);
//            }
//
//            $getLines = getLines($file);
//            foreach ($getLines as $value){
//                //  echo "$value\n";
//                echo '<br/>';
////            dump($value);
//            }


            $dd = $this->getLines($file_folder);
            if ($dd){
                $count_records = Excel_Project::all()->count();
                //$count_records = new Excel_Project();
                //$count_records->Count_Records();
                //$count = count($dd);
                return redirect()->route('index')->with('status', "Всього успішно відправлено записів: $count_records! ");
            }
            //dd($dd);
//            $date = [];
//            for ($i = 0; $i < count($dd); $i ++) {//dd($dd);
//                //Excel_Project::firstOrCreate($dd[$i]);
////                foreach ($dd[$i] as $key => $value){//dd($value);
////                    yield $value;
//                    $date[] = [
//                        'Heading_1' =>$dd[$i]['Heading_1'],
//                        'Heading_2' =>$dd[$i]['Heading_2'],
//                        'Category'=>$dd[$i]['Category'],
//                        'Manufacturer' => $dd[$i]['Manufacturer'],
//                        'Name' =>$dd[$i]['Name'],
//                        'Model_number' =>$dd[$i]['Model_number'],
//                        'Text' =>$dd[$i]['Text'],
//                        'Price' => $dd[$i]['Price'],
//                        'Guarantee' =>$dd[$i]['Guarantee'],
//                        'Availability' =>$dd[$i]['Availability'],
//                        'Other' =>$dd[$i]['']];
//
//
//            //}
//            DB::table('excel_project')->insert($date);
//            }dd($date);


//        {
//            Excel_Project::firstOrCreate($customerArr[$i]);
//        }
//            function getLines($file)
//            {
//                $header = null;
//                $data = [];
//                $handle = @fopen($file, "r");
//                if ($handle) {
//                    while (($buffer = fgetcsv($handle, 4096, ';')) !== false) {
//
////yield $buffer;
//                        if (!$header) {
//                            $header = $buffer;
//                        } else $data[] = array_combine($header, $buffer);
//                        //dd( $buffer).'<br/>';
//
//
//                    }
//                    if (!feof($handle)) {
//                        echo "Помилка: fgets() зазнала невдачі\n";
//                    }
//                    fclose($handle);
//                }//dd($data);//
//                return $data;//
//            }


            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }
//            $read = \PhpOffice\PhpSpreadsheet\Reader\IReader::


            dd('Yes');
        }



        if (view()->exists('index_2')){

            return view('index_2');
        }

    }


    private function getLines($file_folder)
    {//dd($file_folder);
        $header = null;
        $data = [];
        $handle = @fopen($file_folder, "r");
        if ($handle) {

            while (($buffer = fgetcsv($handle, 4096, ';')) !== false) {//dd($buffer);
//yield $buffer;
                if (!$header) {
                    $header = $buffer;
                } else $data[] = array_combine($header, $buffer);//dd($buffer);


                $date[] = [
                    'Heading_1' =>$buffer[0],
                    'Heading_2' =>$buffer[1],
                    'Category'=>$buffer[2],
                    'Manufacturer' => $buffer[3],
                    'Name' =>$buffer[4],
                    'Model_number' =>$buffer[5],
                    'Text' =>$buffer[6],
                    'Price' => $buffer[7],
                    'Guarantee' =>$buffer[8],
                    'Availability' =>$buffer[9],
                    'Other' =>$buffer[10]
                ];
//                $val = Validator::make($date,[
//                    'Model_number' =>'unique'
//                ]);
//                if ($val->fails()){
//                    unset($date['Model_number']);//перевірка на дублювання записів і видалення , але поки видал і оригінал і дубль;
//                }

            }//dd($date);
            DB::table('excel_project')->insert($date);

            if (!feof($handle)) {
                echo "Помилка: fgets() зазнала невдачі\n";
            }
            fclose($handle);
        }//dd($date);//
        return $date;//
    }


//    public function importCsv($file){
//        $file = public_path('/files_csv/1575616168-catalog_for_test (2) – копія');
//        $customerArr = $this->getLines($file);
//
//        for ($i = 0; $i < count($customerArr); $i ++)
//        {
//            Excel_Project::firstOrCreate($customerArr[$i]);
//        }
//
//        return 'Jobi done or what ever';
//    }

}
