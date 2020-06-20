@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        Prestamos crea
                    </div>
                    <div>
                        <a href="{{ route('loans.create') }}" class="btn btn-danger">
                            {{__('Cancelar')}}
                        </a>
                    </div>

                </div>
                
            </div>
            <div class="card-body">





                <form action="{{ route('loans.store') }}" method="POST">
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="name">{{__('Nombre')}}</label>
                            <select name="client_id" id="client_id" class="form-control @error ('name') is-invalid @enderror">

                                @foreach($clients as $client)
                                <option value="{{ $client['id'] }}">{{$client['name']}} </option>

                                @endforeach

                                @error('client_id')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>

                            
                        </div>
                         <div class="col-md-6">
                            <label for="name">{{__('cantidad')}}</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control @error ('cantidad') is-invalid @enderror">
                            
                              @error('cantidad')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>
                        </div>
                        
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-4">
                            <label for="name">{{__('Numeros Pagos')}}</label>
                            <input type="text" name="numeropagos" id="numeropagos" class="form-control @error ('numeropagos') is-invalid @enderror">
                              @error('numeropagos')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>
                        </div>
                         <div class="col-md-4">
                            <label for="name">{{__('Cuota')}}</label>
                            <input type="text" name="cuota" id="cuota" class="form-control @error ('cuota') is-invalid @enderror">
                              @error('cuota')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="name">{{__('TotalPagar')}}</label>
                            <input type="text" name="totalapagar" id="totalapagar" class="form-control @error ('totalapagar') is-invalid @enderror">
                              @error('totalapagar')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>
                        </div>


                       
                        
                    </div>

                     <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="name">{{__('FechaMinistracion')}}</label>
                            <input type="date" name="fechadeministracion" id="fechadeministracion" class="form-control @error ('fechadeministracion') is-invalid @enderror">
                              @error('fechadeministracion')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>
                        </div>
                         <div class="col-md-6">
                            <label for="name">{{__('FechaVencimiento')}}</label>
                            <input type="date" name="fechadevencimiento" id="fechadevencimiento" class="form-control @error ('fechadevencimiento') is-invalid @enderror">
                              @error('fechadevencimiento')
                                <div class="invalid-feedback">
                                    {{$message}}
                                    
                                </div>
                                @enderror

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg">{{__('Create')}}</button>
                        
                    </div>

                </form>







                
            </div>
            
        </div>
        
    </div>
</div>
@endsection