@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>
<div class="container-fluid">
    <div class="row justify-content-between align-items-center">
        <div class="col offset-1">
            <h1 class="display-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                    <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                </svg>    
                Lista części do zamówienia
            </h1>
        </div>
    </div>  
<hr>
<br>      
    <div class="row">
        <div class="col-sm-12">
            <table id="part-table" class="table table-striped small" style="width:100%">
            <thead style="text-align:center">
                <tr>
                    <th>Nazwa</th>
                    <th>Kategoria</th>
                    <th>Ilość</th>
                    <th>Cena</th>
                    <th>Stan magazynowy</th>
                    <th>Operacje</th>
                </tr>
            </thead>
        </div>
    </div>  
            <tbody style="text-align:center">
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($parts as $part) 
                        <tr>
                            <td class="align-middle">{{ $part->name }}</td>   
                            <td class="align-middle">{{ $part->category->name }}</td>     
                            <td class="align-middle">{{ $part->amount }}</td>   
                            <td class="align-middle">{{ $part->price }} zł</td>  
                            <td class="align-middle" width="150">
                                @if($part->inStock == 0)
                                    BRAK
                                @else
                                    TAK
                                @endif
                            </td>  
                            <td class="align-middle" width="130">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <a type="button" class="btn btn-dark" href="{{ route('parts.orderedPart' ,$part->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('orders.showOneOrder' ,$part->estimate->order->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('parts.edit' ,$part->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#destroyPart{{$part->id}}">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </button>
                                    <div class="modal fade" id="destroyPart{{$part->id}}" tabindex="-1" role="dialog" aria-labelledby="destroyPartModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="destroyPartModalLabel">Czy napewno chcesz usunąć część?</h3>
                                                    <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <br>
                                                <div class="modal-body">
                                                    <h5><strong>Nazwa części:</strong> {{$part->name}} <br></h5>
                                                    <h5><strong>Ilość:</strong> {{$part->amount}} <br></h5>
                                                    <h5><strong>Cena:</strong> {{$part->price}} zł</h5>
                                                </div>
                                                <hr><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            ANULUJ
                                                        </button>
                                                    </div>
                                                    <div class="col-auto">
                                                        <form action="{{ route('parts.destroy' ,$part->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">
                                                                USUŃ
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>       
                        </tr>
                        </div>
                    </div>
                    @endforeach

                
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
            $('#part-table').DataTable({              
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
