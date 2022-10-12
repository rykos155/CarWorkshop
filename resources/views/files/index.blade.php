@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col offset-1">
            <h1 class="display-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>    
                Lista plików dla auta {{ $car->brand->brand }} {{ $car->carmodel->model }}
            </h1>
        </div>
        <div class="col-3" >
            <div class="container-fluid">
                <form id="comment-form" method="post" enctype="multipart/form-data" action="{{ route('files.create', $id) }}">  
                    @csrf  
                    <div class="form-group">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <input type="file" name="file" placeholder="Dodaj załącznik" id="chooseFile">
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                @error('file')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        Błąd podczas dodawania pliku
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-success" style="box-shadow: 6px 6px 19px #182019;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>
                                    Dodaj plik
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>     
    </div>  
<hr>
<br>      
    <div class="row">
        <div class="col-sm-12">
            <table id="car-table" class="table table-striped small" style="width:100%">
            <thead style="text-align:center">
                <tr>
                    <th>Nazwa</th>
                    <th>Operacje</th>
                </tr>
            </thead>
        </div>
    </div>  
        <tbody style="text-align:center">
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($files as $file) 
                        <tr>
                            <td>{{ $file->name }}</td>
                            <td width="120">       
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">    
                                    <a type="button" class="btn btn-dark" href="{{ route('cars.showOneCar', $file->car->id) }}">  
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </a>                   
                                    <a type="button" class="btn btn-dark" href="{{ route('files.downloadFile', $file->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                    </a>

                                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#list{{$file->id}}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                    </svg>
                                </button>
                                <div class="modal fade" id="list{{$file->id}}" tabindex="-1" role="dialog" aria-labelledby="listLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="container rounded-3 p-4">
                                                <div class="row align-items-center">
                                                    <div class="col-10">
                                                        <h4 class="modal-title" id="listLabel">USUWANIE PLIKU Z LISTY</h4>
                                                    </div> 
                                                    <div class="col-1">
                                                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                </div>
                                                <br><hr><br>
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-12">
                                                        <h6>Czy napewno chcesz usunąć plik? </h6>
                                                        <h6>{{ $file->name }}</h6>
                                                    </div>
                                                </div>
                                                <br><hr><br>
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            ANULUJ
                                                        </button>
                                                    </div>
                                                    <div class="col-auto">
                                                        <form action="{{ route('files.destroy' ,$file->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">
                                                            USUŃ
                                                        </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </td>       
                        </tr>
                    @endforeach
                </div>
            </div>       
        </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@section('js-scripts')
    <script>
        $(document).ready(function() {
            $('#car-table').DataTable({
                
                dom: 'Bfrtip',
                buttons: [
                    'colvis', 'pageLength'
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pl.json'
                }
            });
        } );
    </script>
@endsection
