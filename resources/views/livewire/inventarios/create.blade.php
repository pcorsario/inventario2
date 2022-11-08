<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="fecha_inventario">Fecha</label>
                <input wire:model="fecha_inventario" type="date" class="form-control" id="fecha_inventario" placeholder="Fecha Inventario">@error('fecha_inventario') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="hora_inventario">Hora</label>
                <input wire:model="hora_inventario" type="time" class="form-control" id="hora_inventario" placeholder="Hora Inventario">@error('hora_inventario') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
            <label for="categoria_id">Producto</label>
                <select wire:model="producto_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                    @endforeach    
            </select>
            </div>
            <div class="form-group">
                <label for="condicion_id">Condicion</label>
                <!-- <input wire:model="condicion_id" type="text" class="form-control" id="condicion_id" placeholder="Condicion Id">@error('condicion_id') <span class="error text-danger">{{ $message }}</span> @enderror -->
                <select wire:model="condicion_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($condicions as $condicion)
                <option value="{{ $condicion->id }}">{{ $condicion->condicion }}</option>
                    @endforeach    
            </select>
            </div>
            <div class="form-group">
                <label for="sede_id">Sede</label>
                <!-- <input wire:model="sede_id" type="text" class="form-control" id="sede_id" placeholder="Sede Id">@error('sede_id') <span class="error text-danger">{{ $message }}</span> @enderror -->
                <select wire:model="sede_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($sedes as $sede)
                <option value="{{ $sede->id }}">{{ $sede->nom_sede }}</option>
                    @endforeach    
            </select>
            </div>
            <div class="form-group">
            <label for="planta_id">Planta</label>
                <!-- <label for="planta_id"></label>
                <input wire:model="planta_id" type="text" class="form-control" id="planta_id" placeholder="Planta Id">@error('planta_id') <span class="error text-danger">{{ $message }}</span> @enderror -->
                <select wire:model="planta_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($plantas as $planta)
                <option value="{{ $planta->id }}">{{ $planta->nom_planta }}</option>
                    @endforeach    
            </select>
            </div>
            <div class="form-group">
                <label for="departamento_id">Departamento</label>
                <!-- <input wire:model="departamento_id" type="text" class="form-control" id="departamento_id" placeholder="Departamento Id">@error('departamento_id') <span class="error text-danger">{{ $message }}</span> @enderror -->
                <select wire:model="departamento_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->nombre_departamento }}</option>
                    @endforeach    
            </select>
            </div>
            <div class="form-group">
                <label for="user_id">Custodio</label>
                <!-- <input wire:model="user_id" type="text" class="form-control" id="user_id" placeholder="User Id">@error('user_id') <span class="error text-danger">{{ $message }}</span> @enderror -->
                <select wire:model="user_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach    
            </select>
            </div>
            <div class="form-group">
                <label for="cantidad"></label>
                <input hidden="false" wire:model="cantidad" type="text" class="form-control" id="cantidad" placeholder="Cantidad">@error('cantidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
