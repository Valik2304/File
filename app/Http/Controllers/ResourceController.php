<?php

namespace App\Http\Controllers;

use App\File;
use App\Excel_Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\File;
use PHPExcel_Reader_CSV;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Http\Requests\UploadPhotoRequest;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\Uppercase;


class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (view()->exists('index')){

            return view('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadPhotoRequest $request)
    {

        $input = $request->except('_token');

        $path = public_path().'/files_csv';
        $file = $request->file('name_file');

//        $File = File::create([
//            'name' => $file,
//        ]);

        $file_2 = public_path().'/original_file_csv';

        $file_name = time().'-'.$file->getClientOriginalName();//dd($file_name);
        $file_type = time().'-'.$file->getClientMimeType();//dd($file_type);
        $dd = $this->getLines($file);//dd($dd);
        $date = [];
//        for ($i = 0; $i < count($dd); $i ++) {//dd($dd);
//            //Excel_Project::firstOrCreate($dd[$i]);
////                foreach ($dd[$i] as $key => $value){//dd($value);
////                    yield $value;
//            $date[] = [
//                'Heading_1' =>$dd[$i]['Heading_1'],
//                'Heading_2' =>$dd[$i]['Heading_2'],
//                'Category'=>$dd[$i]['Category'],
//                'Manufacturer' => $dd[$i]['Manufacturer'],
//                'Name' =>$dd[$i]['Name'],
//                'Model_number' =>$dd[$i]['Model_number'],
//                'Text' =>$dd[$i]['Text'],
//                'Price' => $dd[$i]['Price'],
//                'Guarantee' =>$dd[$i]['Guarantee'],
//                'Availability' =>$dd[$i]['Availability'],
//                'Other' =>$dd[$i]['']];
//
//
//            //}
//            $DB = DB::table('excel_project')->insert($date);
//        }//dd($date);
        if ($dd){
            return redirect()->route('index')->with('status', 'Записи додано!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ExcelFile = Excel_Project::all();
        $data =[
            'Excel' =>$ExcelFile,
        ];
        return view('index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function getLines($file)
    {
        $header = null;
        $data = [];
        $handle = @fopen($file, "r");
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
                    'Other' =>$buffer[10]];

            }DB::table('excel_project')->insert($date);
            if (!feof($handle)) {
                echo "Помилка: fgets() зазнала невдачі\n";
            }
            fclose($handle);
        }//dd($date);//
        return $data;//
}}
