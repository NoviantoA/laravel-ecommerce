<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Kategori berhasil dihapus');
    }

    public function deleteSubcategory($id){
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message','Subkategori berhasil dihapus');
    }

    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layout.base');
    }
}