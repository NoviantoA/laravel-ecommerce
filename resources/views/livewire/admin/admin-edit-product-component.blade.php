<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Produk
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.prducts')}}" class="btn btn-success pull-right">Semua Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Produk</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Nama Produk" class="form-control input-md"
                                    wire:model="name" wire:keyup="generateSlug">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Produk Sub Link</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Produk Sub Link" class="form-control input-md"
                                    wire:model="slug">
                                @error('slug')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" wire:ignore>
                            <label class="col-md-4 control-label">Deskripsi Singkat Produk</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="short_description"
                                    placeholder="Deskripsi Singkat Produk" wire:model="short_description"></textarea>
                                @error('short_description')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Deskripsi Produk</label>
                            <div class="col-md-4" wire:ignore>
                                <textarea class="form-control" id="description" placeholder="Deskripsi Produk"
                                    wire:model="description"></textarea>
                                @error('description')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga Normal</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Harga Normal" class="form-control input-md"
                                    wire:model="regular_price">
                                @error('regular_price')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga Obral</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Harga Obral" class="form-control input-md"
                                    wire:model="sale_price">
                                @error('sale_price')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">SKU</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                                @error('SKU')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Stock</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="stock_status">
                                    <option value="instock">InStock</option>
                                    <option value="outstock">Stock Habis</option>
                                </select>
                                @error('stock_status')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Fitur</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="featured">
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Jumlah" class="form-control input-md"
                                    wire:model="quantity">
                                @error('quantity')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gambar Produk</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="newimage">
                                @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                                @else
                                <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                                @endif
                                @error('newimage')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Produk Galeri</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="newimages" multiple>
                                @if($newimages)
                                @foreach($newimages as $newimage)
                                @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                                @endif
                                @endforeach
                                @else
                                @foreach($images as $image)
                                @if($image)
                                <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Kategori</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Sub Kategori</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="scategory_id">
                                    <option value="0">Pilih Kategori</option>
                                    @foreach ($scategories as $scategory)
                                    <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                    @endforeach
                                </select>
                                @error('scategory_id')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(function() {
    tinymce.init({
        selector: '#short_description',
        setup: function(editor) {
            editor.on('Change', function(e) {
                tinyMCE.triggerSave();
                var sd_data = $('#short_description').val();
                @this.set('short_description', sd_data);
            })
        }
    })

    tinymce.init({
        selector: '#description',
        setup: function(editor) {
            editor.on('Change', function(e) {
                tinyMCE.triggerSave();
                var d_data = $('#description').val();
                @this.set('description', d_data);
            })
        }
    })
});
</script>
@endpush