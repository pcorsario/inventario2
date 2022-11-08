<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="codigo_producto"></label>
                <input wire:model="codigo_producto" type="text" class="form-control" id="codigo_producto" placeholder="Codigo Producto">@error('codigo_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nombre_producto"></label>
                <input wire:model="nombre_producto" type="text" class="form-control" id="nombre_producto" placeholder="Nombre Producto">@error('nombre_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_compra"></label>
                <input wire:model="fecha_compra" type="date" class="form-control" id="fecha_compra" placeholder="Fecha Compra">@error('fecha_compra') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="precio"></label>
                <input wire:model="precio" type="text" class="form-control" id="precio" placeholder="Precio">@error('precio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="caracteristicas"></label>
                <input wire:model="caracteristicas" type="text" class="form-control" id="caracteristicas" placeholder="Caracteristicas">@error('caracteristicas') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
            <label for="categoria_id"></label>
                <select wire:model="categoria_id" class="form-control">
                <option value="">Seleccione una opcion</option>
                    @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre_categoria }}</option>
                    @endforeach    
            </select>
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
