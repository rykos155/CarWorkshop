@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>
<div class="container-fluid">
    <div class="row justify-content-between align-items-center">
        <div class="col-sm-5 offset-md-1">
            <h1 class="display-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-truck-flatbed" viewBox="0 0 16 16">
                    <path d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.732 0h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4a2 2 0 0 1 1.732 1z"/>
                </svg>
                Baza samochodów</h1>
        </div>
        <div class="col-sm-2">
            <div class="text-right">
                <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('carmodels.create')}}" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                    Dodaj nowy samochód
                </a>
            </div>
        </div>
    </div>  
<hr>
<br>           
    <div class="row">
        <div class="col-sm-12">
            <table id="carModel-table" class="table table-striped small" style="width:100%">
            <thead style="text-align:center">
                <tr>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Operacje</th>
                </tr>
            </thead>
        </div>
    </div>  
            <tbody style="text-align:center">
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($carmodels as $carmodel) 
                        <tr>
                            <td>{{ $carmodel->brand->brand }}</td>
                            <td>{{ $carmodel->model }}</td>           
                            <td width="160">
                                <div class="btn-group" role="group" aria-label="Basic outlined example"> 
                                    <a type="button" class="btn btn-dark" href="{{ route('carmodels.edit' ,$carmodel->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>       
                        </tr>
                        </div>
                    </div>
                    @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@section('js-scripts')

    <script>
        $(document).ready(function() {
            $('#carModel-table').DataTable({
                
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
