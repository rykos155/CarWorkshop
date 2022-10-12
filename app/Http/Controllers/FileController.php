<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $files = File::with('car')->where('car_id',$id)->get();
        $car = Car::findOrFail($id);

        return view('files.index', compact('files','car','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)  // metoda dodający dany plik na serwer
    {
        $request->validate([
            'file' => 'mimes:pdf,xlx,csv,txt,xls,jpg,jpeg|max:2048'
            ]);

            $fileModel = new File;

            if($request->file()) {
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
  
                $fileModel->name = time().'_'.$request->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->car_id = $id;
                
            }

            try {
                $fileModel->save();
        
                return redirect()->route('files.index', $id)->with('success', __('Pomyślnie dodano nowy plik'));
                } catch (\Illuminate\Database\QueryException $e) {
                    \Log::error($e);
        
                    switch ($e->getCode()) {
                        case '23000':
                            return redirect()->route('files.index', $id)->with('error', __('Błąd dodawania pliku'));
                            break;
                        default:
                            return redirect()->route('files.index', $id)->with('error', __('Błąd dodawania pliku'));
                    }
                }
    }

    public function downloadFile($id)    // Metoda pobierająca dany plik
    {
        $file = File::findOrFail($id);
        $fileDownload = storage_path(). '/app/public/uploads/'.$file->name;

        return Response::download($fileDownload);
    }

    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();

        $newID = $file->car->id;

        return redirect()->route('files.index', $newID)->with('success', __('Pomyślnie usunięto plik'));
    }
}
